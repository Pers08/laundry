<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LaundroClean | Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#f9f9ff",
                        "on-primary-container": "#eeefff",
                        "tertiary-container": "#6b6e70",
                        "on-secondary-fixed-variant": "#38485d",
                        "surface": "#f9f9ff",
                        "on-background": "#111c2d",
                        "secondary-fixed-dim": "#b7c8e1",
                        "on-surface": "#111c2d",
                        "error-container": "#ffdad6",
                        "secondary-container": "#d0e1fb",
                        "on-tertiary-fixed-variant": "#444749",
                        "primary-fixed": "#dbe1ff",
                        "surface-container-high": "#dee8ff",
                        "on-tertiary-container": "#eff1f3",
                        "outline-variant": "#c3c6d7",
                        "on-surface-variant": "#434655",
                        "on-secondary": "#ffffff",
                        "background": "#f9f9ff",
                        "primary": "#004ac6",
                        "secondary-fixed": "#d3e4fe",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#e7eeff",
                        "on-primary-fixed": "#00174b",
                        "inverse-primary": "#b4c5ff",
                        "inverse-surface": "#263143",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#2563eb",
                        "on-primary-fixed-variant": "#003ea8",
                        "surface-variant": "#d8e3fb",
                        "on-primary": "#ffffff",
                        "tertiary": "#525657",
                        "on-tertiary-fixed": "#191c1e",
                        "on-error": "#ffffff",
                        "secondary": "#505f76",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-container-highest": "#d8e3fb",
                        "inverse-on-surface": "#ecf1ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "outline": "#737686",
                        "surface-dim": "#cfdaf2",
                        "tertiary-fixed": "#e0e3e5",
                        "on-secondary-container": "#54647a",
                        "tertiary-fixed-dim": "#c4c7c9",
                        "surface-container-low": "#f0f3ff",
                        "surface-tint": "#0053db"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "xs": "4px",
                        "lg": "40px",
                        "sm": "12px",
                        "base": "8px",
                        "sidebar-width": "260px",
                        "md": "24px",
                        "xl": "64px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}]
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
        .tonal-card-shadow {
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .chart-container {
            background-image: radial-gradient(circle at 2px 2px, rgba(0,74,198,0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-surface-bright text-on-surface">
<!-- SideNavBar Anchor -->
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
<!-- Main Content Wrapper -->
<main class="ml-sidebar-width min-h-screen">
<!-- TopNavBar (Dashboard Header) -->
<header class="sticky top-0 z-30 h-16 bg-surface-bright flex justify-between items-center px-md w-full border-b border-outline-variant backdrop-blur-sm">
<div class="flex items-center gap-md w-1/2">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full focus:ring-2 focus:ring-primary text-body-sm" placeholder="Search orders, clients, or tools..." type="text"/>
</div>
</div>
<div class="flex items-center gap-base">
<button class="material-symbols-outlined p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all active:scale-90">notifications</button>
<form method="POST" action="/logout" class="inline m-0 p-0">
    @csrf
    <button type="submit" title="Keluar" class="material-symbols-outlined p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all active:scale-90">
        logout
    </button>
</form>
<div class="h-8 w-[1px] bg-outline-variant mx-2"></div>
<img alt="User Avatar" class="w-8 h-8 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4R7YjT57EqR_OIEvo1WU3UINPxeSY8dx1OEIYtA-aIRqopDYYTGSr9oIYdpo4WRZtRXtEUM8WTwH5B2QztxLr9uQKvX7nli635S_FFyEoM-ceXnnmc4nUBkCOpwU44ViO_JrJ5pdrVX5gFZP5KTsIKZcUJKpSbI2d55v2dxsPKbhgNyYu2Xsm76afSku6XpK8PJ3NqohyHmL709V3PZYZkKiNlViunmD6gudraXYmBjXui01n__B5n9rS_qJG88ZfV-40HqimBA"/>
</div>
</header>
<!-- Page Canvas -->
<section class="p-gutter max-w-[1600px] mx-auto">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-xs mb-lg text-on-surface-variant font-label-md text-label-md">
<a class="hover:text-primary transition-colors" href="#">Dashboard</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-on-surface font-semibold">Home</span>
</nav>
<div class="flex flex-col gap-md">
<!-- Metric Cards: Bento Grid Style -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-md">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-card-shadow flex flex-col gap-base group hover:border-primary transition-colors">
<div class="flex justify-between items-start">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_basket</span>
</div>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Ringkasan Order</p>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">{{ number_format($totalOrder) }}</h3>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-card-shadow flex flex-col gap-base group hover:border-primary transition-colors">
<div class="flex justify-between items-start">
<div class="p-2 bg-secondary-container/20 rounded-lg text-secondary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
</div>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Total Pendapatan</p>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-card-shadow flex flex-col gap-base group hover:border-primary transition-colors">
<div class="flex justify-between items-start">
<div class="p-2 bg-surface-variant rounded-lg text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_laundry_service</span>
</div>
<span class="text-on-surface-variant font-label-sm text-label-sm flex items-center bg-surface-container-high px-2 py-0.5 rounded-full">Aktif</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Order Aktif</p>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">{{ number_format($orderAktif) }}</h3>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant tonal-card-shadow flex flex-col gap-base group hover:border-primary transition-colors">
<div class="flex justify-between items-start">
<div class="p-2 bg-tertiary-fixed-dim/20 rounded-lg text-on-surface">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
</div>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant">Statistik Pelanggan</p>
<h3 class="font-headline-md text-headline-md text-on-surface font-bold">{{ number_format($totalPelanggan) }}</h3>
</div>
</div>
</div>
<!-- Main Grid: Chart & Trends -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-md">
<!-- Chart Area -->
<div class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant p-md tonal-card-shadow">
<div class="flex justify-between items-center mb-md">
<h4 class="font-headline-sm text-headline-sm font-bold text-on-surface">Grafik Pendapatan Bulanan</h4>
<select class="bg-surface-container-low border-none rounded-lg text-label-sm py-1 pl-2 pr-8 focus:ring-primary">
<option>Tahun 2024</option>
<option>Tahun 2023</option>
</select>
</div>
<div class="h-[320px] chart-container relative flex items-end justify-between px-2 pt-10">
<!-- Simple Simulated Chart Bars -->
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary/20 w-8 rounded-t-sm h-[40%] group-hover:bg-primary transition-all"></div>
<span class="font-label-sm text-[10px] mt-2">Jan</span>
</div>
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary/20 w-8 rounded-t-sm h-[55%] group-hover:bg-primary transition-all"></div>
<span class="font-label-sm text-[10px] mt-2">Feb</span>
</div>
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary/20 w-8 rounded-t-sm h-[70%] group-hover:bg-primary transition-all"></div>
<span class="font-label-sm text-[10px] mt-2">Mar</span>
</div>
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary w-8 rounded-t-sm h-[90%] transition-all"></div>
<span class="font-label-sm text-[10px] mt-2 text-primary font-bold">Apr</span>
</div>
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary/20 w-8 rounded-t-sm h-[65%] group-hover:bg-primary transition-all"></div>
<span class="font-label-sm text-[10px] mt-2">Mei</span>
</div>
<div class="group relative flex flex-col items-center flex-1">
<div class="bg-primary/20 w-8 rounded-t-sm h-[80%] group-hover:bg-primary transition-all"></div>
<span class="font-label-sm text-[10px] mt-2">Jun</span>
</div>
</div>
</div>
<!-- Right Sidebar Content: Recent Activities -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant p-md tonal-card-shadow">
<h4 class="font-headline-sm text-headline-sm font-bold text-on-surface mb-md">Peringatan Stok</h4>
<div class="space-y-4">
<div class="flex items-center gap-sm p-3 bg-error-container/30 rounded-lg">
<span class="material-symbols-outlined text-error">warning</span>
<div class="flex-1">
<p class="font-label-md text-label-md font-bold text-on-surface">Deterjen Cair (Refill)</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Sisa 2 Liter - Segera Pesan</p>
</div>
</div>
<div class="flex items-center gap-sm p-3 bg-secondary-container/20 rounded-lg">
<span class="material-symbols-outlined text-secondary">info</span>
<div class="flex-1">
<p class="font-label-md text-label-md font-bold text-on-surface">Pelembut Pakaian</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Sisa 15 Liter - Aman</p>
</div>
</div>
<div class="flex items-center gap-sm p-3 bg-surface-container-high rounded-lg">
<span class="material-symbols-outlined text-on-surface-variant">receipt</span>
<div class="flex-1">
<p class="font-label-md text-label-md font-bold text-on-surface">Tagihan Listrik</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">Jatuh tempo dlm 3 hari</p>
</div>
</div>
</div>
<button class="w-full mt-md py-2 border border-outline text-primary font-label-md text-label-md rounded-lg hover:bg-surface-container-high transition-colors">Lihat Semua Inventaris</button>
</div>
</div>
<!-- Table Section: Recent Orders -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant tonal-card-shadow overflow-hidden">
<div class="p-md flex justify-between items-center">
<h4 class="font-headline-sm text-headline-sm font-bold text-on-surface">Tabel Order Terbaru</h4>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-y border-outline-variant">
<th class="px-md py-3 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">ID Order</th>
<th class="px-md py-3 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Pelanggan</th>
<th class="px-md py-3 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Layanan</th>
<th class="px-md py-3 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="px-md py-3 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
@forelse($orderTerbaru as $order)
<tr class="hover:bg-surface-container-high transition-colors">
<td class="px-md py-4 font-body-sm text-body-sm font-bold">#ORD-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</td>
<td class="px-md py-4 font-body-sm text-body-sm text-on-surface">{{ $order->nama_pelanggan ?? 'Pelanggan Terhapus' }}</td>
<td class="px-md py-4 font-body-sm text-body-sm text-on-surface">{{ $order->nama_layanan ?? 'Belum Ada' }}</td>
<td class="px-md py-4">
@php
    $statusColor = match($order->status_ambil) {
        'Diterima' => 'bg-blue-100 text-blue-700',
        'Dicuci' => 'bg-amber-100 text-amber-700',
        'Disetrika' => 'bg-purple-100 text-purple-700',
        'Siap Diambil' => 'bg-orange-100 text-orange-700',
        'Selesai' => 'bg-emerald-100 text-emerald-700',
        default => 'bg-slate-100 text-slate-700',
    };
@endphp
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full {{ $statusColor }} font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-current"></span>
{{ $order->status_ambil }}
</span>
</td>
<td class="px-md py-4 font-body-sm text-body-sm font-bold">Rp {{ number_format($order->total_bayar ?? 0, 0, ',', '.') }}</td>
</tr>
@empty
<tr>
<td colspan="5" class="px-md py-8 text-center text-on-surface-variant">Belum ada data order.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
<div class="p-md flex justify-between items-center bg-surface-container-low border-t border-outline-variant">
<span class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan 4 dari 1,284 order</span>
<div class="flex gap-2">
<button class="p-2 border border-outline rounded-lg text-on-surface-variant hover:bg-surface-container-high disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="p-2 border border-outline rounded-lg text-on-surface-variant hover:bg-surface-container-high">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Footer Anchor -->
<footer class="w-full py-xl px-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-sm border-t border-outline-variant mt-xl">
<div class="flex flex-col items-center md:items-start">
<span class="font-headline-sm text-headline-sm font-bold text-primary">LaundryClean</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 LaundryClean Professional Services.</p>
</div>
<div class="flex gap-md font-label-sm text-label-sm">
<a class="text-on-surface-variant hover:text-primary underline transition-all" href="#">Services</a>
<a class="text-on-surface-variant hover:text-primary underline transition-all" href="#">Contact Us</a>
<a class="text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms of Use</a>
</div>
</footer>
</main>
<script>
        // Simple interactivity for dashboard logic
        document.querySelectorAll('a, button').forEach(el => {
            el.addEventListener('click', (e) => {
                // Precautionary prevention for dead links in prototype
                if(el.getAttribute('href') === '#') e.preventDefault();
            });
        });

        // Search bar focus behavior
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
        });
    </script>
</body></html>