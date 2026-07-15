<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Masuk - LaundryClean</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<style>
    body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .glass-panel { background: rgba(255,255,255,0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
    .form-transition { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
</style>
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
                "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
<body class="bg-surface text-on-surface overflow-hidden h-screen flex flex-col">

<main class="flex-grow flex items-center justify-center relative overflow-hidden px-gutter">
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-primary-container/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-secondary-container/20 rounded-full blur-3xl"></div>

    <div class="w-full max-w-[1000px] bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col md:flex-row relative z-10 min-h-[600px]">

        {{-- Side Visual --}}
        <div class="hidden md:flex w-1/2 relative bg-primary-container items-center justify-center p-xl">
            <div class="absolute inset-0 overflow-hidden">
                <img class="w-full h-full object-cover opacity-30 mix-blend-overlay"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAbpnBRF_2Z_aOCHtGx6QRwmePrtFopK-3z80SwHYD2DubnP72GLGMtrDXveUKa4d3nct8cGPqSS5aO7zYGH9zcbVQ3LKuJXrIQiBLsUeBuFR6YjeSeovVt3bDFcCvf7Q5BUoNfR4yFm2iAvz9xgwdBthulLNRJBgOZuBkYqGHeF-tjBgv5lE1GmKQ5Z3TsVKY1Gdys3BgTURHH6Jv7K1d30xp8UVHjGO2BZ6i6nO6kp-wCsjjx7_aV6IRf-5Dotl5nHAggMb4eA"/>
            </div>
            <div class="relative z-20 text-on-primary">
                <div class="mb-md">
                    <span class="font-headline-md text-headline-md font-bold tracking-tight">LaundryClean</span>
                </div>
                <h1 class="font-display-lg text-display-lg mb-base leading-tight">Kebersihan Sempurna, Tanpa Ribet.</h1>
                <p class="font-body-md text-body-md opacity-90 max-w-sm">Kelola cucian Anda dengan sistem manajemen modern yang dirancang untuk efisiensi maksimal.</p>
            </div>
        </div>

        {{-- Form Area --}}
        <div class="flex-grow flex items-center justify-center p-md lg:p-xl relative bg-white">
            <div class="w-full max-w-sm">

                <div class="mb-xl">
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-xs">Selamat Datang</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Silakan masuk ke akun Anda</p>
                </div>

                {{-- Error Message --}}
                @if($errors->any())
                    <div class="bg-error-container text-on-error-container px-md py-sm rounded-lg mb-md font-body-sm">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-md">
                    @csrf

                    {{-- Email --}}
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant ml-xs">Email</label>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">mail</span>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                class="w-full pl-12 pr-4 py-3 bg-surface-container-low border-transparent border-2 rounded-lg focus:border-primary focus:ring-0 font-body-md text-body-md transition-all placeholder:text-outline
                                {{ $errors->has('email') ? 'border-error' : '' }}"/>
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="space-y-xs">
                        <div class="flex justify-between items-center px-xs">
                            <label class="font-label-md text-label-md text-on-surface-variant">Kata Sandi</label>
                            @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="font-label-sm text-label-sm text-primary hover:underline">Lupa Password?</a>
                            @endif
                        </div>
                        <div class="relative group">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
                            <input type="password" name="password"
                                placeholder="••••••••"
                                class="w-full pl-12 pr-4 py-3 bg-surface-container-low border-transparent border-2 rounded-lg focus:border-primary focus:ring-0 font-body-md text-body-md transition-all placeholder:text-outline
                                {{ $errors->has('password') ? 'border-error' : '' }}"/>
                        </div>
                    </div>

                    {{-- Remember Me --}}
                    <div class="flex items-center gap-sm px-xs">
                        <input type="checkbox" name="remember" id="remember"
                            class="rounded text-primary focus:ring-primary border-outline-variant"/>
                        <label for="remember" class="font-body-sm text-body-sm text-on-surface-variant">Ingat saya</label>
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full bg-primary text-on-primary py-3.5 rounded-lg font-label-md text-label-md hover:bg-primary/90 active:scale-[0.98] transition-all shadow-sm flex items-center justify-center gap-base">
                        <span class="material-symbols-outlined text-sm">rocket_launch</span>
                        Gas Login
                    </button>
                </form>

                <div class="mt-xl pt-md border-t border-outline-variant flex flex-col items-center gap-md">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Belum punya akun LaundryClean?</p>
                    <a href="{{ route('register') }}"
                        class="w-full text-center border-2 border-primary/20 text-primary py-3 rounded-lg font-label-md text-label-md hover:bg-primary/5 transition-all">
                        Daftar Sekarang
                    </a>
                </div>

            </div>
        </div>

    </div>
</main>

<footer class="w-full py-md px-gutter max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-sm relative z-20">
    <span class="font-body-sm text-body-sm text-on-surface-variant opacity-60">© 2024 LaundryClean Professional Services.</span>
    <div class="flex gap-md">
        <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Bantuan</a>
        <a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Status Layanan</a>
    </div>
</footer>

<script>
    document.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;
        document.querySelectorAll('.blur-3xl').forEach((el, index) => {
            const speed = (index + 1) * 20;
            el.style.transform = `translate(${x * speed}px, ${y * speed}px)`;
        });
    });
</script>
</body>
</html>