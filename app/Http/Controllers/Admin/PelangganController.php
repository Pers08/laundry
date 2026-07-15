<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan halaman utama tabel pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();
        return view('pelanggan', compact('pelanggans'));
    }

    // Memproses penyimpanan data pelanggan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => $request->nama,
            'nomor_telp' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    // Memproses hapus data pelanggan
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->back()->with('success', 'Pelanggan berhasil dihapus!');
    }

    public function update(Request $request, $id)
{
    // 1. Validasi inputan dari modal edit
    $request->validate([
        'nama' => 'required|string|max:255',
        'telepon' => 'required|string|max:20',
        'alamat' => 'nullable|string',
    ]);

    // 2. Cari data pelanggannya berdasarkan ID
    $pelanggan = Pelanggan::findOrFail($id);

    // 3. Update data yang boleh diubah saja (ID tidak ikut di-update)
    $pelanggan->update([
        'nama_pelanggan' => $request->nama,
        'nomor_telp' => $request->telepon,
        'alamat' => $request->alamat,
    ]);

    // 4. Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui!');
}
}