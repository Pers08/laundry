<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaksi::with('pelanggan')->orderBy('ID', 'desc');

        if ($request->filled('status') && $request->status !== 'semua') {
           $query->where('status_ambil', $request->status);
        }

        $transaksi = $query->get();

        $pelanggan = Pelanggan::all();
        $layanans = \App\Models\Layanan::all();

        return view('transaksi', compact(
            'transaksi',
            'pelanggan',
            'layanans'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id'  => 'required',
            'tgl_transaksi' => 'required|date',
            'tgl_selesai'   => 'required|date',
            'status_ambil'  => 'required|string',
        ]);

        $jamSekarang = date('H:i:s');
        Transaksi::create([
            'pelanggan_id'  => $request->pelanggan_id,
            'tgl_transaksi' => $request->tgl_transaksi . ' ' . $jamSekarang,
            'tgl_selesai'   => $request->tgl_selesai . ' ' . $jamSekarang,
            'status_ambil'  => $request->status_ambil,
            'layanan_id'    => $request->layanan_id,
        ]);

        if ($request->filled('layanan_id') && $request->filled('subtotal')) {
            DetailTransaksi::create([
                'transaksi_id' => $transaksi->id,
                'layanan_id'   => $request->layanan_id,
                'jumlah_qty'   => $request->berat ?? 1,
                'subtotal'     => $request->subtotal
            ]);
        }

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan!');
    }

public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status_ambil' => 'required|string',
    ]);

    // Pakai DB query langsung karena Oracle primary key uppercase
    DB::table('TRANSAKSIS')
        ->where('ID', $id)
        ->update(['STATUS_AMBIL' => $request->status_ambil]);

    return redirect()->back()->with('success', 'Status transaksi berhasil diperbarui!');
}
}