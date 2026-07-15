<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-bright": "#f9f9ff", "on-primary-container": "#eeefff",
                    "tertiary-container": "#6b6e70", "on-secondary-fixed-variant": "#38485d",
                    "surface": "#f9f9ff", "on-background": "#111c2d",
                    "secondary-fixed-dim": "#b7c8e1", "on-surface": "#111c2d",
                    "error-container": "#ffdad6", "secondary-container": "#d0e1fb",
                    "on-tertiary-fixed-variant": "#444749", "primary-fixed": "#dbe1ff",
                    "surface-container-high": "#dee8ff", "on-tertiary-container": "#eff1f3",
                    "outline-variant": "#c3c6d7", "on-surface-variant": "#434655",
                    "on-secondary": "#ffffff", "background": "#f9f9ff",
                    "primary": "#004ac6", "secondary-fixed": "#d3e4fe",
                    "surface-container-lowest": "#ffffff", "surface-container": "#e7eeff",
                    "on-primary-fixed": "#00174b", "inverse-primary": "#b4c5ff",
                    "inverse-surface": "#263143", "error": "#ba1a1a",
                    "on-error-container": "#93000a", "on-tertiary": "#ffffff",
                    "primary-container": "#2563eb", "on-primary-fixed-variant": "#003ea8",
                    "surface-variant": "#d8e3fb", "on-primary": "#ffffff",
                    "tertiary": "#525657", "on-tertiary-fixed": "#191c1e",
                    "on-error": "#ffffff", "secondary": "#505f76",
                    "on-secondary-fixed": "#0b1c30", "surface-container-highest": "#d8e3fb",
                    "inverse-on-surface": "#ecf1ff", "primary-fixed-dim": "#b4c5ff",
                    "outline": "#737686", "surface-dim": "#cfdaf2",
                    "tertiary-fixed": "#e0e3e5", "on-secondary-container": "#54647a",
                    "tertiary-fixed-dim": "#c4c7c9", "surface-container-low": "#f0f3ff",
                    "surface-tint": "#0053db"
                },
                "borderRadius": {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                "spacing": {
                    "gutter": "24px", "xs": "4px", "lg": "40px", "sm": "12px",
                    "base": "8px", "sidebar-width": "260px", "md": "24px",
                    "xl": "64px", "container-max": "1440px"
                },
                "fontSize": {
                    "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
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
{{-- GANTI JADI INI --}}
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        display: inline-block; vertical-align: middle;
    }
    .glass-card { background: rgba(255,255,255,0.8); backdrop-filter: blur(8px); border: 1px solid rgba(241,245,249,1); }
</style>
</head>
<body class="bg-background text-on-background min-h-screen font-body-md text-body-md antialiased">

<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm h-16 flex items-center">
    <div class="w-full px-gutter max-w-container-max mx-auto flex justify-between items-center">
        <div class="font-headline-md text-headline-md font-bold text-primary">LaundryClean</div>
        <nav class="hidden md:flex items-center gap-lg">
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1" href="{{ route('catalog') }}">Catalog</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a>
            @auth
                <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('status-cucian') }}">Status Cucian</a>
            @endauth
        </nav>
        <div class="flex items-center gap-sm">
            @guest
                <a href="/login" class="inline-block font-label-md text-label-md px-md py-xs text-primary hover:bg-surface-container-high rounded-lg transition-all">Login</a>
                <a href="/register" class="inline-block font-label-md text-label-md px-md py-xs bg-primary text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-all">Daftar</a>
            @else
                <span class="font-label-md text-label-md text-on-surface mr-2">Halo, {{ Auth::user()->name }}</span>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit" class="font-label-md text-label-md px-md py-xs text-error hover:bg-red-50 rounded-lg transition-all">Logout</button>
                </form>
            @endguest
        </div>
    </div>
</header>

