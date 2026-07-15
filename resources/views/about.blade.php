<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tentang Kami - LaundroClean</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .bento-item {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .bento-item:hover {
            transform: translateY(-8px);
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-tint": "#0053db",
                      "on-secondary-fixed": "#0b1c30",
                      "surface-variant": "#d8e3fb",
                      "surface-container-lowest": "#ffffff",
                      "surface-bright": "#f9f9ff",
                      "secondary-fixed-dim": "#b7c8e1",
                      "secondary": "#505f76",
                      "tertiary-fixed": "#e0e3e5",
                      "on-tertiary-fixed-variant": "#444749",
                      "tertiary-fixed-dim": "#c4c7c9",
                      "on-primary-fixed": "#00174b",
                      "tertiary-container": "#6b6e70",
                      "inverse-surface": "#263143",
                      "secondary-fixed": "#d3e4fe",
                      "inverse-on-surface": "#ecf1ff",
                      "error-container": "#ffdad6",
                      "primary-fixed": "#dbe1ff",
                      "primary-container": "#2563eb",
                      "surface-dim": "#cfdaf2",
                      "surface-container-low": "#f0f3ff",
                      "on-tertiary": "#ffffff",
                      "on-secondary": "#ffffff",
                      "surface": "#f9f9ff",
                      "on-error-container": "#93000a",
                      "error": "#ba1a1a",
                      "on-tertiary-fixed": "#191c1e",
                      "on-secondary-container": "#54647a",
                      "surface-container": "#e7eeff",
                      "outline": "#737686",
                      "on-primary-fixed-variant": "#003ea8",
                      "on-primary-container": "#eeefff",
                      "on-background": "#111c2d",
                      "surface-container-highest": "#d8e3fb",
                      "on-primary": "#ffffff",
                      "primary": "#004ac6",
                      "surface-container-high": "#dee8ff",
                      "on-surface-variant": "#434655",
                      "on-surface": "#111c2d",
                      "on-error": "#ffffff",
                      "secondary-container": "#d0e1fb",
                      "on-secondary-fixed-variant": "#38485d",
                      "outline-variant": "#c3c6d7",
                      "tertiary": "#525657",
                      "on-tertiary-container": "#eff1f3",
                      "inverse-primary": "#b4c5ff",
                      "background": "#f9f9ff",
                      "primary-fixed-dim": "#b4c5ff"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "sm": "12px",
                      "gutter": "24px",
                      "lg": "40px",
                      "xs": "4px",
                      "base": "8px",
                      "xl": "64px",
                      "md": "24px",
                      "container-max": "1440px",
                      "sidebar-width": "260px"
              },
              "fontFamily": {
                      "headline-lg": ["Inter"],
                      "headline-md": ["Inter"],
                      "body-lg": ["Inter"],
                      "display-lg": ["Inter"],
                      "label-md": ["Inter"],
                      "body-md": ["Inter"],
                      "body-sm": ["Inter"],
                      "label-sm": ["Inter"],
                      "headline-sm": ["Inter"],
                      "headline-lg-mobile": ["Inter"]
              },
              "fontSize": {
                      "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                      "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                      "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
              }
            },
          },
        }
    </script>
