<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\LayananController; // <-- INI IMPORT BARU BUAT LAYANAN
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\StatusCucianController;
use App\Http\Controllers\ProfilePelangganController;
use Illuminate\Support\Facades\Route;


// Halaman Utama (Front-end Laundry)
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/home', [FrontController::class, 'index'])->name('home');

// Route Halaman Depan Lainnya
Route::get('/catalog', [FrontController::class, 'catalog'])->name('catalog');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::middleware(['auth'])->group(function () {
    Route::get('/status-cucian', [StatusCucianController::class, 'index'])->name('status-cucian');
    Route::get('/profile-edit', [ProfilePelangganController::class, 'edit'])->name('profile.pelanggan.edit');
    Route::put('/profile-edit', [ProfilePelangganController::class, 'update'])->name('profile.pelanggan.update');
});


// Grup Route Admin & Profile (Wajib Login)
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    
    // Halaman Utama Dashboard Admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Route Manajemen Pelanggan (CRUD)
    Route::resource('pelanggan', PelangganController::class)->names('pelanggan');

    // Route Manajemen Transaksi
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');

    // Route Manajemen Pembayaran
    Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');

    Route::patch('/pembayaran/simpan-layanan/{transaksi_id}', [PembayaranController::class, 'simpanLayanan'])->name('pembayaran.simpanLayanan');

    Route::get('detail', [DetailController::class, 'index'])->name('detail');

    // ==========================================================
    // ROUTE DETAIL (BARU DITAMBAHKAN BUAT NGOBATIN ERROR)
    // ==========================================================
    Route::get('pembayaran/detail/{id}', [PembayaranController::class, 'detail'])->name('detail');

    // ==========================================================
    // ROUTE MANAJEMEN LAYANAN
    // ==========================================================
    Route::get('layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::post('layanan/simpan', [LayananController::class, 'store'])->name('layanan.store');
    
    // FITUR MODAL: Route untuk menyimpan data dari pop-up modal transaksi
    Route::post('transaksi/store', [TransaksiController::class, 'store'])->name('admin.transaksi.store');
    
    // FITUR DROPDOWN: Route untuk update status via dropdown titik 3
    Route::patch('transaksi/{id}/update-status', [TransaksiController::class, 'updateStatus'])->name('admin.transaksi.updateStatus');

    // Rute untuk nyimpen atau update metode pembayaran
    Route::post('pembayaran/simpan/{transaksi_id}', [PembayaranController::class, 'simpanMetode'])->name('pembayaran.simpan');

    // Fitur Profile Pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');

    Route::patch('/layanan/{id}/toggle-status', [LayananController::class, 'toggleStatus'])->name('layanan.toggleStatus');
        
});

require __DIR__.'/auth.php';