<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>LaundroClean Admin - Manajemen Transaksi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed-variant": "#38485d",
                    "on-surface-variant": "#434655",
                    "inverse-on-surface": "#ecf1ff",
                    "outline": "#737686",
                    "tertiary-fixed": "#e0e3e5",
                    "secondary-fixed-dim": "#b7c8e1",
                    "background": "#f9f9ff",
                    "outline-variant": "#c3c6d7",
                    "on-tertiary-fixed-variant": "#444749",
                    "secondary-fixed": "#d3e4fe",
                    "on-tertiary-fixed": "#191c1e",
                    "on-surface": "#111c2d",
                    "on-primary-fixed": "#00174b",
                    "on-secondary-fixed": "#0b1c30",
                    "on-error-container": "#93000a",
                    "on-secondary": "#ffffff",
                    "surface-container-high": "#dee8ff",
                    "primary-fixed-dim": "#b4c5ff",
                    "surface-container": "#e7eeff",
                    "secondary": "#505f76",
                    "on-background": "#111c2d",
                    "error": "#ba1a1a",
                    "primary-fixed": "#dbe1ff",
                    "on-primary-container": "#eeefff",
                    "on-error": "#ffffff",
                    "primary-container": "#2563eb",
                    "primary": "#004ac6",
                    "surface-container-low": "#f0f3ff",
                    "surface-dim": "#cfdaf2",
                    "inverse-surface": "#263143",
                    "on-primary-fixed-variant": "#003ea8",
                    "tertiary": "#525657",
                    "on-primary": "#ffffff",
                    "on-tertiary-container": "#eff1f3",
                    "inverse-primary": "#b4c5ff",
                    "surface": "#f9f9ff",
                    "on-tertiary": "#ffffff",
                    "secondary-container": "#d0e1fb",
                    "error-container": "#ffdad6",
                    "surface-container-highest": "#d8e3fb",
                    "surface-bright": "#f9f9ff",
                    "surface-variant": "#d8e3fb",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-container": "#6b6e70",
                    "surface-tint": "#0053db",
                    "tertiary-fixed-dim": "#c4c7c9",
                    "on-secondary-container": "#54647a"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xl": "64px",
                    "gutter": "24px",
                    "xs": "4px",
                    "sidebar-width": "260px",
                    "container-max": "1440px",
                    "md": "24px",
                    "lg": "40px",
                    "base": "8px",
                    "sm": "12px"
            },
            "fontFamily": {
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-sm": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "body-sm": ["Inter"]
            },
            "fontSize": {
                    "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
    <style>
      body {
        font-family: 'Inter', sans-serif;
        background-color: #F8FAFC;
      }
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        vertical-align: middle;
      }
      .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
      }
      .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
      }
      .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
      }
    </style>
</head>
<body class="text-on-surface">

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

