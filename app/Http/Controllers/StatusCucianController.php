<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatusCucianController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Cari pelanggan berdasarkan user_id
        $pelanggan = DB::table('PELANGGANS')
            ->where('USER_ID', $user->id)
            ->first();

        $transaksi = null;
        if ($pelanggan) {
            // Ambil transaksi terbaru pakai DB query langsung (hindari masalah Oracle uppercase)
            $transaksi = DB::table('TRANSAKSIS')
                ->where('PELANGGAN_ID', $pelanggan->id)
                ->orderBy('ID', 'desc')
                ->first();
        }
        $riwayat = DB::table('TRANSAKSIS as t')
            ->leftJoin('LAYANANS as l', 'l.ID', '=', 't.LAYANAN_ID')
            ->leftJoin('PEMBAYARANS as p', 'p.TRANSAKSI_ID', '=', 't.ID')
            ->where('t.PELANGGAN_ID', $pelanggan->id)
            ->where('t.STATUS_AMBIL', 'Selesai')
            ->select(
                't.ID as id',
                't.TGL_TRANSAKSI as tgl_transaksi',
                't.TGL_SELESAI as tgl_selesai',
                'l.NAMA_LAYANAN as nama_layanan',
                'p.TOTAL_BAYAR as total_bayar',
                'p.METODE_PEMBAYARAN as metode_pembayaran'
            )
            ->orderBy('t.ID', 'desc')
            ->get();

        return view('status', compact('user', 'pelanggan', 'transaksi', 'riwayat'));
    }
}