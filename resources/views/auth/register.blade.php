<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Daftar Akun - LaundryClean</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#dbe1ff",
                        "surface-container": "#e7eeff",
                        "surface": "#f9f9ff",
                        "outline-variant": "#c3c6d7",
                        "surface-variant": "#d8e3fb",
                        "surface-tint": "#0053db",
                        "outline": "#737686",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#dee8ff",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#ecf1ff",
                        "surface-dim": "#cfdaf2",
                        "surface-container-highest": "#d8e3fb",
                        "background": "#f9f9ff",
                        "secondary": "#505f76",
                        "surface-bright": "#f9f9ff",
                        "secondary-container": "#d0e1fb",
                        "on-primary-container": "#eeefff",
                        "inverse-surface": "#263143",
                        "surface-container-low": "#f0f3ff",
                        "primary-container": "#2563eb",
                        "on-primary": "#ffffff",
                        "inverse-primary": "#b4c5ff",
                        "on-surface": "#111c2d",
                        "error": "#ba1a1a",
                        "primary": "#004ac6",
                        "on-secondary": "#ffffff",
                        "on-error": "#ffffff",
                        "on-background": "#111c2d",
                        "on-surface-variant": "#434655"
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
                        "sm": "12px",
                        "gutter": "24px",
                        "base": "8px",
                        "xs": "4px",
                        "container-max": "1440px"
                    },
                    "fontSize": {
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-surface text-on-surface">

<!-- Navbar -->
<header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm h-16">
    <nav class="flex justify-between items-center h-full px-md max-w-container-max mx-auto">
        <div class="font-headline-md text-headline-md font-bold text-primary">LaundryClean</div>
        <div class="flex items-center gap-base">
            <a href="{{ route('login') }}"
               class="hidden md:block px-md py-xs font-label-md text-label-md text-primary hover:bg-surface-container-low transition-colors rounded-lg">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="px-md py-base font-label-md text-label-md bg-primary-container text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-opacity">
                Daftar
            </a>
        </div>
    </nav>
</header>

<main class="min-h-screen pt-32 pb-xl px-md flex flex-col items-center justify-center relative overflow-hidden">
    <!-- Background blur -->
    <div class="absolute top-1/4 -right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 -left-1/4 w-96 h-96 bg-secondary/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="w-full max-w-[540px] z-10">

        <!-- Header -->
        <div class="text-center mb-lg">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-fixed rounded-2xl mb-md shadow-sm">
                <span class="material-symbols-outlined text-primary text-[32px]">local_laundry_service</span>
            </div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Daftar Akun</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Bergabunglah dengan layanan laundry terpercaya</p>
        </div>

        <!-- Card Form -->
        <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl shadow-sm p-lg">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-md">

                    {{-- Nama Lengkap --}}
                    <div class="md:col-span-2 space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            placeholder="Contoh: John Doe"
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none
                                {{ $errors->has('name') ? 'border-error' : 'border-outline-variant' }}"/>
                        @error('name')
                            <p class="text-error text-body-sm px-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            placeholder="example@mail.com"
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none
                                {{ $errors->has('email') ? 'border-error' : 'border-outline-variant' }}"/>
                        @error('email')
                            <p class="text-error text-body-sm px-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nomor Telepon --}}
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Nomor Telepon</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                            placeholder="08123456789"
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none
                                {{ $errors->has('phone') ? 'border-error' : 'border-outline-variant' }}"/>
                        @error('phone')
                            <p class="text-error text-body-sm px-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Alamat Rumah --}}
                    <div class="md:col-span-2 space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Alamat Rumah</label>
                        <textarea name="address" rows="2"
                            placeholder="Jl. Mawar No. 123..."
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none resize-none
                                {{ $errors->has('address') ? 'border-error' : 'border-outline-variant' }}">{{ old('address') }}</textarea>
                        @error('address')
                            <p class="text-error text-body-sm px-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Kata Sandi</label>
                        <input type="password" name="password"
                            placeholder="••••••••"
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none
                                {{ $errors->has('password') ? 'border-error' : 'border-outline-variant' }}"/>
                        @error('password')
                            <p class="text-error text-body-sm px-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Konfirmasi Password --}}
                    <div class="space-y-xs">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block px-1">Konfirmasi Kata Sandi</label>
                        <input type="password" name="password_confirmation"
                            placeholder="••••••••"
                            class="w-full px-md py-base bg-surface border rounded-lg font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none border-outline-variant"/>
                    </div>

                </div>

                <!-- Security Badge -->
                <div class="flex items-center justify-center gap-xs py-sm bg-surface-container/50 rounded-lg border border-outline-variant/20 mt-md">
                    <span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Data Anda aman bersama kami</span>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full py-md mt-md bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-95 transition-all duration-200">
                    Daftar Sekarang
                </button>
            </form>

            <div class="mt-lg pt-lg border-t border-outline-variant/30 text-center">
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">Masuk</a>
                </p>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-lg grid grid-cols-3 gap-md opacity-60">
            <div class="flex flex-col items-center text-center">
                <span class="material-symbols-outlined text-primary text-[24px] mb-xs">shutter_speed</span>
                <span class="font-label-sm text-label-sm">Cepat</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <span class="material-symbols-outlined text-primary text-[24px] mb-xs">sanitizer</span>
                <span class="font-label-sm text-label-sm">Higenis</span>
            </div>
            <div class="flex flex-col items-center text-center">
                <span class="material-symbols-outlined text-primary text-[24px] mb-xs">savings</span>
                <span class="font-label-sm text-label-sm">Hemat</span>
            </div>
        </div>

    </div>
</main>

<footer class="w-full py-xl bg-surface border-t border-outline-variant">
    <div class="flex flex-col md:flex-row justify-between items-center px-md max-w-container-max mx-auto gap-md">
        <div class="flex flex-col gap-xs items-center md:items-start">
            <div class="font-headline-sm text-headline-sm font-bold text-on-surface">LaundryClean</div>
            <p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 LaundryClean. All rights reserved.</p>
        </div>
        <div class="flex gap-lg">
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Privacy Policy</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Terms of Service</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Support</a>
        </div>
    </div>
</footer>

</body>
</html>