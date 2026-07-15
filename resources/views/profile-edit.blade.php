<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Edit Profil | LaundryClean</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#111c2d",
                        "primary": "#004ac6",
                        "secondary-fixed": "#d3e4fe",
                        "on-surface-variant": "#434655",
                        "on-primary": "#ffffff",
                        "surface": "#f9f9ff",
                        "surface-container-low": "#f0f3ff",
                        "on-background": "#111c2d",
                        "secondary": "#505f76",
                        "primary-container": "#2563eb",
                        "background": "#f9f9ff",
                        "surface-variant": "#d8e3fb",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#d8e3fb",
                        "secondary-container": "#d0e1fb",
                        "outline": "#737686",
                        "inverse-on-surface": "#ecf1ff",
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
                        "base": "8px"
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
                    }
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f9f9ff; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
    </style>
</head>
<body class="text-on-surface">

<!-- Navbar -->
<header class="bg-surface/80 backdrop-blur-md sticky top-0 z-50 border-b border-outline-variant">
    <div class="flex justify-between items-center px-gutter py-base max-w-container-max mx-auto w-full">
        <div class="font-bold text-xl text-primary">LaundryClean</div>
        <nav class="hidden md:flex gap-md">
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('catalog') }}">Catalog</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a>
            <a class="text-primary font-bold border-b-2 border-primary pb-1" href="{{ route('status-cucian') }}">Status Cucian</a>
        </nav>
        <a href="{{ route('status-cucian') }}"
           class="bg-surface-container text-on-surface px-lg py-2 rounded-lg font-label-md hover:opacity-90 transition-all duration-200 active:scale-95">
            ← Kembali
        </a>
    </div>
</header>

<main class="min-h-screen py-xl px-gutter">
    <div class="max-w-lg mx-auto">

        <!-- Header -->
        <div class="mb-lg">
            <h1 class="text-display-lg font-bold text-on-background" style="font-size: 32px;">Edit Profil</h1>
            <p class="text-on-surface-variant mt-xs">Lengkapi nomor telepon dan alamat rumah Anda.</p>
        </div>

        <!-- Flash Success -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-sm rounded-xl mb-md flex items-center gap-sm">
                <span class="material-symbols-outlined text-green-600">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-sm ring-1 ring-outline-variant p-md md:p-lg">
            <form method="POST" action="{{ route('profile.pelanggan.update') }}">
                @csrf
                @method('PUT')

                <div class="space-y-md">

                    {{-- Nama (read-only) --}}
                    <div>
                        <label class="block font-label-md text-on-surface-variant mb-xs">Nama</label>
                        <input type="text" value="{{ $user->name }}" disabled
                            class="w-full border border-outline-variant rounded-lg px-md py-sm bg-surface-container-low text-on-surface-variant cursor-not-allowed"/>
                    </div>

                    {{-- Email (read-only) --}}
                    <div>
                        <label class="block font-label-md text-on-surface-variant mb-xs">Email</label>
                        <input type="email" value="{{ $user->email }}" disabled
                            class="w-full border border-outline-variant rounded-lg px-md py-sm bg-surface-container-low text-on-surface-variant cursor-not-allowed"/>
                    </div>

                    {{-- Nomor Telepon --}}
                    <div>
                        <label class="block font-label-md text-on-surface mb-xs">
                            Nomor Telepon <span class="text-error">*</span>
                        </label>
                        <input type="text" name="phone"
                            value="{{ old('phone', $user->phone) }}"
                            placeholder="Contoh: 08123456789"
                            class="w-full border rounded-lg px-md py-sm focus:outline-none focus:ring-2 focus:ring-primary transition
                                {{ $errors->has('phone') ? 'border-error bg-error-container' : 'border-outline-variant' }}"/>
                        @error('phone')
                            <p class="text-error text-body-sm mt-xs flex items-center gap-xs">
                                <span class="material-symbols-outlined" style="font-size:16px;">error</span>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Alamat --}}
                    <div>
                        <label class="block font-label-md text-on-surface mb-xs">
                            Alamat Rumah <span class="text-error">*</span>
                        </label>
                        <textarea name="address" rows="3"
                            placeholder="Contoh: Jl. Merdeka No. 10, Jakarta Pusat"
                            class="w-full border rounded-lg px-md py-sm focus:outline-none focus:ring-2 focus:ring-primary transition
                                {{ $errors->has('address') ? 'border-error bg-error-container' : 'border-outline-variant' }}">{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            <p class="text-error text-body-sm mt-xs flex items-center gap-xs">
                                <span class="material-symbols-outlined" style="font-size:16px;">error</span>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- Tombol Submit --}}
                    <button type="submit"
                        class="w-full bg-primary text-on-primary py-sm rounded-lg font-headline-sm hover:opacity-90 transition-all active:scale-95">
                        Simpan Perubahan
                    </button>

                </div>
            </form>
        </div>

    </div>
</main>

<!-- Footer simple -->
<footer class="text-center py-md text-on-surface-variant text-body-sm border-t border-outline-variant mt-xl">
    © 2024 LaundryClean. All rights reserved.
</footer>

</body>
</html>