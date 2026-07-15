<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use App\Models\Layanan;

class DetailController extends Controller
{
    public function index()
{
    // 1. Hitung summary pakai DB langsung
    $totalPendapatan = \Illuminate\Support\Facades\DB::table('PEMBAYARANS')->sum('TOTAL_BAYAR') ?? 0;
    $jumlahTransaksi = \Illuminate\Support\Facades\DB::table('TRANSAKSIS')->count();

    // 2. Ambil data dengan join langsung (hindari masalah Oracle uppercase Eloquent)
    $allData = \Illuminate\Support\Facades\DB::table('TRANSAKSIS as t')
        ->leftJoin('PEMBAYARANS as p', 'p.TRANSAKSI_ID', '=', 't.ID')
        ->leftJoin('LAYANANS as l', 'l.ID', '=', 't.LAYANAN_ID')
        ->select(
            't.ID as id',
            't.TGL_TRANSAKSI as tgl_transaksi',
            'l.NAMA_LAYANAN as nama_layanan',
            'l.HARGA_PERKG as harga_perkg',
            'p.TOTAL_BAYAR as total_bayar'
        )
        ->orderBy('t.ID', 'desc')
        ->get();

    // 3. Hitung total berat
    $totalBerat = 0;
    foreach ($allData as $row) {
        $harga = $row->harga_perkg ?? 0;
        $bayar = $row->total_bayar ?? 0;
        if ($harga > 0) $totalBerat += ($bayar / $harga);
    }

    // 4. Paginasi manual
    $page = request()->get('page', 1);
    $perPage = 10;
    $paginatedItems = $allData->forPage($page, $perPage);
    $transaksis = new \Illuminate\Pagination\LengthAwarePaginator(
        $paginatedItems,
        $allData->count(),
        $perPage,
        $page,
        ['path' => request()->url()]
    );

    // 5. Tambah berat_otomatis per baris
    foreach ($transaksis as $row) {
        $harga = $row->harga_perkg ?? 0;
        $bayar = $row->total_bayar ?? 0;
        $row->berat_otomatis = ($harga > 0) ? ($bayar / $harga) : 0;
    }

    $grafikMingguan = ['Sen' => 40, 'Sel' => 60, 'Rab' => 30, 'Kam' => 75, 'Jum' => 90, 'Sab' => 50, 'Min' => 25];
    $namaLayananInsight = 'Layanan Standar';
    $persenInsight = 0;

    return view('detail', compact(
        'transaksis', 'totalPendapatan', 'totalBerat', 'jumlahTransaksi',
        'grafikMingguan', 'namaLayananInsight', 'persenInsight'
    ));
}
}