<main class="md:ml-sidebar-width min-h-screen flex flex-col">
    <header class="sticky top-0 z-30 bg-surface-bright flex justify-between items-center px-md h-16 border-b border-outline-variant">
        <div class="flex items-center gap-md w-1/2">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 font-body-sm text-body-sm focus:ring-2 focus:ring-primary-container transition-all" placeholder="Cari ID Pesanan atau Nama Pelanggan..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-sm">
            <button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90 relative">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border-2 border-surface-bright"></span>
            </button>
            <button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90">
                <span class="material-symbols-outlined text-on-surface-variant">settings</span>
            </button>
            <div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
            <button class="font-label-md text-label-md text-primary font-bold hover:underline">Keluar</button>
        </div>
    </header>

    <div class="p-md space-y-md w-full">
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative flex items-center gap-2">
            <span class="material-symbols-outlined">check_circle</span>
            <span class="font-body-sm text-body-sm">{{ session('success') }}</span>
        </div>
        @endif
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-sm">
            <div>
                <nav class="flex items-center gap-2 mb-1">
                    <a href="{{ route('dashboard') }}" class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary">Dashboard</a>
                    <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
                    <span class="font-label-sm text-label-sm text-primary font-bold">Transaksi</span>
                </nav>
                <h2 class="font-headline-md text-headline-md text-on-surface">Manajemen Transaksi</h2>
            </div>
            <button onclick="openModal()" class="flex items-center gap-2 bg-primary-container text-on-primary-container px-lg py-sm rounded-xl font-label-md text-label-md hover:brightness-110 active:scale-95 transition-all shadow-sm">
                <span class="material-symbols-outlined">add</span>
                Tambah Transaksi Baru
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-md">
            <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm">
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Total Transaksi</p>
                <h3 class="font-headline-md text-headline-md text-on-surface">{{ count($transaksi) }}</h3>
                <div class="mt-2 text-primary font-bold text-xs flex items-center">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span> Diperbarui otomatis
                </div>
            </div>
            <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm">
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Sedang Dicuci</p>
                <h3 class="font-headline-md text-headline-md text-on-surface">{{ $transaksi->where('status_ambil', 'Dicuci')->count() }}</h3>
                <div class="mt-2 text-on-surface-variant text-xs">Menunggu diproses</div>
            </div>
            <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm">
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Siap Diambil</p>
                <h3 class="font-headline-md text-headline-md text-on-surface">{{ $transaksi->where('status_ambil', 'Siap Diambil')->count() }}</h3>
                <div class="mt-2 text-secondary font-bold text-xs">Pemberitahuan terkirim</div>
            </div>
            <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm">
                <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Selesai/Diambil</p>
                <h3 class="font-headline-md text-headline-md text-on-surface">{{ $transaksi->where('status_ambil', 'Selesai')->count() }}</h3>
                <div class="mt-2 text-primary font-bold text-xs">Transaksi sukses</div>
            </div>
        </div>

        <div class="flex items-center gap-2 p-2 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm mb-4 overflow-x-auto">
    
            @foreach(['semua', 'Diterima', 'Dicuci', 'Disetrika', 'Siap Diambil', 'Selesai'] as $status)
                <a href="{{ route('transaksi', ['status' => $status]) }}" 
                  class="px-4 py-2 rounded-lg font-label-md text-label-md transition-colors whitespace-nowrap
                  {{ request('status', 'semua') === $status ? 'bg-primary text-on-primary' : 'text-on-surface-variant hover:bg-surface-container-high' }}">
                    {{ ucfirst($status) }}
                </a>
            @endforeach

        </div>

        <div class="bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low border-b border-outline-variant">
                        <tr>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Order ID</th>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Nama Pelanggan</th>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Tgl Masuk</th>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Tgl Selesai</th>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
                            <th class="px-md py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        @forelse($transaksi as $row)
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4 font-label-md text-label-md font-bold text-primary">#ORD-{{ str_pad($row->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container text-xs font-bold">
                                        {{ strtoupper(substr($row->pelanggan->nama_pelanggan ?? 'P', 0, 2)) }}
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface">{{ $row->pelanggan->nama_pelanggan ?? 'Pelanggan Terhapus' }}


                                    </span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">{{ $row->tgl_transaksi }}</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">{{ $row->tgl_selesai }}</td>
                            <td class="px-md py-4">
                                @if($row->status_ambil == 'Diterima')
                                    <span class="inline-flex items-center gap-1.5 bg-slate-100 text-slate-700 px-3 py-1 rounded-full font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">inbox</span> Diterima</span>
                                @elseif($row->status_ambil == 'Dicuci')
                                    <span class="inline-flex items-center gap-1.5 bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">laundry</span> Dicuci</span>
                                @elseif($row->status_ambil == 'Disetrika')
                                    <span class="inline-flex items-center gap-1.5 bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">iron</span> Disetrika</span>
                                @elseif($row->status_ambil == 'Siap Diambil')
                                    <span class="inline-flex items-center gap-1.5 bg-orange-100 text-orange-700 px-3 py-1 rounded-full font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">shopping_bag</span> Siap Diambil</span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 bg-green-100 text-green-700 px-3 py-1 rounded-full font-label-sm text-label-sm"><span class="material-symbols-outlined text-[16px]">verified</span> Selesai</span>
                                @endif
                            </td>
                            <td class="px-md py-4 text-right relative">
                                <button onclick="toggleDropdown(event, 'dropdown-{{ $row->id }}')" class="text-on-surface-variant hover:text-primary transition-colors focus:outline-none p-1 rounded-full hover:bg-surface-container-high">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                                
                                <div id="dropdown-{{ $row->id }}" class="hidden fixed w-44 bg-white border border-outline-variant rounded-xl shadow-lg z-[100] py-2 text-left">
                                    <p class="px-4 py-1.5 text-xs font-bold text-outline uppercase tracking-wider">Ubah Status</p>
                                    
                                    @foreach(['Diterima', 'Dicuci', 'Disetrika', 'Siap Diambil', 'Selesai'] as $status)
                                    <form action="{{ route('admin.transaksi.updateStatus', $row->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status_ambil" value="{{ $status }}">
                                        <button type="submit" class="w-full px-4 py-2 text-sm text-on-surface hover:bg-surface-container-low transition-colors flex items-center justify-between {{ $row->status_ambil == $status ? 'bg-primary-fixed/30 font-semibold text-primary' : '' }}">
                                            <span>{{ $status }}</span>
                                            @if($row->status_ambil == $status)
                                                <span class="material-symbols-outlined text-[16px]">check</span>
                                            @endif
                                        </button>
                                    </form>
                                    @endforeach
                                </div>
                                
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-md py-8 text-center text-on-surface-variant font-body-sm">Belum ada data transaksi masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="bg-surface-container-low px-md py-4 border-t border-outline-variant flex items-center justify-between">
                <p class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan 1-{{ count($transaksi) }} transaksi</p>
            </div>
        </div>
    </div>

    <footer class="mt-auto border-t border-outline-variant bg-surface-container-low py-lg px-gutter w-full flex flex-col md:flex-row justify-between items-center gap-sm">
        <div class="flex flex-col items-center md:items-start gap-xs">
            <h4 class="font-headline-sm text-headline-sm font-bold text-primary">LaundryClean</h4>
            <p class="font-body-sm text-body-sm text-on-surface-variant">© 2026 LaundryClean Professional Services.</p>
        </div>
    </footer>
