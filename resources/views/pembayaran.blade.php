<!DOCTYPE html>
<html class="light" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LaundroClean Admin - Manajemen Pembayaran</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-fixed-variant": "#003ea8",
                    "on-surface-variant": "#434655",
                    "outline-variant": "#c3c6d7",
                    "tertiary-container": "#6b6e70",
                    "surface-dim": "#cfdaf2",
                    "surface-container-low": "#f0f3ff",
                    "on-primary-fixed": "#00174b",
                    "on-error-container": "#93000a",
                    "surface": "#f9f9ff",
                    "background": "#f9f9ff",
                    "on-primary-container": "#eeefff",
                    "on-primary": "#ffffff",
                    "inverse-on-surface": "#ecf1ff",
                    "on-secondary-fixed": "#0b1c30",
                    "secondary-fixed-dim": "#b7c8e1",
                    "tertiary": "#525657",
                    "surface-variant": "#d8e3fb",
                    "primary-fixed": "#dbe1ff",
                    "on-error": "#ffffff",
                    "on-tertiary-fixed": "#191c1e",
                    "on-surface": "#111c2d",
                    "surface-container": "#e7eeff",
                    "secondary-fixed": "#d3e4fe",
                    "on-tertiary": "#ffffff",
                    "inverse-surface": "#263143",
                    "primary": "#004ac6",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "secondary-container": "#d0e1fb",
                    "inverse-primary": "#b4c5ff",
                    "error-container": "#ffdad6",
                    "surface-tint": "#0053db",
                    "surface-container-highest": "#d8e3fb",
                    "outline": "#737686",
                    "secondary": "#505f76",
                    "on-secondary": "#ffffff",
                    "surface-bright": "#f9f9ff",
                    "primary-container": "#2563eb",
                    "on-background": "#111c2d",
                    "on-tertiary-container": "#eff1f3",
                    "tertiary-fixed-dim": "#c4c7c9",
                    "on-tertiary-fixed-variant": "#444749",
                    "on-secondary-container": "#54647a",
                    "surface-container-high": "#dee8ff",
                    "tertiary-fixed": "#e0e3e5",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-secondary-fixed-variant": "#38485d"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "base": "8px",
                    "xl": "64px",
                    "sm": "12px",
                    "sidebar-width": "260px",
                    "gutter": "24px",
                    "lg": "40px",
                    "md": "24px",
                    "xs": "4px",
                    "container-max": "1440px"
            },
            "fontFamily": {
                    "body-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "headline-sm": ["Inter"],
                    "display-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tonal-elevation {
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        /* Ngeilangin panah atas-bawah di input number */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
    </style>
</head>
<body class="bg-surface text-on-surface relative">
<div class="flex min-h-screen">
<aside class="flex flex-col gap-base p-md h-screen w-sidebar-width fixed left-0 top-0 bg-surface-container-lowest border-r border-outline-variant z-50">
<div class="mb-lg">
<span class="text-xl font-bold text-primary">Admin Panel</span>
<p class="text-sm text-on-surface-variant">Laundry Operations</p>
</div>
<nav class="flex-1 flex flex-col gap-xs">
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">dashboard</span> Home
</a>
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('pelanggan.*') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('pelanggan.index') }}">
<span class="material-symbols-outlined">inventory_2</span> Management
</a>
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('transaksi') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('transaksi') }}">
<span class="material-symbols-outlined">receipt_long</span> Transactions
</a>
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('layanan.*') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('layanan.index') }}">
<span class="material-symbols-outlined" style="{{ request()->routeIs('layanan.*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">local_laundry_service</span> Services
</a>
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('pembayaran') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('pembayaran') }}">
<span class="material-symbols-outlined">payments</span> Pembayaran
</a>
<a class="flex items-center gap-sm px-sm py-base rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('detail') ? 'bg-secondary-container text-on-secondary-container font-semibold' : 'text-on-surface-variant hover:bg-surface-container-high' }}" href="{{ route('detail') }}">
<span class="material-symbols-outlined">analytics</span> Reports
</a>
</nav>
<div class="mt-auto pt-md border-t border-outline-variant flex items-center gap-sm">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold">AD</div>
<div class="overflow-hidden">
<p class="text-sm font-bold truncate">Admin User</p>
<p class="text-xs text-on-surface-variant truncate">Laundry Ops</p>
</div>
</div>
</aside>
<main class="flex-1 ml-sidebar-width bg-surface">
<header class="sticky top-0 z-40 flex justify-between items-center px-md w-full h-16 bg-surface-bright border-b border-outline-variant backdrop-blur-sm bg-opacity-90">
<div class="flex items-center gap-md flex-1">
<div class="relative w-full max-w-md group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full bg-surface-container-lowest border-none ring-1 ring-outline-variant focus:ring-2 focus:ring-primary rounded-full pl-10 pr-4 py-2 font-body-sm text-body-sm transition-all" placeholder="Cari ID Pembayaran..." type="text"/>
</div>
</div>
<div class="flex items-center gap-sm">
<button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90 flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">notifications</span>
</button>
<button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90 flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">settings</span>
</button>
</div>
</header>
<div class="p-gutter max-w-[1400px] mx-auto space-y-lg">