<main class="max-w-container-max mx-auto px-gutter py-xl">

    <!-- Hero Section -->
    <section class="mb-xl text-center md:text-left grid md:grid-cols-2 gap-lg items-center">
        <div>
            <h1 class="font-display-lg text-display-lg text-primary mb-base">Katalog Layanan Kami</h1>
            <p class="text-on-surface-variant font-body-lg text-body-lg max-w-xl">
                Pilih layanan kebersihan terbaik untuk pakaian dan perlengkapan rumah tangga Anda. Bersih, higienis, dan tepat waktu adalah janji kami.
            </p>
        </div>
        <div class="relative h-64 md:h-80 rounded-xl overflow-hidden shadow-sm">
            <img alt="LaundryClean Facility" class="w-full h-full object-cover"
                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_5pZdfc69dASUu8IK3EvZ89ZJpNboIGdOFwFwKLEqTpR2_EZTLgW-hpeciVMZ-DiIOL_RW6Ma4MNLpnLCIBZo0GTiy283mHHnrI-lM31ctNNSsrph03vj0OQMikeR88qd6xBwp2PZo7vZBxXuBL_0Iqg7uR7gF_V48WZpYF8QTPQayaBK5OUoXKmix1s71BHQzB2a5oQ-hx05OOHPXjnmFi1lR5X6YDqUTTnexCtImoiztyQc7J4aR3e-VcybtO33fiSuKrlOXA"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
    </section>

    <!-- Filter & Search -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md mb-lg">
        <div class="flex flex-wrap gap-xs">
            <button class="px-md py-base bg-primary text-on-primary rounded-full font-label-md text-label-md shadow-sm">Semua</button>
            <button class="px-md py-base bg-surface-container-high text-on-surface-variant hover:bg-surface-variant rounded-full font-label-md text-label-md transition-colors">Pakaian</button>
            <button class="px-md py-base bg-surface-container-high text-on-surface-variant hover:bg-surface-variant rounded-full font-label-md text-label-md transition-colors">Perlengkapan</button>
        </div>
        <div class="relative w-full md:w-80">
            <span class="material-symbols-outlined absolute left-base top-1/2 -translate-y-1/2 text-outline">search</span>
            <input class="w-full pl-xl pr-md py-base bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-body-sm font-body-sm" placeholder="Cari layanan..." type="text"/>
        </div>
    </div>

    <!-- Service Cards Grid — DYNAMIC dari database -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-md">

        @forelse($layanans as $layanan)
            @php $isAktif = strtolower($layanan->status) === 'aktif'; @endphp

            <div class="glass-card p-md rounded-xl transition-all group relative {{ $isAktif ? 'hover:shadow-md cursor-pointer' : 'opacity-70' }}"
            @if($isAktif) onclick="bukaModal('{{ $layanan->nama_layanan }}', '{{ number_format($layanan->harga_perkg, 0, ',', '.') }}', '{{ $layanan->satuan }}')" @endif>


                {{-- Badge Nonaktif --}}
                @if(!$isAktif)
                    <div class="absolute top-sm right-sm bg-error text-on-error text-[10px] px-xs py-[2px] rounded-full uppercase font-bold tracking-wider">
                        Nonaktif
                    </div>
                @endif

                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-md group-hover:scale-110 transition-transform
                    {{ $isAktif ? 'bg-primary-container' : 'bg-surface-container-high' }}">
                    <span class="material-symbols-outlined text-2xl {{ $isAktif ? 'text-on-primary' : 'text-outline' }}">
                        local_laundry_service
                    </span>
                </div>

                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-xs">{{ $layanan->nama_layanan }}</h3>

                <div class="flex justify-between items-center pt-md border-t border-outline-variant mt-md">
                    <div>
                        <span class="block font-bold text-headline-sm {{ $isAktif ? 'text-primary' : 'text-outline' }}">
                            Rp {{ number_format($layanan->harga_perkg, 0, ',', '.') }}
                        </span>
                        <span class="text-label-sm font-label-sm text-outline">{{ $layanan->satuan }}</span>
                    </div>
                    <div class="text-right">
                        @if($isAktif)
                            <span class="inline-flex items-center gap-xs font-label-sm text-label-sm text-green-600 bg-green-50 px-sm py-xs rounded-full">
                                <span class="material-symbols-outlined text-sm">check_circle</span> Tersedia
                            </span>
                        @else
                            <span class="inline-flex items-center gap-xs font-label-sm text-label-sm text-error bg-error-container px-sm py-xs rounded-full">
                                <span class="material-symbols-outlined text-sm">cancel</span> Nonaktif
                            </span>
                        @endif
                    </div>
                </div>

                {{-- Pesan nonaktif di bawah card --}}
                @if(!$isAktif)
                    <div class="mt-sm pt-sm border-t border-error/20">
                        <p class="text-error font-label-sm text-label-sm flex items-center gap-xs">
                            <span class="material-symbols-outlined text-sm">info</span>
                            Layanan ini sedang nonaktif, silahkan pilih layanan lain.
                        </p>
                    </div>
                @endif

            </div>
        @empty
            <div class="col-span-3 text-center py-xl text-on-surface-variant">
                <span class="material-symbols-outlined text-outline" style="font-size:64px;">inbox</span>
                <p class="font-headline-sm mt-md">Belum ada layanan tersedia.</p>
            </div>
        @endforelse

        {{-- Card Penawaran Khusus (tetap static) --}}
        <div class="bg-primary p-md rounded-xl flex flex-col justify-center items-center text-center text-on-primary shadow-lg overflow-hidden relative">
            <div class="absolute -top-4 -right-4 w-24 h-24 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
            <h3 class="font-headline-md text-headline-md mb-xs">Penawaran Khusus</h3>
            <p class="text-body-sm font-body-sm mb-md opacity-90">Diskon 20% untuk pelanggan baru dengan kode: <strong>BERSIHKANG</strong></p>
            @auth
                <a href="https://wa.me/62812324567890?text=Halo%20Admin,%20saya%20mau%20pesan%20layanan%20laundry%20pake%20kode%20promo%20BERSIHKANG."
                   target="_blank"
                   class="px-md py-base bg-white text-primary rounded-lg font-label-md text-label-md hover:bg-on-primary-container transition-all inline-block">
                    Pesan Sekarang
                </a>
            @else
                <button onclick="alert('Sabar lek, lu harus login dulu buat klaim promo ini!'); window.location.href='/login';"
                   class="px-md py-base bg-white text-primary rounded-lg font-label-md text-label-md hover:bg-on-primary-container transition-all">
                    Pesan Sekarang
                </button>
            @endauth
        </div>

    </div>