</head>
<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-md border-b border-outline-variant shadow-sm h-16 flex items-center">
<div class="w-full px-gutter max-w-container-max mx-auto flex justify-between items-center">
<div class="font-headline-md text-headline-md font-bold text-primary">LaundryClean</div>
<nav class="hidden md:flex items-center gap-lg">
<a class="font-body-md text-body-md text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors transition-all duration-200 active:scale-95" href="{{ route('home') }}">Home</a>
<a class="font-body-md text-body-md text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors transition-all duration-200 active:scale-95" href="{{ route('catalog') }}">Catalog</a>
<a class="font-body-md text-body-md text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1" href="{{ route('about') }}">About Us</a> 
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
</div>
</header>
<main class="max-w-container-max mx-auto px-gutter py-xl">
<!-- Hero Section -->
<section class="relative w-full h-[600px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="A high-end, futuristic laundry facility with rows of pristine metallic washing machines and dryers. The lighting is bright and clinical with soft blue reflections, creating a professional and impeccably clean atmosphere. The interior architecture is minimalist with polished concrete floors and white walls, embodying a modern corporate aesthetic for a laundry management service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhgks7vZ3Bn7lP3AYcdndWrdD8Swu_PPHs8QiuDqb132u9AMYMFClDGRojRFazWtXSU-B6AuAw3-3za3zekW3hDeELL7mSOJTUMk-Xh2Y5kAeYByB0KH-Z7GSjVtKrZFVY1ZjPihe-MGLiG_md648MvHqOoVkMRFwX70tGWljahIO6b5WQhD45B7VlguzddDM-5tLiKb_1jOg4-onHpBLRxkK3I2eLFwKo9RLx7xCeCE9OZZL9nlPO-ApBhA9BfXnSrqez0QgyBA"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-gutter w-full">
<div class="max-w-2xl">
<span class="inline-block px-sm py-1 bg-primary text-on-primary rounded-full font-label-sm mb-md uppercase tracking-widest">Tentang Kami</span>
<h1 class="font-display-lg text-display-lg text-white mb-md leading-tight">Menciptakan Standar Baru dalam Kebersihan</h1>
<p class="font-body-lg text-body-lg text-white/90 mb-lg">LaundroClean hadir untuk menyederhanakan hidup Anda melalui layanan laundry yang higienis, cepat, dan berbasis teknologi.</p>
</div>
</div>
</section>
<!-- Our Story Section -->
<section class="py-xl px-gutter max-w-container-max mx-auto">
<div class="grid md:grid-cols-2 gap-xl items-center">
<div class="space-y-md">
<h2 class="font-headline-lg text-headline-lg text-primary">Kisah Perjalanan Kami</h2>
<div class="w-16 h-1 bg-primary rounded-full"></div>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        LaundroClean berawal dari sebuah ide sederhana: laundry tidak seharusnya menjadi beban. Didirikan dengan visi untuk mendigitalisasi layanan tradisional, kami membangun ekosistem yang menggabungkan presisi operasional dengan kemudahan akses teknologi.
                    </p>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Sejak hari pertama, kami berkomitmen untuk menggunakan bahan kimia ramah lingkungan dan teknologi pengeringan terkini untuk memastikan serat kain pelanggan kami tetap terjaga. Kami percaya bahwa setiap potong pakaian membawa cerita, dan tugas kami adalah menjaganya tetap bersih dan rapi.
                    </p>
