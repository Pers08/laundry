<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Ringkasan Order = total semua transaksi
        $totalOrder = DB::table('TRANSAKSIS')->count();

        // 2. Total Pendapatan = sum semua pembayaran
        $totalPendapatan = DB::table('PEMBAYARANS')->sum('TOTAL_BAYAR') ?? 0;

        // 3. Order Aktif = transaksi yang belum selesai
        $orderAktif = DB::table('TRANSAKSIS')
            ->whereIn('STATUS_AMBIL', ['Diterima', 'Dicuci', 'Disetrika', 'Siap Diambil'])
            ->count();

        // 4. Statistik Pelanggan = total pelanggan terdaftar
        $totalPelanggan = DB::table('PELANGGANS')->count();

        // 5. Order terbaru untuk tabel
        $orderTerbaru = DB::table('TRANSAKSIS as t')
            ->leftJoin('PELANGGANS as p', 'p.ID', '=', 't.PELANGGAN_ID')
            ->leftJoin('LAYANANS as l', 'l.ID', '=', 't.LAYANAN_ID')
            ->leftJoin('PEMBAYARANS as pb', 'pb.TRANSAKSI_ID', '=', 't.ID')
            ->select(
                't.ID as id',
                'p.NAMA_PELANGGAN as nama_pelanggan',
                'l.NAMA_LAYANAN as nama_layanan',
                't.STATUS_AMBIL as status_ambil',
                'pb.TOTAL_BAYAR as total_bayar'
            )
            ->orderBy('t.ID', 'desc')
            ->limit(4)
            ->get();

        return view('dashboard', compact(
            'totalOrder',
            'totalPendapatan',
            'orderAktif',
            'totalPelanggan',
            'orderTerbaru'
        ));
    }
}