@if(session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative flex items-center gap-2 mb-4">
    <span class="material-symbols-outlined">check_circle</span>
    <span class="font-body-sm text-body-sm">{{ session('success') }}</span>
</div>
@endif

<section>
<nav class="mb-xs flex items-center gap-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dashboard</span>
<span class="material-symbols-outlined text-[14px] text-on-surface-variant">chevron_right</span>
<span class="font-label-sm text-label-sm text-primary">Pembayaran</span>
</nav>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Manajemen Pembayaran</h1>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-md">
    
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-elevation transition-transform hover:-translate-y-1">
        <div class="flex justify-between items-start mb-sm">
            <div class="p-2 bg-primary-fixed rounded-lg text-primary">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
            </div>
        </div>
        <p class="font-label-md text-label-md text-on-surface-variant">Total Pendapatan Bulan Ini</p>
        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">
            Rp {{ number_format($pendapatanBulanIni, 0, ',', '.') }}
        </h3>
    </div>
    
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-elevation transition-transform hover:-translate-y-1">
        <div class="flex justify-between items-start mb-sm">
            <div class="p-2 bg-secondary-fixed rounded-lg text-on-secondary-fixed">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">today</span>
            </div>
        </div>
        <p class="font-label-md text-label-md text-on-surface-variant">Pembayaran Hari Ini</p>
        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">
            Rp {{ number_format($pendapatanHariIni, 0, ',', '.') }}
        </h3>
    </div>
    
    <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-elevation transition-transform hover:-translate-y-1">
        <div class="flex justify-between items-start mb-sm">
            <div class="p-2 bg-tertiary-fixed rounded-lg text-on-tertiary-fixed">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">stars</span>
            </div>
        </div>

        <p class="font-label-md text-label-md text-on-surface-variant">
            Metode Terpopuler
        </p>

        <div class="flex items-end gap-sm mt-1">
            <h3 class="font-headline-md text-headline-md text-on-surface">
                {{ $namaMetode }}
            </h3>

            <span class="font-body-sm text-body-sm text-on-surface-variant pb-1">
                ({{ $persenMetode }}% Pengguna)
            </span>
        </div>
    </div>
    
</section>

<section class="bg-surface-container-lowest rounded-xl border border-outline-variant tonal-elevation overflow-hidden">
<div class="p-md border-b border-outline-variant flex flex-col sm:flex-row justify-between items-center gap-md">
<div class="flex items-center gap-sm w-full sm:w-auto">
<div class="flex items-center gap-2 border border-outline-variant rounded-lg px-3 py-2 bg-surface">
<span class="material-symbols-outlined text-[20px] text-on-surface-variant">calendar_today</span>
<input class="bg-transparent border-none p-0 focus:ring-0 font-label-md text-label-md w-48 text-on-surface" type="text" value="01 Jan 2024 - 31 Jan 2024"/>
</div>
<button class="flex items-center gap-xs px-4 py-2 hover:bg-surface-container-high rounded-lg transition-all font-label-md text-label-md border border-outline-variant">
<span class="material-symbols-outlined text-[20px]">filter_list</span> Filter
</button>
</div>
<button class="bg-primary text-on-primary px-lg py-2 rounded-lg font-label-md text-label-md flex items-center gap-sm hover:opacity-90 transition-all shadow-sm active:scale-95">
<span class="material-symbols-outlined text-[20px]">download</span> Export Report
</button>
</div>

<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low">
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">ID Pembayaran</th>
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">ID Transaksi</th>
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Tgl Bayar</th>
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Bayar</th>
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Metode</th>
<th class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="px-md py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
   @forelse($transaksis as $index => $trx)
    @php
        $trxId = $trx->id ?? 0;
        $tglTrx = $trx->tgl_transaksi;
        $totBayar = $trx->total_bayar ?? 0;
        $metode = $trx->metode_pembayaran ?? null;
    @endphp

        <tr class="hover:bg-surface-container/30 transition-colors group">
            
            <td class="px-md py-4 font-label-md text-label-md text-primary font-bold">
                PAY-{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}
            </td>
            
            <td class="px-md py-4 font-body-sm text-body-sm font-semibold">
                #ORD-{{ str_pad($trxId, 4, '0', STR_PAD_LEFT) }}
            </td>
            
            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">
                {{ \Carbon\Carbon::parse($tglTrx)->format('d M Y, H:i') }}
            </td>
            
            <td class="px-md py-4 font-label-md text-label-md font-semibold text-green-700">
                Rp {{ number_format($totBayar, 0, ',', '.') }}
            </td>
            
            <td class="px-md py-4">
                @if($metode)
                    <span class="flex items-center gap-2 font-body-sm text-body-sm font-semibold text-on-surface">
                        @if($metode == 'QRIS')
                            <span class="material-symbols-outlined text-primary text-[18px]">qr_code_2</span>
                            QRIS
                        @elseif($metode == 'Tunai')
                            <span class="material-symbols-outlined text-tertiary text-[18px]">payments</span>
                            Tunai
                        @else
                            <span class="material-symbols-outlined text-secondary text-[18px]">account_balance</span>
                            Bank Transfer
                        @endif
                    </span>
                @else
                    <span class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        <span class="material-symbols-outlined text-[18px]">help</span> Belum Dipilih
                    </span>
                @endif
            </td>
            
            <td class="px-md py-4">
                @if($totBayar > 0)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-600 mr-1.5"></span> Lunas
                    </span>
                @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-600 mr-1.5"></span> Pending
                    </span>
                @endif
            </td>
            
            <td class="px-md py-4 text-right relative">
                <button onclick="toggleDropdown(event, 'dropdown-{{ $index }}')" class="text-on-surface-variant hover:text-primary transition-colors p-1 rounded-full hover:bg-surface-container-high focus:outline-none">
                    <span class="material-symbols-outlined">more_vert</span>
                </button>
                <div id="dropdown-{{ $index }}" class="hidden fixed w-44 bg-surface-container-lowest border border-outline-variant rounded-xl shadow-lg z-[100] py-2 text-left">
                    <p class="px-4 py-1.5 text-xs font-bold text-outline uppercase tracking-wider">Metode Bayar</p>
                    <button type="button" onclick="bukaModalBayar('{{ $trxId }}', 'Tunai')" class="w-full px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">payments</span> Tunai</button>
                    <button type="button" onclick="bukaModalBayar('{{ $trxId }}', 'QRIS')" class="w-full px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">qr_code_2</span> QRIS</button>
                    <button type="button" onclick="bukaModalBayar('{{ $trxId }}', 'Bank Transfer')" class="w-full px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-2"><span class="material-symbols-outlined text-[18px]">account_balance</span> Bank Transfer</button>
                </div>
                <form method="POST" action="{{ route('pembayaran.simpanLayanan', $trxId) }}" id="form-layanan-{{ $trxId }}">
                    @csrf
                    @method('PATCH')
                    <select 
                        name="layanan_id" 
                        class="w-full p-2 border border-gray-300 rounded-lg"
                        onchange="document.getElementById('form-layanan-{{ $trxId }}').submit()">
                        <option value="" disabled {{ !$trx->layanan_id ? 'selected' : '' }}>-- Pilih Layanan --</option>
                        @foreach($layanans as $layanan)
                            @php $layananId = $layanan->id ?? $layanan->ID; @endphp
                            <option value="{{ $layananId }}" {{ $trx->layanan_id == $layananId ? 'selected' : '' }}>
                                {{ $layanan->nama_layanan ?? $layanan->NAMA_LAYANAN ?? 'Nama Kosong' }} 
                                - Rp{{ number_format($layanan->harga_perkg ?? $layanan->HARGA_PERKG ?? 0, 0, ',', '.') }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="px-md py-8 text-center text-on-surface-variant">Belum ada data pembayaran.</td>
        </tr>
    @endforelse
</tbody>
</table>
</div>
<div class="px-md py-4 border-t border-outline-variant flex items-center justify-between">
<p class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan transaksi terbaru</p>
</div>
</section>
</div>
<footer class="w-full py-md px-gutter mt-xl bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-sm">
<div class="flex flex-col items-center md:items-start">
<span class="font-headline-sm text-headline-sm font-bold text-primary">LaundryClean</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 LaundryClean Professional Services.</p>
</div>
</footer>
</main>
</div>

<div id="modalBayar" class="hidden fixed inset-0 z-[200] flex items-center justify-center bg-black/50 p-4 backdrop-blur-sm transition-all">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-sm overflow-hidden border border-outline-variant transform scale-100">
        
        <div class="p-4 border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
            <h3 class="font-headline-sm text-base font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">point_of_sale</span>
                <span id="teksJudulModal">Input Nominal</span>
            </h3>
            <button onclick="tutupModalBayar()" class="text-on-surface-variant hover:text-error rounded-full p-1 hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form id="formBayar" method="POST" action="">
            @csrf
            <div class="p-md space-y-4">
                <input type="hidden" id="inputMetode" name="metode_pembayaran" value="">
                
                <div>
                    <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Total yang Dibayar (Rp)</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 font-bold text-on-surface-variant">Rp</span>
                        <input type="number" name="total_bayar" id="inputNominal" class="w-full bg-surface-container-lowest border border-outline-variant rounded-xl py-3 pl-10 pr-3 font-body-lg font-bold text-on-surface focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="0" required min="1">
                    </div>
                </div>
            </div>

            <div class="p-4 border-t border-outline-variant bg-surface-container-low flex justify-end gap-2">
                <button type="button" onclick="tutupModalBayar()" class="px-4 py-2 border border-outline-variant text-on-surface-variant text-sm rounded-xl hover:bg-surface-container-high transition-all">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2 bg-primary text-white text-sm font-semibold rounded-xl hover:brightness-110 active:scale-95 shadow-md transition-all flex items-center gap-1">
                    <span class="material-symbols-outlined text-[18px]">check_circle</span> Simpan Pembayaran
                </button>
            </div>
        </form>

    </div>
</div>

<script>
    // FUNGSI BUAT DROPDOWN TITIK TIGA
    function toggleDropdown(event, dropdownId) {
        event.stopPropagation();
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
            if (el.id !== dropdownId) el.classList.add('hidden');
        });
        
        const dropdown = document.getElementById(dropdownId);
        const button = event.currentTarget;
        
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            
            const rect = button.getBoundingClientRect();
            const spaceBelow = window.innerHeight - rect.bottom;
            
            if (spaceBelow < 200) {
                dropdown.style.top = 'auto';
                dropdown.style.bottom = `${window.innerHeight - rect.top + 8}px`;
            } else {
                dropdown.style.bottom = 'auto';
                dropdown.style.top = `${rect.bottom + 8}px`;
            }
            
            dropdown.style.left = 'auto';
            dropdown.style.right = `${window.innerWidth - rect.right}px`;
        } else {
            dropdown.classList.add('hidden');
        }
    }

    document.addEventListener('click', function() {
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.classList.add('hidden'));
    });

    document.addEventListener('scroll', function() {
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.classList.add('hidden'));
    }, true);


    // ==========================================
    // FUNGSI BARU BUAT MODAL POPUP NOMINAL
    // ==========================================
    
    // Simpan Base URL Laravel lu di variabel JavaScript
    const baseUrl = "{{ url('/pembayaran/simpan') }}";

    function bukaModalBayar(transaksiId, metode) {
        // 1. Ubah teks judul biar dinamis (Misal: Bayar via QRIS)
        document.getElementById('teksJudulModal').innerText = 'Bayar via ' + metode;
        
        // 2. Isi hidden input dengan metode yang dipilih
        document.getElementById('inputMetode').value = metode;
        
        // 3. Kosongin kolom input angka biar bersih
        document.getElementById('inputNominal').value = '';
        
        // 4. Update action URL formnya sesuai ID Transaksi
        let form = document.getElementById('formBayar');
        form.action = baseUrl + "/" + transaksiId;

        // 5. Tutup dropdown titik tiga
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.classList.add('hidden'));

        // 6. Tunjukin Modal Pop-up nya
        document.getElementById('modalBayar').classList.remove('hidden');
        
        // Auto-focus ke inputan angka
        setTimeout(() => {
            document.getElementById('inputNominal').focus();
        }, 100);
    }

    function tutupModalBayar() {
        document.getElementById('modalBayar').classList.add('hidden');
    }
</script>
</body>
</html>