</div>
<div class="relative">
<div class="absolute -top-4 -left-4 w-24 h-24 bg-primary-container/20 rounded-full blur-3xl"></div>
<div class="absolute -bottom-4 -right-4 w-32 h-32 bg-secondary-container/30 rounded-full blur-3xl"></div>
<div class="rounded-xl overflow-hidden shadow-xl bento-item">
<img class="w-full aspect-video object-cover" data-alt="Close-up detail of fresh, crisp white towels stacked neatly on a wooden shelf in a bright room. The soft natural morning light filters through, highlighting the soft texture of the cotton. The scene is tranquil and organized, reflecting the professional care and cleanliness values of the laundry brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAebZjH5ZIEoS1Xeg0Qh4Nt1Mmxl3Qbryk9STI4RSzf71MWAFo7bHp8iz55FbMWpW1bWt7Kn-pZq7-U7QEst0O3dFuzxgiP9M8eVk6Lnl4MslXartTAtCsY-giCGzrlarqMuPw8djTcXGouRxTWcWI1iB5cNOe0XKSYvRZgVEhBltcp3VkrMc2HSwoGfpRqr-TTCoGRnscqGwEH8_0m5y8F6OPtH8U8hizgjKGBfcVrdS23O_yzCviwt8j7R-U1mNvJu7jlFnJZtQ"/>
</div>
</div>
</div>
</section>
<!-- Vision & Mission (Bento Grid Style) -->
<section class="bg-surface-container-low py-xl">
<div class="max-w-container-max mx-auto px-gutter">
<div class="text-center mb-xl">
<h2 class="font-headline-lg text-headline-lg mb-sm">Visi &amp; Misi</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Panduan kami dalam memberikan layanan terbaik setiap hari.</p>
</div>
<div class="grid md:grid-cols-3 gap-md">
<!-- Visi Card -->
<div class="md:col-span-1 bg-primary text-on-primary p-xl rounded-xl shadow-lg bento-item flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-4xl mb-md">visibility</span>
<h3 class="font-headline-md text-headline-md mb-md">Visi Kami</h3>
<p class="font-body-md leading-relaxed opacity-90">Menjadi mitra terpercaya nomor satu di Indonesia dalam pengelolaan kebersihan pakaian melalui inovasi berkelanjutan dan pelayanan yang tulus.</p>
</div>
</div>
<!-- Misi Cards -->
<div class="md:col-span-2 grid md:grid-cols-2 gap-md">
<div class="bg-white p-lg rounded-xl shadow-sm border border-outline-variant bento-item">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">verified</span>
<h4 class="font-headline-sm text-headline-sm text-primary mb-sm">Kualitas Tinggi</h4>
<p class="font-body-sm text-on-surface-variant">Hanya menggunakan deterjen premium dan teknik pencucian yang disesuaikan dengan jenis bahan.</p>
</div>
<div class="bg-white p-lg rounded-xl shadow-sm border border-outline-variant bento-item">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">speed</span>
<h4 class="font-headline-sm text-headline-sm text-primary mb-sm">Kecepatan</h4>
<p class="font-body-sm text-on-surface-variant">Sistem manajemen cerdas yang menjamin ketepatan waktu tanpa mengabaikan detail.</p>
</div>
<div class="bg-white p-lg rounded-xl shadow-sm border border-outline-variant bento-item">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">cyclone</span>
<h4 class="font-headline-sm text-headline-sm text-primary mb-sm">Higienitas</h4>
<p class="font-body-sm text-on-surface-variant">Protokol sanitasi ketat untuk setiap mesin dan area operasional guna kenyamanan Anda.</p>
</div>
<div class="bg-white p-lg rounded-xl shadow-sm border border-outline-variant bento-item">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">devices</span>
<h4 class="font-headline-sm text-headline-sm text-primary mb-sm">Teknologi</h4>
<p class="font-body-sm text-on-surface-variant">Integrasi aplikasi mobile untuk pemantauan status pesanan secara real-time.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Our Values Section -->
<section class="py-xl px-gutter max-w-container-max mx-auto">
<div class="text-center mb-xl">
<h2 class="font-headline-lg text-headline-lg mb-sm">Nilai-Nilai Kami</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Fondasi dari setiap interaksi yang kami lakukan.</p>
</div>
<div class="grid md:grid-cols-3 gap-lg text-center">
<div class="p-lg">
<div class="w-16 h-16 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center mx-auto mb-md">
<span class="material-symbols-outlined text-3xl">workspace_premium</span>
</div>
<h3 class="font-headline-sm text-headline-sm mb-sm">Profesionalisme</h3>
<p class="font-body-sm text-on-surface-variant">Kami menjunjung tinggi etika kerja dan tanggung jawab dalam menangani setiap pesanan pelanggan.</p>
</div>
<div class="p-lg">
<div class="w-16 h-16 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center mx-auto mb-md">
<span class="material-symbols-outlined text-3xl">lightbulb</span>
</div>
<h3 class="font-headline-sm text-headline-sm mb-sm">Inovasi</h3>
<p class="font-body-sm text-on-surface-variant">Beradaptasi dengan teknologi terbaru untuk terus meningkatkan efisiensi dan pengalaman pelanggan.</p>
</div>
<div class="p-lg">
<div class="w-16 h-16 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center mx-auto mb-md">
<span class="material-symbols-outlined text-3xl">sentiment_very_satisfied</span>
</div>
<h3 class="font-headline-sm text-headline-sm mb-sm">Customer First</h3>
<p class="font-body-sm text-on-surface-variant">Kepuasan pelanggan adalah prioritas utama kami dalam setiap keputusan bisnis yang diambil.</p>
</div>
</div>
</section>
<!-- Our Team Section -->
<section class="py-xl bg-surface-bright">
<div class="max-w-container-max mx-auto px-gutter">
<div class="flex flex-col md:flex-row justify-between items-end mb-xl">
<div class="max-w-xl">
<h2 class="font-headline-lg text-headline-lg mb-sm">Tim Di Balik Layar</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Kombinasi ahli operasional dan pecinta teknologi yang berdedikasi tinggi.</p>
</div>
</div>
<div class="grid md:grid-cols-3 gap-md">
<!-- Member 1 -->
<div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Professional portrait of a confident male founder in a modern business-casual attire. He is standing in a bright, minimalist office space with soft daylight. The image has a clean corporate aesthetic with a shallow depth of field, focusing on the friendly yet professional expression of the individual." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbSJK6Mied7xu7USJWgp81Ef0EhBm_CJyIlu8U0KfqyelNHDLwKUb51sqU3z3qlYasDjMhCVBCxEVJkSKEIDqoRS1MqQ8C6wFGtEoKOydPvh76TsLhEfvf4eQaGg5-FqqfsoAhNfYBGRoLNShWpYVL8CKoty1A99sMubsh9MVe42Z4ZYkOAERRziisBCDJZUbuIIQMX1K6aZaEjlHuQufbdRbnVLHWqz_OFh4zo0hJ8xPKJm5arxKLcU8zWJiPlJ1dEaG5b_cuUA"/>
</div>
<div class="p-md bg-white">
<h4 class="font-headline-sm text-headline-sm mb-xs">Budi Santoso</h4>
<p class="font-label-md text-primary mb-sm uppercase tracking-wide">Founder &amp; CEO</p>
<p class="font-body-sm text-on-surface-variant">Visoner dibalik LaundroClean yang fokus pada integrasi teknologi di industri tradisional.</p>
</div>
</div>
<!-- Member 2 -->
<div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Professional portrait of a female operations manager with a confident and approachable smile. She is in a contemporary office setting with clean lines and subtle blue accents. The lighting is soft and flattering, maintaining a high-key professional look consistent with a modern service company." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrgzV45oMmNTOR_TyfIOEumBfb1uyhDWY_dQmY1Fmk5-aERuy4xzvT-YE4CBhSO_aC0F9rYwc7CZGboH0XxWKNcdypCrFxfKIobdfGhQs2aZ6p_q6u5r4JTo6MKUC-JiPnkdsesHs5SrCpsGs7MJoxMTUBSHXgedskvxLCzzWm-hCFU4DGtKA7mD2U0PxmD9i2FQiMMvwOdzbZJJAHQZb7YraSEH3GxpZ-GMuMaMCMSCtbqb7oY-Tm_Gf-S8LpW54sRA_F8lliLA"/>
</div>
<div class="p-md bg-white">
<h4 class="font-headline-sm text-headline-sm mb-xs">Siti Aminah</h4>
<p class="font-label-md text-primary mb-sm uppercase tracking-wide">Operations Manager</p>
<p class="font-body-sm text-on-surface-variant">Memastikan standar kualitas dan ketepatan waktu di setiap cabang tetap terjaga dengan sempurna.</p>
</div>
</div>
<!-- Member 3 -->
<div class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
<div class="aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Portrait of a friendly young male customer care lead in a light blue shirt. He has a warm, helpful expression, photographed against a neutral minimalist background. The style is bright and airy, reflecting a brand that values communication and friendly customer service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlDw-mt75kUP70yZq2VjpUbqwzRX3XiZMUvYi_YcRPl7y4BJl8lXdWKq0hO-lvlYclnim21FruIgxwHRDmobRV3bUx_DHK4Jb74GG0H1cW70K5ZnrFMoSg8gkhnu8tc33aMJm_SoA2cOvrOUNmi_frx2O_0ckSnee3tOB2wbzG7AeSerx5kq0q56WNegVSB1_TbTeX5E2hXrd2wsjM7E76pButdnU6t-OtKyFPBZWbhcArFAMgZHcbmoc6mUfm9H8zLzBBg4Wkqg"/>
</div>
<div class="p-md bg-white">
<h4 class="font-headline-sm text-headline-sm mb-xs">Andi Wijaya</h4>
<p class="font-label-md text-primary mb-sm uppercase tracking-wide">Customer Care Lead</p>
<p class="font-body-sm text-on-surface-variant">Menjembatani kebutuhan pelanggan dengan solusi terbaik demi pengalaman laundry yang menyenangkan.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Call to Action -->
<section class="py-xl px-gutter">
<div class="max-w-container-max mx-auto">
<div class="relative bg-on-background rounded-3xl p-xl overflow-hidden">
<!-- Animated Background Elements -->
<div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[100px]"></div>
<div class="absolute bottom-0 left-0 w-96 h-96 bg-primary-container/10 rounded-full blur-[120px]"></div>
<div class="relative z-10 flex flex-col items-center text-center">
<h2 class="font-display-lg text-white mb-md">Siap Memulai Hari yang Lebih Bersih?</h2>
<p class="font-body-lg text-white/70 mb-xl max-w-2xl">Bergabunglah dengan ribuan pelanggan yang telah mempercayakan kebersihan pakaian mereka kepada LaundroClean.</p>
<div class="flex flex-col sm:flex-row gap-md">
<button class="bg-primary text-white px-xl py-md rounded-lg font-label-md hover:bg-primary/90 transition-all active:scale-95 shadow-lg shadow-primary/20">
                                Mulai Sekarang
                            </button>
<a href="{{ route('catalog') }}">
                            <button class="bg-white/10 text-white backdrop-blur-sm border border-white/20 px-xl py-md rounded-lg font-label-md hover:bg-white/20 transition-all active:scale-95">
                                Lihat Katalog
                            </button>
    </a>
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