<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pembayaran; 
use App\Models\Layanan; 
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
{
    // 1. Ambil data transaksi + pembayaran pakai DB query langsung (hindari masalah Oracle uppercase Eloquent)
    $transaksis = DB::table('TRANSAKSIS as t')
        ->leftJoin('PEMBAYARANS as p', 'p.TRANSAKSI_ID', '=', 't.ID')
        ->select(
            't.ID as id',
            't.TGL_TRANSAKSI as tgl_transaksi',
            't.LAYANAN_ID as layanan_id',
            'p.TOTAL_BAYAR as total_bayar',
            'p.METODE_PEMBAYARAN as metode_pembayaran',
            'p.TGL_BAYAR as tgl_bayar'
        )
        ->orderBy('t.ID', 'desc')
        ->get();

    $pembayarans = \App\Models\Pembayaran::all();
    $layanans = Layanan::all();

    // 2. Hitung Total Pendapatan Bulan Ini
    $pendapatanBulanIni = Pembayaran::whereMonth('TGL_BAYAR', now()->month)
                                    ->whereYear('TGL_BAYAR', now()->year)
                                    ->sum('TOTAL_BAYAR') ?? 0;

    // 3. Hitung Pendapatan Hari Ini
    $pendapatanHariIni = Pembayaran::whereDate('TGL_BAYAR', today())->sum('TOTAL_BAYAR') ?? 0;

    // 4. Cari Metode Pembayaran Terpopuler
    $totalTransaksiBerdana = Pembayaran::count();

    $metodePopuler = Pembayaran::select('METODE_PEMBAYARAN', DB::raw('count(*) as total'))
                               ->groupBy('METODE_PEMBAYARAN')
                               ->orderByDesc('total')
                               ->first();

    $namaMetode = 'Belum Ada';
    $persenMetode = 0;

    if ($metodePopuler) {
        $namaMetode = $metodePopuler->METODE_PEMBAYARAN ?? $metodePopuler->metode_pembayaran ?? 'Belum Ada';
        $totalMetode = $metodePopuler->total ?? 0;
        $persenMetode = $totalTransaksiBerdana > 0 ? round(($totalMetode / $totalTransaksiBerdana) * 100) : 0;
    }

    // 5. Return semua variabel ke view
    return view('pembayaran', compact(
        'pembayarans',
        'transaksis',
        'layanans',
        'pendapatanBulanIni',
        'pendapatanHariIni',
        'namaMetode',
        'persenMetode'
    ));
}

    public function simpanMetode(Request $request, $transaksi_id)
{
    $request->validate([
        'metode_pembayaran' => 'required|string',
        'total_bayar'       => 'required|numeric|min:0',
        'layanan_id'        => 'nullable|integer'
    ]);

    // Cast ke integer biar Oracle ga bingung tipe data
    $tid = (int) $transaksi_id;

    $existing = DB::table('PEMBAYARANS')
        ->where('TRANSAKSI_ID', $tid)
        ->first();

    if ($existing) {
        DB::table('PEMBAYARANS')
            ->where('TRANSAKSI_ID', $tid)
            ->update([
                'METODE_PEMBAYARAN' => $request->metode_pembayaran,
                'TGL_BAYAR'         => now(),
                'TOTAL_BAYAR'       => (int) $request->total_bayar,
                'UPDATED_AT'        => now(),
            ]);
    } else {
        DB::table('PEMBAYARANS')->insert([
            'TRANSAKSI_ID'      => $tid,
            'METODE_PEMBAYARAN' => $request->metode_pembayaran,
            'TGL_BAYAR'         => now(),
            'TOTAL_BAYAR'       => (int) $request->total_bayar,
            'CREATED_AT'        => now(),
            'UPDATED_AT'        => now(),
        ]);
    }

    if ($request->filled('layanan_id')) {
        DB::table('TRANSAKSIS')
            ->where('ID', $tid)
            ->update(['LAYANAN_ID' => (int) $request->layanan_id]);
    }

    return redirect()->back()->with('success', 'Pembayaran sebesar Rp ' . number_format($request->total_bayar, 0, ',', '.') . ' berhasil disimpan!');
}

public function simpanLayanan(Request $request, $transaksi_id)
{
    DB::table('TRANSAKSIS')
        ->where('ID', (int) $transaksi_id)
        ->update(['LAYANAN_ID' => (int) $request->layanan_id]);

    return redirect()->back()->with('success', 'Layanan berhasil dipilih!');
}
}