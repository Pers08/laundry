<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Status Cucian | LaundryClean</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#c4c7c9",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f9f9ff",
                        "tertiary-fixed": "#e0e3e5",
                        "inverse-surface": "#263143",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-secondary-fixed": "#0b1c30",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-error": "#ffffff",
                        "on-surface": "#111c2d",
                        "primary": "#004ac6",
                        "inverse-primary": "#b4c5ff",
                        "secondary-fixed": "#d3e4fe",
                        "on-surface-variant": "#434655",
                        "on-primary": "#ffffff",
                        "on-primary-container": "#eeefff",
                        "surface": "#f9f9ff",
                        "surface-container-low": "#f0f3ff",
                        "surface-tint": "#0053db",
                        "surface-dim": "#cfdaf2",
                        "on-background": "#111c2d",
                        "secondary": "#505f76",
                        "surface-container-high": "#dee8ff",
                        "primary-container": "#2563eb",
                        "on-primary-fixed": "#00174b",
                        "on-secondary-container": "#54647a",
                        "background": "#f9f9ff",
                        "surface-variant": "#d8e3fb",
                        "tertiary-container": "#6b6e70",
                        "on-tertiary-container": "#eff1f3",
                        "on-error-container": "#93000a",
                        "tertiary": "#525657",
                        "on-tertiary-fixed-variant": "#444749",
                        "primary-fixed": "#dbe1ff",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#d8e3fb",
                        "on-tertiary-fixed": "#191c1e",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "secondary-container": "#d0e1fb",
                        "outline": "#737686",
                        "inverse-on-surface": "#ecf1ff",
                        "on-primary-fixed-variant": "#003ea8",
                        "surface-container": "#e7eeff",
                        "outline-variant": "#c3c6d7"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "24px",
                        "xl": "64px",
                        "lg": "40px",
                        "xs": "4px",
                        "container-max": "1440px",
                        "gutter": "24px",
                        "sm": "12px",
                        "sidebar-width": "260px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f9f9ff; }
        .glass-card { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3); }
        .stepper-line { position: absolute; top: 20px; left: 0; height: 2px; background: #d8e3fb; z-index: 0; width: 100%; }
        .stepper-line-active { position: absolute; top: 20px; left: 0; height: 2px; background: #004ac6; z-index: 0; transition: width 1s ease-in-out; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
    </style>
</head>
<body class="text-on-surface">

<!-- TopNavBar -->
<header class="bg-surface/80 backdrop-blur-md sticky top-0 z-50 border-b border-outline-variant">
    <div class="flex justify-between items-center px-gutter py-base max-w-container-max mx-auto w-full">
        <div class="font-headline-md text-headline-md font-bold text-primary">LaundryClean</div>
        <nav class="hidden md:flex gap-md">
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('catalog') }}">Catalog</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a>
            @auth
                <a class="font-body-md text-body-md text-primary font-bold border-b-2 border-primary pb-1" href="{{ route('status-cucian') }}">Status Cucian</a>
            @endauth
        </nav>
        @auth
            <div class="flex items-center gap-sm">
            <button onclick="bukaModalRiwayat()"
            class="bg-surface-container-high text-on-surface px-lg py-2 rounded-lg font-label-md hover:opacity-90 transition-all duration-200 active:scale-95">
                Riwayat
            </button>
            <a href="{{ route('profile.pelanggan.edit') }}"
               class="bg-primary text-on-primary px-lg py-2 rounded-lg font-label-md hover:opacity-90 transition-all duration-200 active:scale-95">
                Edit Profil
            </a>
        @else
            <a href="{{ route('login') }}"
               class="bg-primary text-on-primary px-lg py-2 rounded-lg font-label-md hover:opacity-90 transition-all duration-200 active:scale-95">
                Login
            </a>
        @endauth
    </div>
</header>