</main>

<div id="modalPesan" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-sm border border-outline-variant overflow-hidden">
        <div class="p-5 border-b border-outline-variant flex justify-between items-center">
            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Pesan Layanan</h3>
            <button onclick="tutupModal()" class="text-on-surface-variant hover:text-red-500 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="p-5 space-y-3">
            <div class="bg-surface-container-low rounded-xl p-4">
                <p class="text-label-sm font-label-sm text-on-surface-variant uppercase mb-1">Layanan Dipilih</p>
                <p id="modalNamaLayanan" class="font-headline-sm text-headline-sm text-on-surface font-bold"></p>
            </div>
            <div class="flex gap-3">
                <div class="flex-1 bg-surface-container-low rounded-xl p-4">
                    <p class="text-label-sm font-label-sm text-on-surface-variant uppercase mb-1">Harga</p>
                    <p id="modalHarga" class="font-bold text-primary text-headline-sm"></p>
                </div>
                <div class="flex-1 bg-surface-container-low rounded-xl p-4">
                    <p class="text-label-sm font-label-sm text-on-surface-variant uppercase mb-1">Satuan</p>
                    <p id="modalSatuan" class="font-bold text-on-surface text-headline-sm"></p>
                </div>
            </div>
            <p class="text-body-sm font-body-sm text-on-surface-variant text-center pt-1">
                Klik tombol di bawah untuk lanjut pesan via WhatsApp
            </p>
        </div>
        <div class="p-5 border-t border-outline-variant flex gap-3">
            <button onclick="tutupModal()" class="flex-1 py-2.5 border border-outline-variant text-sm font-medium rounded-xl hover:bg-surface-container-low transition-colors">
                Batal
            </button>
            <a id="linkWA" href="#" target="_blank"
               class="flex-1 py-2.5 bg-green-500 text-white text-sm font-bold rounded-xl hover:bg-green-600 transition-colors flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">chat</span>
                Pesan via WA
            </a>
        </div>
    </div>
</div>

<!-- Floating Action Button -->
<button class="fixed bottom-md right-md bg-primary text-on-primary p-md rounded-full shadow-lg flex items-center gap-sm hover:scale-105 active:scale-95 transition-all z-40 md:hidden">
    <span class="material-symbols-outlined">add_shopping_cart</span>
    <span class="font-label-md text-label-md">Pesan</span>
</button>

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
    function bukaModal(nama, harga, satuan) {
        document.getElementById('modalNamaLayanan').innerText = nama;
        document.getElementById('modalHarga').innerText = 'Rp ' + harga;
        document.getElementById('modalSatuan').innerText = satuan;

        const nomorWA = '6281234567890'; // ← GANTI dengan nomor WA admin kamu
        const pesan = `Halo Admin, saya ingin memesan layanan *${nama}* dengan harga Rp ${harga} per ${satuan}. Mohon informasinya, terima kasih!`;
        document.getElementById('linkWA').href = `https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`;

        document.getElementById('modalPesan').classList.remove('hidden');
    }

    function tutupModal() {
        document.getElementById('modalPesan').classList.add('hidden');
    }

    document.getElementById('modalPesan').addEventListener('click', function(e) {
        if (e.target === this) tutupModal();
    });
</script>

</body>
</html>