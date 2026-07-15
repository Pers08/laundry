<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Transaksi;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        $totalJenis = $layanans->count();
        $rataHarga = $layanans->avg('harga_perkg') ?? 0;

        $populer = Transaksi::select('layanan_id', \DB::raw('count(*) as total'))
            ->groupBy('layanan_id')
            ->orderByDesc('total')
            ->first();

        $layananPopuler = 'Belum Ada';
        if ($populer && $populer->layanan) {
            $layananPopuler = $populer->layanan->nama_layanan;
        }

        return view('layanan', compact('layanans', 'totalJenis', 'rataHarga', 'layananPopuler'));
    }

    public function store(Request $request)
    {
        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'harga_perkg'  => $request->harga_perkg,
            'satuan'       => $request->satuan,
            'status'       => 'aktif',
        ]);

        return redirect()->back()->with('success', 'Layanan berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->update([
            'nama_layanan' => $request->nama_layanan,
            'harga_perkg'  => $request->harga_perkg,
            'satuan'       => $request->satuan,
        ]);

        return redirect()->back()->with('success', 'Layanan berhasil diupdate!');
    }

    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Layanan berhasil dihapus!');
    }

    public function toggleStatus($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->status = $layanan->status === 'aktif' ? 'nonaktif' : 'aktif';
        $layanan->save();

        return response()->json(['success' => true, 'status' => $layanan->status]);
    }

}