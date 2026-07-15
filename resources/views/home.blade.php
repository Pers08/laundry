<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<title>LaundryClean - Jasa Laundry Profesional &amp; Terpercaya</title>
<style>
        body { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .step-line::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 100%;
            width: 100%;
            height: 2px;
            background: repeating-linear-gradient(to right, transparent, transparent 5px, #c3c6d7 5px, #c3c6d7 10px);
            z-index: 0;
        }
        @media (max-width: 768px) {
            .step-line::after { display: none; }
        }
    </style>
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
</head>
<body class="bg-surface text-on-surface antialiased">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 flex justify-between items-center w-full px-gutter max-w-container-max mx-auto h-16 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm">
<div class="flex items-center gap-base">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">local_laundry_service</span>
<span class="font-headline-md text-headline-md font-bold text-primary">LaundryClean</span>
</div>
<nav class="hidden md:flex items-center gap-xl">
<a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1 transition-all" href="{{ route('home') }}">Home</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('catalog') }}">Catalog</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a>
@auth
    <a href="/status-cucian" class="teks-navbar-lu">Status Cucian</a>
@endauth
</nav>
<div class="flex items-center gap-sm">
    @guest
        {{-- Tampil kalau BELUM login --}}
        <a href="/login" class="inline-block font-label-md text-label-md px-md py-xs text-primary hover:bg-surface-container-high rounded-lg transition-all">
            Login
        </a>
        <a href="/register" class="inline-block font-label-md text-label-md px-md py-xs bg-primary text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-all">
            Daftar
        </a>
    @else
        {{-- Tampil kalau SUDAH login --}}
        <span class="font-label-md text-label-md text-on-surface mr-2">
            Halo, {{ Auth::user()->name ?? 'Pelanggan' }}
        </span>
        
        <form method="POST" action="/logout" class="inline m-0 p-0">
            @csrf
            <button type="submit" title="Keluar" class="font-label-md text-label-md px-md py-xs text-error hover:bg-red-50 hover:text-red-600 rounded-lg transition-all">
                Logout
            </button>
        </form>
    @endguest
</div>
</header>
<main>
<!-- Hero Section -->
<section class="relative overflow-hidden bg-surface-bright py-xl">
<div class="max-w-container-max mx-auto px-gutter grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="z-10 text-center lg:text-left">
<span class="inline-block px-sm py-xs bg-secondary-container text-on-secondary-container font-label-sm text-label-sm rounded-full mb-md">Layanan Laundry No. 1</span>
<h1 class="font-display-lg text-display-lg text-on-background mb-base tracking-tight">Pakaian Bersih Sempurna, Tanpa Perlu Repot.</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-lg max-w-xl mx-auto lg:mx-0">Nikmati layanan laundry profesional dengan teknologi modern. Kami mencuci, mengeringkan, dan mengantar kembali ke pintu rumah Anda dalam sekejap.</p>
<div class="flex flex-col sm:flex-row gap-md justify-center lg:justify-start">
<button class="bg-primary text-on-primary px-xl py-md rounded-xl font-label-md text-label-md shadow-lg flex items-center justify-center gap-base hover:shadow-xl transition-all">
                            Pesan Sekarang <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border-2 border-primary text-primary px-xl py-md rounded-xl font-label-md text-label-md hover:bg-primary/5 transition-all">
                            Lihat Paket Harga
                        </button>
</div>
<div class="mt-lg flex items-center justify-center lg:justify-start gap-md">
<div class="flex -space-x-3">
<img class="w-10 h-10 rounded-full border-2 border-surface" data-alt="Close up portrait of a smiling young male customer in a bright outdoor setting, representing a satisfied LaundryClean user. The style is clean, sharp, and high-contrast with soft daylight, reflecting the brand's professional and friendly image." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3ZIffH-FgN4dURhNOIgIaWFtQC7HQvTimYAigMyOZOQxVX777K0OO5TYYNnq4puoM5KlBE94xRQUHe-Jk3-KKvQJigPAcv0rsxjc0ymlvF8eUeuSSwZ9XJAYydkPz4b5ZiKimkrLevRaYDRIckUpqCXkoLS0W0k4Vger-WNow3tSWuME_GnaFlN0LoX2-GUwXi16Tq0qroXRwZmUpi2JvRZZ4nFR4h7J3bnDocmERT7onBevLttGLNaHb4QgG26PdZRehJXRS5w"/>
<img class="w-10 h-10 rounded-full border-2 border-surface" data-alt="A professional headshot of a happy female customer against a minimalist white background. Her joyful expression signifies the convenience and quality of the laundry service. The lighting is soft and corporate-modern, utilizing the primary blue and white brand colors." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-A9svJE8zPuUUOLWm5s6I8M9ZJHDR17GDD0s0ykVloEw9yfyz7wSPoIoWK6fox_TiA9WC8iPcOGLn0PluzokaKQbQgdoFY2-xGKyfjT2CzL5fuKViVBgYFp4i2zPHP-4tIlvFp42LFlb1bMiXMHsbaCR7Wrvy1ZgsFTvEjQuZ-Bxo_OL2xfZnbcwm3M1NgwnOHAppfq9W4b1pRMud5TLQPWmLu2-7I6LQPa2l5PdixkAXjzbL-_BvnN8lfWW-Bulvc-KySzYrew"/>
</div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Dipercaya oleh <strong>10,000+</strong> pelanggan setia</p>
</div>
</div>
<div class="relative">
<div class="absolute -top-10 -right-10 w-64 h-64 bg-primary-container/20 rounded-full blur-3xl"></div>
<div class="absolute -bottom-10 -left-10 w-48 h-48 bg-secondary-container/30 rounded-full blur-2xl"></div>
<div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
<img alt="Clean Laundry" class="w-full aspect-[4/3] object-cover" data-alt="A high-angle professional photograph of neatly folded, crisp white cotton towels and linens stacked on a minimalist wooden shelf. The scene is bathed in bright, natural morning light coming through a large window, creating a serene and impeccably clean atmosphere. The color palette is dominated by pure whites and soft blues, mirroring the LaundryClean identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBe1V_MWlploJ6ewEwdx7KRlxk4GqUBdhwoFlLLBcpW-CnBPiQQjC4wRjF_iqAvEHsCE4ACQs40iLIpYLnxsm_ExivCpTi8FufhgSobLOFb4sIBL82w5v6BgoPDDlOiUEqH9QncqUQDMzyBzvqCNvEKmbgX9FyXsbq_pHwX2gyH5AelHZcDeGKP-VZWmaFluxr9rP5o8Zyz3_BNdYREmHE4FQSoIIdFNUcBt97i_duO0SpySG_ckQ95QxQbAyyaUyJU91CIBaOc_w"/>
<div class="absolute bottom-6 right-6 glass-card p-md rounded-xl flex items-center gap-md">
<div class="bg-primary p-base rounded-lg text-on-primary">
<span class="material-symbols-outlined">verified</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Quality Guaranteed</p>
<p class="font-headline-sm text-headline-sm text-primary font-bold">Hygiene Certified</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Tentang Kami -->
<section class="py-xl bg-white">
<div class="max-w-container-max mx-auto px-gutter">
<div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
<div class="order-2 md:order-1 grid grid-cols-2 gap-md">
<div class="space-y-md pt-xl">
<div class="rounded-2xl overflow-hidden h-48">
<img class="w-full h-full object-cover" data-alt="Close up of a modern industrial washing machine drum in action, showing bubbly water and soft fabrics. The aesthetic is sleek, metallic, and technologically advanced, with cool blue lighting that emphasizes the freshness and efficiency of the cleaning process." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeR5cEjrSzxtCcYPsxNYDmDVVMs8fbcx1Rk_If8j-UqHSweQCC3Xq6VmQVSFDbO1otl4B7ivsXhR--Tn8qDeQBzdMs2Hha0O8THMDHYAQ4_O4wJTrekyKKgxf_8ZcrzbBvMIfphOag5jbZQK2ZrzQUOMORL-KW3OFgXiuR9idLVThnBUBd9snLWpWS5wV1r7DnISypGLHs0fAHyxFXAUnnFGj1p-mOOtW17d5fBK4UJw8UAQbtpXKhiTgfZ-PXks9sgsYsETEPLw"/>
</div>
<div class="bg-primary-fixed p-md rounded-2xl text-center">
<h3 class="font-headline-lg text-headline-lg text-on-primary-fixed">15+</h3>
<p class="font-label-sm text-label-sm text-on-primary-fixed-variant">Cabang Kota</p>
</div>
</div>
<div class="space-y-md">
<div class="bg-surface-container-highest p-md rounded-2xl text-center">
<h3 class="font-headline-lg text-headline-lg text-primary">90%</h3>
<p class="font-label-sm text-label-sm text-on-surface-variant">Kepuasan Pelanggan</p>
</div>
<div class="rounded-2xl overflow-hidden h-64">
<img class="w-full h-full object-cover" data-alt="A worker in a clean, modern laundry facility carefully steaming a high-quality garment. The environment is well-lit, organized, and follows a professional corporate minimalist aesthetic with white walls and subtle blue accents. The focus is on the precision and care taken with each piece of clothing." src="https://lh3.googleusercontent.com/aida-public/AB6AXuClJ1kYZWlOqYCha9FVZdR4H3a9WBc3RAREXxYLR7VbUMPw24BoUnUpmMLpRGhoCRn0hq-zYxf9M_keLtaPuqGKlw9iQYRylaLnShgD0FdKDkfo2o3pfukDgBSApfVhcJ-ZUl1fvXPQPbxoHrAWd6iRV3DAxWH-cY-fdo6OTip6SzsHoXZusap-1NtF9krNghEiX1PkSMhU3Uha0eN3CT50K9peWdOpJ5TCYVvbPgC331trMRmHvepfKkAGCJ_cFHn1z9-UF5Zkqg"/>
</div>
</div>
</div>
<div class="order-1 md:order-2">
<h2 class="font-headline-lg text-headline-lg text-primary mb-md">Tentang LaundryClean</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-base">Kami bukan sekadar jasa laundry biasa. Laundry
    Clean hadir sebagai solusi gaya hidup modern yang mengedepankan kualitas dan kenyamanan pelanggan.</p>
<p class="font-body-md text-body-md text-on-surface-variant mb-lg">Dengan standar operasional profesional, kami memastikan setiap helai pakaian Anda dirawat dengan deterjen ramah lingkungan dan teknologi pengeringan yang menjaga serat kain tetap lembut.</p>
<ul class="space-y-sm">
<li class="flex items-center gap-sm text-on-surface">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md">Deterjen Hypoallergenic Aman untuk Kulit</span>
</li>
<li class="flex items-center gap-sm text-on-surface">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md">Pencucian Terpisah per Pelanggan</span>
</li>
<li class="flex items-center gap-sm text-on-surface">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-label-md text-label-md">Asuransi Keamanan Pakaian</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<!-- Keunggulan Layanan -->
<section class="py-xl bg-surface-container-low">
<div class="max-w-container-max mx-auto px-gutter text-center">
<h2 class="font-headline-lg text-headline-lg text-on-background mb-xl">Mengapa Memilih Kami?</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<!-- Cepat -->
<div class="bg-white p-lg rounded-2xl shadow-sm border border-outline-variant hover:border-primary transition-all group">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-md group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl group-hover:text-white">bolt</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-base">Layanan Cepat</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pakaian bersih dalam 6-12 jam dengan layanan Express kami. Kami menghargai waktu Anda yang berharga.</p>
</div>
<!-- Bersih -->
<div class="bg-white p-lg rounded-2xl shadow-sm border border-outline-variant hover:border-primary transition-all group">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-md group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl group-hover:text-white">clean_hands</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-base">Impeccably Bersih</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Noda membandel bukan masalah. Tim ahli kami memastikan pakaian Anda kembali seperti baru dan steril.</p>
</div>
<!-- Wangi -->
<div class="bg-white p-lg rounded-2xl shadow-sm border border-outline-variant hover:border-primary transition-all group">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-md group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl group-hover:text-white">eco</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-base">Wangi Tahan Lama</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pilihan parfum premium yang lembut dan tahan hingga berhari-hari di dalam lemari pakaian Anda.</p>
</div>
</div>
</div>
</section>
<!-- Cara Kerja -->
<section class="py-xl">
<div class="max-w-container-max mx-auto px-gutter">
<div class="text-center mb-xl">
<h2 class="font-headline-lg text-headline-lg text-on-background">Hanya dalam 3 Langkah Mudah</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Sistem kami dirancang untuk memudahkan hidup Anda.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-xl relative">
<!-- Step 1 -->
<div class="text-center relative z-10">
<div class="step-line w-20 h-20 bg-primary text-on-primary rounded-full flex items-center justify-center mx-auto mb-md font-display-lg text-headline-lg relative">
<span class="material-symbols-outlined text-3xl">local_shipping</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-xs">1. Kami Jemput</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Jadwalkan penjemputan via aplikasi atau WhatsApp. Kurir kami akan datang sesuai waktu Anda.</p>
</div>
<!-- Step 2 -->
<div class="text-center relative z-10">
<div class="step-line w-20 h-20 bg-primary text-on-primary rounded-full flex items-center justify-center mx-auto mb-md font-display-lg text-headline-lg relative">
<span class="material-symbols-outlined text-3xl">soap</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-xs">2. Kami Cuci</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pakaian diproses oleh profesional dengan standar kebersihan tertinggi dan pengecekan kualitas.</p>
</div>
<!-- Step 3 -->
<div class="text-center relative z-10">
<div class="w-20 h-20 bg-primary text-on-primary rounded-full flex items-center justify-center mx-auto mb-md font-display-lg text-headline-lg">
<span class="material-symbols-outlined text-3xl">task_alt</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface mb-xs">3. Kami Antar</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Pakaian rapi dan harum dikirim kembali ke alamat Anda. Siap untuk langsung digunakan!</p>
</div>
</div>
</div>
</section>
<!-- Testimoni -->
<section class="py-xl bg-surface-bright overflow-hidden">
<div class="max-w-container-max mx-auto px-gutter">
<h2 class="font-headline-lg text-headline-lg text-on-background text-center mb-xl">Apa Kata Mereka?</h2>
<div class="flex flex-col md:flex-row gap-md">
<!-- Testimonial 1 -->
<div class="flex-1 bg-white p-lg rounded-2xl shadow-sm border border-outline-variant">
<div class="flex items-center gap-base mb-md text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface mb-lg">"Layanan terbaik yang pernah saya gunakan. Sangat terbantu dengan fitur antar-jemputnya, apalagi saya sibuk bekerja. Wanginya juga enak banget!"</p>
<div class="flex items-center gap-md">
<img class="w-12 h-12 rounded-full object-cover" data-alt="Close up of a professional woman smiling softly, reflecting contentment and trust. The lighting is balanced and warm, set in a modern office environment that complements the professional reliability of LaundryClean. Colors include subtle hints of the brand's primary blue." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqbwYbJ3qpOeFKA_GKrYWbl6JVvCU1k5wMQWTQYL71qOgFBAcA0rmaMqDhR7qes_aIYLAKbuQZPZCWkDhCzeSASjsMruBWGUu_OpmdxXiHVVc45fqGifsIoRuztSuAKqi4McjoI3sGuak1qpl_MIlLWXv9fhrx-tPdgS0XF9l7dJGXi5Ln_w08kw2-VHfVzUeyM6hAOhEgk2_5OhDn0JEy56Rf2_PWB7fcWiB6vs7Wa4A9rBlC5pMns5Ppv60D9WcLvSkYKU5baQ"/>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Andini Putri</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Graphic Designer</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="flex-1 bg-white p-lg rounded-2xl shadow-sm border border-outline-variant border-primary">
<div class="flex items-center gap-base mb-md text-primary">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-on-surface mb-lg">"Harganya transparan dan laundry-nya sangat rapi. Pakaian kantor saya disetrika dengan sangat baik. LaundryClean benar-benar profesional."</p>
<div class="flex items-center gap-md">
<img class="w-12 h-12 rounded-full object-cover" data-alt="Portrait of a young businessman looking confident and pleased. The background is a clean, corporate setting with soft bokeh. The style is modern, professional, and reflects high-quality service, utilizing the primary blue and white color palette effectively." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFkYomi1waCQXiPAuIAuopzSav7yOx6I03Z8aoWjrip6dYLIJiS9nCmIEw44qe86jRdpE8o6eulNdBqc4tJsKwnKyNm71VV__hi3f88IawuXGQjXhv3oCx_HQsZK0r4yoKFTkvxTV_7Ti8LjAXNUCQJUqd1AzCrjsf33Sg1snGmbRZ4Q51K9U4CRllKyInHd5gUXKujJoJtwSWpOwGo-X-tLmB6gdAto7zKYGS1P9m5BdyB8p6vBVlNYKoiDyHRdSNBvjKhhafjQ"/>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Budi Santoso</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Account Manager</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-xl">
<div class="max-w-container-max mx-auto px-gutter">
<div class="relative bg-primary rounded-[2rem] p-xl overflow-hidden text-center text-on-primary">
<div class="absolute top-0 left-0 w-full h-full opacity-10">
<div class="absolute -top-24 -left-24 w-64 h-64 border-8 border-white rounded-full"></div>
<div class="absolute bottom-12 right-12 w-48 h-48 border-4 border-white rounded-full"></div>
</div>
<div class="relative z-10 max-w-2xl mx-auto">
<h2 class="font-display-lg text-display-lg mb-md">Siap untuk Pakaian yang Lebih Bersih?</h2>
<p class="font-body-lg text-body-lg mb-xl opacity-90">Daftar sekarang dan dapatkan diskon 20% untuk pesanan pertama Anda. Layanan profesional hanya dalam genggaman tangan.</p>
<div class="flex flex-col sm:flex-row gap-md justify-center">
<button class="bg-white text-primary px-xl py-md rounded-xl font-label-md text-label-md font-bold shadow-lg hover:bg-surface-bright transition-all active:scale-95">
                                Daftar Gratis Sekarang
                            </button>
@auth
    {{-- JIKA SUDAH LOGIN: Langsung lempar ke WA --}}
    {{-- Jangan lupa ganti 628... dengan nomor WA lu yang bener --}}
    <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20butuh%20bantuan%20seputar%20LaundryClean%20nih." 
       target="_blank" 
       class="inline-block text-center bg-primary-container text-white border border-white/20 px-xl py-md rounded-xl font-label-md text-label-md font-bold hover:bg-primary-container/80 transition-all">
        Hubungi via WhatsApp
    </a>
@else
    {{-- JIKA BELUM LOGIN: Kasih alert dan arahin ke halaman login --}}
    <button onclick="alert('Lek, login dulu ya sebelum ngehubungin admin!'); window.location.href='/login';" 
       class="bg-primary-container text-white border border-white/20 px-xl py-md rounded-xl font-label-md text-label-md font-bold hover:bg-primary-container/80 transition-all">
        Hubungi via WhatsApp
    </button>
@endauth
</div>
</div>
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
        function scrollTestimonials(direction) {
            const container = document.getElementById('testimonial-slider');
            const scrollAmount = 400;
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        // Add some parallax effect on scroll for hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroBg = document.querySelector('webgl-shader');
            if (heroBg) {
                heroBg.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
    </script>
</body></html>