<main class="min-h-screen">

    @if(session('success'))
        <div class="bg-green-100 text-green-800 text-center py-sm px-gutter font-body-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Hero Section -->
    <section class="relative py-xl px-gutter bg-gradient-to-b from-surface-container-low to-surface overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary-fixed rounded-full blur-[100px]"></div>
        </div>
        <div class="max-w-3xl mx-auto text-center relative z-10">
            <h1 class="font-display-lg text-display-lg mb-md text-on-background">Status Cucian</h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-lg">
                Pantau kemajuan cucian Anda secara real-time.
            </p>

            @auth
                <div class="bg-white rounded-xl p-md shadow-sm ring-1 ring-outline-variant text-left mb-lg">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-md">
                        <div>
                            <p class="font-label-sm text-outline uppercase tracking-wider">Nama</p>
                            <p class="font-headline-sm text-on-surface">{{ $user->name }}</p>
                        </div>
                        <div>
                            <p class="font-label-sm text-outline uppercase tracking-wider">Nomor Telepon</p>
                            <p class="font-body-md text-on-surface">{{ $user->phone ?? 'Belum diisi' }}</p>
                        </div>
                        <div>
                            <p class="font-label-sm text-outline uppercase tracking-wider">Alamat</p>
                            <p class="font-body-md text-on-surface">{{ $user->address ?? 'Belum diisi' }}</p>
                        </div>
                    </div>
                    @if(!$user->phone || !$user->address)
                        <div class="mt-md pt-md border-t border-outline-variant">
                            <p class="font-body-sm text-error mb-sm">⚠ Lengkapi nomor telepon dan alamat agar pesanan bisa diproses.</p>
                            <a href="{{ route('profile.pelanggan.edit') }}"
                               class="inline-block bg-primary text-on-primary px-md py-sm rounded-lg font-label-md hover:opacity-90 transition-all">
                                Lengkapi Sekarang
                            </a>
                        </div>
                    @endif
                </div>
            @endauth
        </div>
    </section>

    <!-- Status & Progress Section -->
    <section class="py-xl px-gutter">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-xl p-md md:p-xl shadow-sm ring-1 ring-outline-variant">

                @if($transaksi)
                    @php
                        $statusList  = ['Diterima', 'Dicuci', 'Disetrika', 'Siap Diambil', 'Selesai'];
                        $statusIcons = ['assignment', 'local_laundry_service', 'iron', 'inventory', 'local_shipping'];
                        $currentStatus = $transaksi->status_ambil ?? null;
                        $currentIndex = $currentStatus ? array_search($currentStatus, $statusList) : -1;
                        if ($currentIndex === false) $currentIndex = 0;
                        $progressWidth = count($statusList) > 1
                            ? ($currentIndex / (count($statusList) - 1)) * 100
                            : 0;
                    @endphp

                    <!-- Progress Stepper -->
                    <div class="relative mb-xl px-xs">
                        <div class="stepper-line"></div>
                        <div class="stepper-line-active" id="stepperLine" style="width: 0%;"></div>
                        <div class="relative z-10 flex justify-between items-start">
                            @foreach($statusList as $i => $status)
                                @php $isActive = $i <= $currentIndex; @endphp
                                <div class="flex flex-col items-center text-center max-w-[120px]">
                                    <div class="w-10 h-10 rounded-full flex items-center justify-center mb-sm
                                        {{ $isActive ? 'bg-primary text-on-primary ring-4 ring-primary-fixed' : 'bg-surface-container-highest text-outline' }}">
                                        <span class="material-symbols-outlined"
                                            style="{{ $isActive ? "font-variation-settings: 'FILL' 1;" : '' }}">
                                            {{ $statusIcons[$i] }}
                                        </span>
                                    </div>
                                    <span class="font-label-md {{ $isActive ? 'text-primary font-bold' : 'text-on-surface-variant' }}">
                                        {{ $status }}
                                    </span>
                                    @if($i === $currentIndex)
                                        <span class="font-label-sm text-on-surface-variant">Sedang diproses</span>
                                    @elseif(!$isActive)
                                        <span class="font-label-sm text-outline">Menunggu...</span>
                                    @else
                                        <span class="font-label-sm text-primary">✓ Selesai</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Order Detail -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                        <div class="md:col-span-2 space-y-md">
                            <div class="bg-surface-container-low p-md rounded-xl border border-outline-variant">
                                <h3 class="font-headline-sm text-headline-sm text-primary mb-md">Detail Pesanan</h3>
                                <div class="grid grid-cols-2 gap-md">
                                    <div>
                                        <p class="font-label-sm text-outline uppercase tracking-wider">ID Pesanan</p>
                                        <p class="font-headline-sm text-on-surface">#ORD-{{ $transaksi->id ?? '' }}</p>

                                    </div>
                                    <div>
                                        <p class="font-label-sm text-outline uppercase tracking-wider">Nama Pelanggan</p>
                                        <p class="font-headline-sm text-on-surface">{{ $user->name }}</p>
                                    </div>
                                    <div>
                                        <p class="font-label-sm text-outline uppercase tracking-wider">Nomor Telepon</p>
                                        <p class="font-body-md text-on-surface">{{ $user->phone ?? '-' }}</p>
                                    </div>
                                    <div>
                                        <p class="font-label-sm text-outline uppercase tracking-wider">Alamat</p>
                                        <p class="font-body-md text-on-surface">{{ $user->address ?? '-' }}</p>
                                    </div>
                                    <div>
                                        <p class="font-label-sm text-outline uppercase tracking-wider">Status</p>
                                        <p class="font-body-md text-on-surface">{{ $transaksi->status_ambil ?? '-' }}</p>
                                    </div>
                                    <div>
                                        <p class="font-body-md text-on-surface">
                                            {{ $transaksi ? \Carbon\Carbon::parse($transaksi->tgl_transaksi)->format('d M Y') : '-' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-md">
                            <div class="bg-primary text-on-primary p-md rounded-xl shadow-lg flex flex-col justify-between h-full">
                                <div>
                                   <p class="font-headline-lg text-headline-lg">
                                        {{ $transaksi ? \Carbon\Carbon::parse($transaksi->tgl_selesai)->format('d M Y') : '-' }}
                                    </p>
                                </div>
                                <div class="mt-lg pt-md border-t border-on-primary/20">
                                    <p class="font-body-sm italic">"Pakaian Anda akan bersih dan wangi seperti baru."</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @else
                    {{-- Tidak ada transaksi --}}
                    <div class="text-center py-xl">
                        <span class="material-symbols-outlined text-outline" style="font-size: 64px;">inbox</span>
                        <p class="font-headline-sm text-on-surface-variant mt-md">Belum ada pesanan aktif.</p>
                        <p class="font-body-sm text-outline mt-xs">Hubungi kami untuk membuat pesanan baru.</p>
                    </div>
                @endif

                <!-- Additional Context Cards -->
                <div class="mt-md grid grid-cols-1 md:grid-cols-2 gap-md">
                    <div class="flex items-center gap-md p-md bg-white border border-outline-variant rounded-xl">
                        <div class="w-12 h-12 bg-surface-variant flex items-center justify-center rounded-lg text-primary">
                            <span class="material-symbols-outlined" style="font-size: 32px;">notifications</span>
                        </div>
                        <div>
                            <p class="font-label-md text-on-surface">Notifikasi WhatsApp</p>
                            <p class="font-body-sm text-on-surface-variant">
                                {{ $user->phone ? 'Kami akan kirim pesan ke ' . $user->phone . ' saat siap diambil atau diantarkan.' : 'Tambahkan nomor telepon untuk notifikasi.' }}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-md p-md bg-white border border-outline-variant rounded-xl">
                        <div class="w-12 h-12 bg-surface-variant flex items-center justify-center rounded-lg text-primary">
                            <span class="material-symbols-outlined" style="font-size: 32px;">support_agent</span>
                        </div>
                        <div>
                            <p class="font-label-md text-on-surface">Butuh Bantuan?</p>
                            <p class="font-body-sm text-on-surface-variant">Hubungi tim kurir kami di +62 812-3456-789</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Atmosphere Section -->
    <section class="py-xl overflow-hidden bg-white">
        <div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 md:grid-cols-2 items-center gap-xl">
            <div class="relative">
                <img alt="Laundry Machine" class="rounded-3xl shadow-2xl z-10 relative"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJEC8NLeMEMIIGTW57yTqJx_aP-AsTIUMGF-GpxWhrhMyPTb19m-Phuu_bwDGoy0EDi3g07Ji2xw0OC32zDMEMixpMP8vwqM8IigrTg2wLnp6odh7UGQSKcRL5FL-X2vW8e52iFx4J-LfQiS2L_ueyf80GmXaoP3e5UsEQVIMisADCpz8lgRHEP5aqI0UUw_ed-7-so94DdVW04MkJb_JsIPisibFv6OwPKu8fhJXUQZJCvoE82FDPa3LqQldM6IWFgujk_W04KA"/>
                <div class="absolute -top-10 -left-10 w-40 h-40 bg-secondary-fixed/30 rounded-full blur-3xl -z-10"></div>
            </div>
            <div>
                <h2 class="font-display-lg text-display-lg text-primary mb-md">Kualitas Terjamin.</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-lg">Di LaundryClean, kami menggabungkan teknologi mutakhir dengan ketelitian manual untuk memastikan setiap helai pakaian Anda diperlakukan dengan penuh cinta.</p>
                <ul class="space-y-md">
                    <li class="flex items-center gap-sm font-body-md text-on-surface">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        Deterjen Ramah Lingkungan & Premium
                    </li>
                    <li class="flex items-center gap-sm font-body-md text-on-surface">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        Penyetrikaan Uap Anti-Kuman
                    </li>
                    <li class="flex items-center gap-sm font-body-md text-on-surface">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        Kemasan Eksklusif Higienis
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant">
    <div class="flex flex-col md:flex-row justify-between items-start py-xl px-xl max-w-container-max mx-auto gap-xl">
        <div class="max-w-sm">
            <span class="text-title-md font-headline-md text-primary mb-md block">LaundryFlow</span>
            <p class="text-on-surface-variant text-body-sm mb-lg">Menyediakan layanan laundry berkualitas tinggi dengan teknologi pelacakan real-time untuk kenyamanan gaya hidup modern Anda.</p>
            <div class="flex gap-md">
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
                <a class="text-on-surface-variant hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">call</span></a>
            </div>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-xl w-full md:w-auto">
            <div class="flex flex-col gap-sm">
                <span class="font-bold text-on-surface mb-base">Layanan</span>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Cuci Kering</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Laundry Kiloan</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Express 6 Jam</a>
            </div>
            <div class="flex flex-col gap-sm">
                <span class="font-bold text-on-surface mb-base">Perusahaan</span>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Tentang Kami</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Karir</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Kontak</a>
            </div>
            <div class="flex flex-col gap-sm">
                <span class="font-bold text-on-surface mb-base">Legal</span>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Privacy Policy</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Terms of Service</a>
            </div>
        </div>
    </div>
    <div class="max-w-container-max mx-auto px-xl py-lg border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-md">
        <span class="text-on-surface-variant font-label-md text-label-md">© 2024 LaundryFlow Systems. All rights reserved.</span>
        <div class="flex gap-xl">
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors">credit_card</span>
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors">account_balance_wallet</span>
            <span class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors">payments</span>
        </div>
    </div>
</footer>

<script>
    window.addEventListener('load', () => {
        const line = document.getElementById('stepperLine');
        if (line) {
            setTimeout(() => {
                line.style.width = '{{ $progressWidth ?? 0 }}%';
            }, 500);
        }
    });
</script>
{{-- Modal Riwayat --}}
<div id="modalRiwayat" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl max-h-[80vh] overflow-hidden border border-outline-variant flex flex-col">

        <div class="p-md border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
            <h3 class="font-headline-sm text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">history</span>
                Riwayat Pesanan
            </h3>
            <button onclick="tutupModalRiwayat()" class="text-on-surface-variant hover:text-error rounded-full p-1 hover:bg-surface-container-high transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <div class="p-md overflow-y-auto flex-1">
            @if($riwayat->isEmpty())
                <div class="text-center py-xl">
                    <span class="material-symbols-outlined text-outline" style="font-size:64px;">inbox</span>
                    <p class="text-on-surface-variant mt-md font-semibold">Belum ada riwayat pesanan.</p>
                    <p class="text-outline text-sm mt-xs">Pesanan yang sudah selesai akan muncul di sini.</p>
                </div>
            @else
                <div class="space-y-sm">
                    @foreach($riwayat as $item)
                        <div class="bg-surface-container-low rounded-xl border border-outline-variant p-md">
                            <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-xs">
                                <p class="font-bold text-on-surface">#ORD-{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</p>
                                <span class="inline-flex items-center gap-1 bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold w-fit">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span> Selesai
                                </span>
                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-sm mt-sm pt-sm border-t border-outline-variant">
                                <div>
                                    <p class="text-[10px] text-outline uppercase tracking-wider">Layanan</p>
                                    <p class="text-sm font-medium text-on-surface">{{ $item->nama_layanan ?? '-' }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-outline uppercase tracking-wider">Tgl Masuk</p>
                                    <p class="text-sm text-on-surface">{{ \Carbon\Carbon::parse($item->tgl_transaksi)->format('d M Y') }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-outline uppercase tracking-wider">Tgl Selesai</p>
                                    <p class="text-sm text-on-surface">{{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d M Y') }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-outline uppercase tracking-wider">Total Bayar</p>
                                    <p class="text-sm font-bold text-primary">Rp {{ number_format($item->total_bayar ?? 0, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</div>
<script>
    function bukaModalRiwayat() {
        document.getElementById('modalRiwayat').classList.remove('hidden');
    }
    function tutupModalRiwayat() {
        document.getElementById('modalRiwayat').classList.add('hidden');
    }
    document.getElementById('modalRiwayat')?.addEventListener('click', function(e) {
        if (e.target === this) tutupModalRiwayat();
    });
</script>
</body>
</html>