</main>

<div id="modalTransaksi" class="fixed inset-0 z-50 hidden bg-black/60 items-center justify-center p-4">
    <form action="{{ route('admin.transaksi.store') }}" method="POST" class="p-md space-y-4">
    @csrf

    {{-- TAMBAH BAGIAN INI --}}
    <div class="p-3 bg-surface-container-high rounded-xl">
        <h4 class="text-xs font-bold text-on-surface-variant uppercase mb-3">Data Pelanggan</h4>
        <div class="relative">
            <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Cari Pelanggan</label>
            <input type="text" id="searchPelanggan" placeholder="Ketik nama pelanggan..."
                autocomplete="off"
                class="w-full bg-surface-container-low border border-outline-variant rounded-xl py-2 px-3 text-sm focus:ring-2 focus:ring-primary outline-none">
            <input type="hidden" name="pelanggan_id" id="pelanggan_id" required>
            <div id="dropdownPelanggan" class="hidden absolute z-50 w-full bg-white border border-outline-variant rounded-xl shadow-lg mt-1 max-h-48 overflow-y-auto">
                @foreach($pelanggan as $p)
                    <div class="px-3 py-2 text-sm text-on-surface hover:bg-surface-container-low cursor-pointer pilihan-pelanggan"
                        data-id="{{ $p->id }}"
                        data-nama="{{ $p->nama_pelanggan }}">
                        {{ $p->nama_pelanggan }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="p-3 bg-surface-container-high rounded-xl">
        <h4 class="text-xs font-bold text-on-surface-variant uppercase mb-3">Jadwal</h4>
        <div class="grid grid-cols-2 gap-3">
            <div>
                <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Tgl Masuk</label>
                <input type="date" name="tgl_transaksi" id="tgl_transaksi" required class="w-full bg-surface-container-low border border-outline-variant rounded-xl py-2 px-3 text-sm focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-xs font-semibold text-on-surface-variant uppercase mb-2">Tgl Selesai</label>
                <input type="date" name="tgl_selesai" required class="w-full bg-surface-container-low border border-outline-variant rounded-xl py-2 px-3 text-sm focus:ring-2 focus:ring-primary">
            </div>
        </div>
    </div>

    <div class="p-3 bg-surface-container-high rounded-xl">
        <h4 class="text-xs font-bold text-on-surface-variant uppercase mb-3">Status</h4>
        <select name="status_ambil" required class="w-full bg-surface-container-low border border-outline-variant rounded-xl py-2 px-3 text-sm focus:ring-2 focus:ring-primary">
            <option value="Diterima" selected>Diterima</option>
            <option value="Dicuci">Dicuci</option>
            <option value="Disetrika">Disetrika</option>
            <option value="Siap Diambil">Siap Diambil</option>
            <option value="Selesai">Selesai</option>
        </select>
    </div>
    {{-- SAMPAI SINI --}}

    <div class="flex justify-end gap-2 border-t border-outline-variant pt-md mt-4">
        <button type="button" onclick="closeModal()" class="px-4 py-2 border border-outline-variant text-on-surface-variant text-sm rounded-xl hover:bg-surface-container-high transition-all">
            Batal
        </button>
        <button type="submit" class="px-5 py-2 bg-primary text-white text-sm rounded-xl hover:brightness-110 active:scale-95 shadow-md transition-all flex items-center gap-1">
            <span class="material-symbols-outlined text-sm">save</span> Simpan Transaksi
        </button>
    </div>
</form>
    </div>
</div>

<script>
    function toggleDropdown(event, dropdownId) {
        event.stopPropagation();
        
        // Tutup semua dropdown yang sedang terbuka
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => {
            if (el.id !== dropdownId) el.classList.add('hidden');
        });
        
        const dropdown = document.getElementById(dropdownId);
        const button = event.currentTarget;
        
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            
            // Ambil posisi elemen tombol titik tiga saat ini di layar
            const rect = button.getBoundingClientRect();
            
            // Hitung sisa ruang dari tombol ke mentok layar bawah
            const spaceBelow = window.innerHeight - rect.bottom;
            
            // Tinggi menu dropdown lu sekitar 200px, jadi kita cek kalau kurang dari itu
            if (spaceBelow < 220) {
                // Sempit: Buka menu ke ATAS
                dropdown.style.top = 'auto';
                dropdown.style.bottom = `${window.innerHeight - rect.top + 8}px`;
            } else {
                // Lega: Buka menu ke BAWAH
                dropdown.style.bottom = 'auto';
                dropdown.style.top = `${rect.bottom + 8}px`;
            }
            
            // Sejajarin rata kanan sama tombol titik tiganya
            dropdown.style.left = 'auto';
            dropdown.style.right = `${window.innerWidth - rect.right}px`;
            
        } else {
            dropdown.classList.add('hidden');
        }
    }

    // Tutup dropdown kalau nge-klik di sembarang tempat
    document.addEventListener('click', function() {
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.classList.add('hidden'));
    });

    // Tutup dropdown otomatis kalau halaman atau tabel di-scroll
    document.addEventListener('scroll', function() {
        document.querySelectorAll('[id^="dropdown-"]').forEach(el => el.classList.add('hidden'));
    }, true);

    // --- SISA SCRIPT LU TETEP AMAN DI SINI ---

    const searchInput = document.querySelector('input[type="text"]');
    if (searchInput) {
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('scale-[1.02]');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('scale-[1.02]');
        });
    }

    function openModal() {
        const modal = document.getElementById('modalTransaksi');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tgl_transaksi').value = today;
    }

    function closeModal() {
        const modal = document.getElementById('modalTransaksi');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    window.onclick = function(event) {
        const modal = document.getElementById('modalTransaksi');
        if (event.target == modal) {
            closeModal();
        }
    }

    // Search Pelanggan
    const searchPelanggan = document.getElementById('searchPelanggan');
    const dropdownPelanggan = document.getElementById('dropdownPelanggan');
    const pilihanPelanggan = document.querySelectorAll('.pilihan-pelanggan');

    searchPelanggan.addEventListener('input', function() {
        const keyword = this.value.toLowerCase();
        document.getElementById('pelanggan_id').value = '';
        let ada = false;
        pilihanPelanggan.forEach(item => {
            const nama = item.dataset.nama.toLowerCase();
            if (nama.includes(keyword) && keyword !== '') {
                item.classList.remove('hidden');
                ada = true;
            } else {
                item.classList.add('hidden');
            }
        });
        dropdownPelanggan.classList.toggle('hidden', !ada);
    });

    pilihanPelanggan.forEach(item => {
        item.addEventListener('click', function() {
            searchPelanggan.value = this.dataset.nama;
            document.getElementById('pelanggan_id').value = this.dataset.id;
            dropdownPelanggan.classList.add('hidden');
        });
    });

    searchPelanggan.addEventListener('blur', function() {
        setTimeout(() => dropdownPelanggan.classList.add('hidden'), 150);
    });
</script>
</body>
</html>