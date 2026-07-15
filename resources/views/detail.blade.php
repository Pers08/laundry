<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Laporan Operasional - CleanFlow Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
    "primary": "#004ac6",
    "on-primary": "#ffffff",
    "primary-container": "#2563eb",
    "secondary": "#505f76",
    "secondary-container": "#d0e1fb",
    "on-secondary-container": "#54647a",
    "background": "#f9f9ff",
    "surface": "#f9f9ff",
    "surface-container": "#e7eeff",
    "surface-container-low": "#f0f3ff",
    "surface-container-lowest": "#ffffff",
    "surface-container-high": "#dee8ff",
    "surface-container-highest": "#d8e3fb",
    "on-surface": "#111c2d",
    "on-surface-variant": "#434655",
    "outline": "#737686",
    "outline-variant": "#c3c6d7",
    "primary-fixed": "#dbe1ff",
    "on-primary-fixed": "#00174b"
},
"spacing": {
    "sidebar-width": "260px",
    "gutter": "24px",
    "md": "24px",
    "sm": "12px",
    "xs": "4px",
    "base": "8px",
    "lg": "40px"
}
          },
        },
      }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen relative">
<div class="flex min-h-screen relative">
    
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
<span class="material-symbols-outlined" style="{{ request()->routeIs('detail') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">analytics</span> Reports
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
        <div class="p-6 space-y-6">
            
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-6">
                <div>
                    <h2 class="text-3xl font-bold text-on-surface">Laporan Operasional</h2>
                    <p class="text-secondary text-base">Analisis performa bisnis CleanFlow untuk periode terpilih.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                    <div class="flex justify-between items-start mb-3">
                        <div class="p-2 bg-primary-container/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">payments</span>
                        </div>
                    </div>
                    <p class="text-secondary text-sm mb-1">Total Pendapatan</p>
                    <h3 class="text-2xl font-bold text-on-surface">Rp {{ number_format($totalPendapatan ?? 0, 0, ',', '.') }}</h3>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                    <div class="flex justify-between items-start mb-3">
                        <div class="p-2 bg-primary-container/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">weight</span>
                        </div>
                    </div>
                    <p class="text-secondary text-sm mb-1">Total Berat Cucian</p>
                    <h3 class="text-2xl font-bold text-on-surface">{{ number_format($totalBerat ?? 0, 1) }} KG</h3>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                    <div class="flex justify-between items-start mb-3">
                        <div class="p-2 bg-primary-container/10 rounded-lg">
                            <span class="material-symbols-outlined text-primary">receipt</span>
                        </div>
                    </div>
                    <p class="text-secondary text-sm mb-1">Jumlah Transaksi</p>
                    <h3 class="text-2xl font-bold text-on-surface">{{ $jumlahTransaksi ?? 0 }} Pesanan</h3>
                </div>
            </div>

            <div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden mt-8">
                <div class="p-6 border-b border-outline-variant">
                    <h4 class="text-xl font-bold text-on-surface">Detail Laporan Operasional</h4>
                    <p class="text-sm text-secondary">Daftar transaksi laundry real-time.</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container-low text-secondary text-sm uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4 border-b border-outline-variant">ID Laporan</th>
                                <th class="px-6 py-4 border-b border-outline-variant">ID Transaksi</th>
                                <th class="px-6 py-4 border-b border-outline-variant">Layanan</th>
                                <th class="px-6 py-4 border-b border-outline-variant text-right">Berat (KG)</th>
                                <th class="px-6 py-4 border-b border-outline-variant text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="text-base divide-y divide-outline-variant">
                            @forelse($transaksis as $trx)
                                <tr class="hover:bg-surface-container/30 transition-colors cursor-pointer">
                                    <td class="px-6 py-4 font-medium">DTS-{{ str_pad($trx->id ?? 0, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td class="px-6 py-4">ORD-{{ str_pad($trx->id ?? 0, 4, '0', STR_PAD_LEFT) }}</td>
                                    
                                    <td class="px-6 py-4">
                                        {{ $trx->nama_layanan ?? 'Belum Ada' }}
                                    </td>

                                    <td class="px-6 py-4 text-right">{{ number_format($trx->berat_otomatis ?? 0, 1) }} KG</td>
                                    
                                    <td class="px-6 py-4 text-right font-bold">
                                        Rp {{ number_format($trx->total_bayar ?? 0, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-8 text-center text-secondary">Belum ada data transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 flex items-center justify-between border-t border-outline-variant bg-surface-container-low/50">
                    <div class="w-full">
                        {{ $transaksis->links() }}
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8 mb-10">
                <div class="lg:col-span-2 bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="text-xl font-bold">Tren Pendapatan Mingguan</h4>
                    </div>
                    <div class="h-64 flex items-end justify-between px-6 pb-6 space-x-6">
                        @foreach($grafikMingguan ?? [] as $hari => $persen)
                        <div class="flex flex-col items-center flex-1 space-y-2 group">
                            <div class="w-full bg-primary-container/20 rounded-t-lg relative flex items-end overflow-hidden h-full">
                                <div class="w-full bg-primary rounded-t-lg shadow-sm transition-all duration-500" style="height: {{ $persen }}%"></div>
                            </div>
                            <span class="text-sm font-medium text-secondary">{{ $hari }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-primary text-on-primary p-6 rounded-xl shadow-lg flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-4 opacity-10 scale-150 rotate-12">
                        <span class="material-symbols-outlined text-[120px]">auto_graph</span>
                    </div>
                    <div class="relative z-10">
                        <h4 class="text-xl font-bold mb-2">Insight Utama</h4>
                        <p class="text-white/80 text-sm leading-relaxed">
                            Pertumbuhan pendapatan bulan ini dipengaruhi oleh peningkatan layanan 
                            <strong>{{ $namaLayananInsight ?? 'Layanan' }}</strong> sebesar {{ $persenInsight ?? 0 }}% di akhir pekan.
                        </p>
                    </div>
                    <div class="mt-8 relative z-10">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-bold">Target Bulanan</span>
                            <span class="text-sm font-bold">85%</span>
                        </div>
                        <div class="w-full bg-white/20 rounded-full h-2">
                            <div class="bg-white h-full rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
</div>
</body>
</html>