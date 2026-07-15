<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Kelola Pelanggan - LaundroClean Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-icon {
            font-variation-settings: 'FILL' 1;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9f9ff;
        }
        /* Custom Scrollbar for clean UI */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#eeefff",
                        "on-secondary-container": "#54647a",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#d0e1fb",
                        "on-primary-fixed": "#00174b",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#f9f9ff",
                        "tertiary-fixed": "#e0e3e5",
                        "primary-fixed-dim": "#b4c5ff",
                        "tertiary-fixed-dim": "#c4c7c9",
                        "on-error-container": "#93000a",
                        "inverse-surface": "#263143",
                        "surface-container": "#e7eeff",
                        "secondary": "#505f76",
                        "on-surface": "#111c2d",
                        "surface-container-highest": "#d8e3fb",
                        "background": "#f9f9ff",
                        "tertiary-container": "#6b6e70",
                        "tertiary": "#525657",
                        "on-primary": "#ffffff",
                        "surface": "#f9f9ff",
                        "on-background": "#111c2d",
                        "surface-variant": "#d8e3fb",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-dim": "#cfdaf2",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#ecf1ff",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-tertiary-fixed": "#191c1e",
                        "outline-variant": "#c3c6d7",
                        "surface-container-low": "#f0f3ff",
                        "primary": "#004ac6",
                        "outline": "#737686",
                        "on-error": "#ffffff",
                        "inverse-primary": "#b4c5ff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "error-container": "#ffdad6",
                        "on-surface-variant": "#434655",
                        "secondary-fixed": "#d3e4fe",
                        "surface-container-high": "#dee8ff",
                        "on-tertiary-container": "#eff1f3",
                        "on-tertiary-fixed-variant": "#444749",
                        "surface-tint": "#0053db",
                        "primary-fixed": "#dbe1ff",
                        "primary-container": "#2563eb",
                        "on-secondary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "260px",
                        "gutter": "24px",
                        "sm": "12px",
                        "xs": "4px",
                        "lg": "40px",
                        "container-max": "1440px",
                        "xl": "64px",
                        "md": "24px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background text-on-surface">

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

<header class="flex justify-between items-center px-md w-full ml-sidebar-width h-16 sticky top-0 z-30 bg-surface-bright border-b border-outline-variant">
    <div class="flex items-center gap-md w-1/2">
        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md" data-icon="search">search</span>
            <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 focus:ring-2 focus:ring-primary text-body-md" placeholder="Cari di dashboard..." type="text"/>
        </div>
    </div>
    <div class="flex items-center gap-md">
        <button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90 relative">
            <span class="material-symbols-outlined text-on-surface-variant" data-icon="notifications">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
        </button>
        <button class="hover:bg-surface-container-high rounded-full p-2 transition-all active:scale-90">
            <span class="material-symbols-outlined text-on-surface-variant" data-icon="settings">settings</span>
        </button>
        <div class="w-px h-8 bg-outline-variant mx-2"></div>
        <img alt="User Avatar" class="w-8 h-8 rounded-full border border-outline-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVMwEqF80zQF8s5cxuvy3Sz52ZKYqKTrlkNmD3WhrFMvUG37vRES_RGLG6UkIzIjn6v2DN_5hnii8yoBMcOll2uX6NRWG66kL0jTQC5IIIDAfc0CM8P44TuqvnjrWqlHAmHL1UOXqxuYhNLmMam4mjfnV48Z7gZiqSz2sdjXmL6HXPpy5uMZa87GWONQRNksa72iKG3wJxIaLrU1n12q5psGrpXRP6uyuflgzLnm6Tc0baoTsBg6Lm_V2jL5Kfs9VGtBm3jc3ytQ"/>
    </div>
</header>

<main class="ml-sidebar-width min-h-[calc(100vh-64px)] p-md">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md mb-xl">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Kelola Pelanggan</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Kelola data basis pelanggan LaundroClean dengan mudah.</p>
        </div>
        <button id="openModalBtn" class="flex items-center gap-xs bg-primary text-on-primary px-gutter py-sm rounded-lg font-label-md text-label-md shadow-sm hover:opacity-90 transition-all active:scale-95">
            <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
            Tambahkan Pelanggan Baru
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-md mb-md">
        <div class="md:col-span-8 bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center gap-md shadow-sm">
            <div class="flex-1 relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-lg py-2 pl-10 focus:ring-2 focus:ring-primary font-body-sm text-body-sm" placeholder="Cari berdasarkan nama atau nomor telepon..." type="text"/>
            </div>
            <button class="flex items-center gap-xs px-md py-2 border border-outline text-on-surface rounded-lg hover:bg-surface-container transition-colors font-label-md text-label-md">
                <span class="material-symbols-outlined text-body-md" data-icon="filter_list">filter_list</span>
                Filter
            </button>
        </div>
        <div class="md:col-span-4 bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center justify-between shadow-sm">
            <div class="flex flex-col">
                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Total Pelanggan</span>
                <span class="font-headline-md text-headline-md text-primary font-bold">0</span>
            </div>
            <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center text-on-primary-fixed">
                <span class="material-symbols-outlined" data-icon="group">group</span>
            </div>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant">
                        <th class="px-md py-sm font-label-md text-label-md text-on-surface-variant">ID Pelanggan</th>
                        <th class="px-md py-sm font-label-md text-label-md text-on-surface-variant">Nama Pelanggan</th>
                        <th class="px-md py-sm font-label-md text-label-md text-on-surface-variant">Nomor Telepon</th>
                        <th class="px-md py-sm font-label-md text-label-md text-on-surface-variant">Alamat</th>
                        <th class="px-md py-sm font-label-md text-label-md text-on-surface-variant text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant">
                    @forelse($pelanggans as $pelanggan)
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-md font-body-sm text-body-sm font-semibold text-primary">
                                #LC-{{ str_pad($pelanggan->id, 6, '0', STR_PAD_LEFT) }}
                            </td>
                            <td class="px-md py-md">
                                <div class="flex items-center gap-sm">
                                    <div class="w-8 h-8 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold text-xs">
                                        {{ strtoupper(substr($pelanggan->nama_pelanggan, 0, 2)) }}
                                    </div>
                                    <span class="font-body-md text-body-md font-medium text-on-surface">
                                        {{ $pelanggan->nama_pelanggan }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-md py-md font-body-sm text-body-sm text-on-surface-variant">
                                {{ $pelanggan->nomor_telp }}
                            </td>
                            <td class="px-md py-md font-body-sm text-body-sm text-on-surface-variant">
                                {{ $pelanggan->alamat ?? 'Tidak ada alamat' }}
                            </td>
                            <td class="px-md py-md text-right">
                                <div class="flex justify-end gap-xs opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button type="button" class="p-2 text-primary hover:bg-primary-fixed rounded-lg transition-colors edit-trigger-btn" 
                                            title="Edit"
                                            data-id="{{ $pelanggan->id }}"
                                            data-nama="{{ $pelanggan->nama_pelanggan }}"
                                            data-telepon="{{ $pelanggan->nomor_telp }}"
                                            data-alamat="{{ $pelanggan->alamat }}">
                                        <span class="material-symbols-outlined text-[20px]">edit</span>
                                    </button>

                                    <form id="delete-form-{{ $pelanggan->id }}" action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="p-2 text-error hover:bg-error-container rounded-lg transition-colors delete-trigger-btn" 
                                                title="Hapus" 
                                                data-id="{{ $pelanggan->id }}" 
                                                data-nama="{{ $pelanggan->nama_pelanggan }}">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-md py-xl text-center text-on-surface-variant font-body-md">
                                Belum ada data pelanggan yang tersimpan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-md bg-surface-container-low flex flex-col md:flex-row justify-between items-center gap-md border-t border-outline-variant">
        <span class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan 1-5 dari 1.248 pelanggan</span>
        <div class="flex items-center gap-xs">
            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container transition-colors text-on-surface-variant">
                <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
            </button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg bg-primary text-on-primary font-label-md text-label-md">1</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container text-on-surface-variant font-label-md text-label-md">2</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container text-on-surface-variant font-label-md text-label-md">3</button>
            <span class="text-on-surface-variant px-1">...</span>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container text-on-surface-variant font-label-md text-label-md">250</button>
            <button class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-surface-container transition-colors text-on-surface-variant">
                <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
            </button>
        </div>
    </div>

    <div class="mt-xl grid grid-cols-1 md:grid-cols-3 gap-md">
        <div class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant shadow-sm relative overflow-hidden group">
            <div class="relative z-10">
                <h3 class="font-headline-sm text-headline-sm text-on-surface mb-xs">Aktivitas Terbaru</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant mb-md">3 Pelanggan baru mendaftar hari ini.</p>
                <button class="text-primary font-label-md text-label-md hover:underline transition-all">Lihat Log Aktivitas →</button>
            </div>
            <div class="absolute -right-4 -bottom-4 opacity-5 group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-[96px]" data-icon="history">history</span>
            </div>
        </div>
        <div class="md:col-span-2 bg-primary-container p-md rounded-xl shadow-sm relative overflow-hidden">
            <div class="relative z-10 flex flex-col h-full justify-between">
                <div>
                    <h3 class="font-headline-sm text-headline-sm text-on-primary-container mb-xs">Statistik Geografis</h3>
                    <p class="font-body-sm text-body-sm text-on-primary-container opacity-80">60% pelanggan Anda berada di Jakarta.</p>
                </div>
                <div class="flex items-center gap-md mt-md">
                    <div class="flex-1 h-2 bg-on-primary-container/20 rounded-full overflow-hidden">
                        <div class="h-full bg-on-primary-container" style="width: 60%"></div>
                    </div>
                    <span class="text-on-primary-container font-label-md text-label-md">60%</span>
                </div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
        </div>
    </div>
</main>

<div class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-inverse-surface/40 backdrop-blur-sm" id="deleteModal">
    <div class="bg-surface p-xl rounded-2xl max-w-sm w-full shadow-2xl border border-outline-variant transform scale-95 opacity-0 transition-all duration-300" id="modalContent">
        <div class="w-16 h-16 bg-error-container rounded-full flex items-center justify-center text-error mb-md mx-auto">
            <span class="material-symbols-outlined text-headline-lg" data-icon="warning">warning</span>
        </div>
        <h2 class="font-headline-md text-headline-md text-on-surface text-center mb-xs">Hapus Pelanggan?</h2>
        <p class="font-body-md text-body-md text-on-surface-variant text-center mb-xl">
            Tindakan ini tidak dapat dibatalkan. Semua data terkait pelanggan <span id="deleteTargetName" class="font-bold text-error"></span> akan hilang selamanya.
        </p>
        <div class="flex gap-md">
            <button type="button" class="flex-1 py-sm px-md border border-outline rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors text-on-surface" onclick="closeDeleteModal()">Batal</button>
            <button type="button" id="confirmDeleteSubmitBtn" class="flex-1 py-sm px-md bg-error text-on-error rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity">Hapus</button>
        </div>
    </div>
</div>

<script>
    let activeDeleteFormId = null;

    function openDeleteModal(id, nama) {
        activeDeleteFormId = id;
        document.getElementById('deleteTargetName').innerText = `"${nama}"`;
        
        const modal = document.getElementById('deleteModal');
        const content = document.getElementById('modalContent');
        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        const content = document.getElementById('modalContent');
        content.classList.add('scale-95', 'opacity-0');
        content.classList.remove('scale-100', 'opacity-100');
        setTimeout(() => {
            modal.classList.add('hidden');
            activeDeleteFormId = null;
        }, 300);
    }

    document.querySelectorAll('.delete-trigger-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            openDeleteModal(id, nama);
        });
    });

    document.getElementById('confirmDeleteSubmitBtn').addEventListener('click', () => {
        if (activeDeleteFormId) {
            document.getElementById('delete-form-' + activeDeleteFormId).submit();
        }
    });

    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) closeDeleteModal();
    });
</script>


<div id="customerModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
    <div class="bg-surface-container-low w-full max-w-md p-lg rounded-xl border border-outline-variant shadow-lg transform scale-95 transition-transform duration-300">
        
        <div class="flex justify-between items-center mb-md border-b border-outline-variant pb-sm">
            <h3 class="font-title-md font-bold text-primary flex items-center gap-xs">
                <span class="material-symbols-outlined">person_add</span>
                Tambah Pelanggan Baru
            </h3>
            <button id="closeModalBtn" class="text-on-surface-variant hover:text-error p-1 rounded-lg transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form action="{{ route('pelanggan.store') }}" method="POST" class="flex flex-col gap-sm" autocomplete="off">
            @csrf
            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Masukkan nama pelanggan" autocomplete="new-password"
                    class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors">
            </div>

            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Nomor Telepon</label>
                <input type="text" name="telepon" required placeholder="Contoh: 0812345678" autocomplete="one-time-code"
                    class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors">
            </div>

            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Alamat Rumah</label>
                <textarea name="alamat" placeholder="Alamat lengkap rumah..." rows="2" autocomplete="new-text-field"
                        class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors"></textarea>
            </div>

            <div class="flex justify-end gap-sm mt-md border-t border-outline-variant pt-sm">
                <button type="button" id="cancelModalBtn" class="px-md py-sm rounded-lg font-label-md border border-outline text-on-surface-variant hover:bg-surface-container-high transition-colors">
                    Batal
                </button>
                <button type="submit" class="bg-primary text-on-primary font-semibold px-md py-sm rounded-lg hover:opacity-90 transition-all active:scale-95">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const modal = document.getElementById('customerModal');
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelModalBtn');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.querySelector('.transform').classList.remove('scale-95');
        }, 10);
    });

    function closeCustomerModal() {
        modal.classList.add('opacity-0');
        modal.querySelector('.transform').classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    closeBtn.addEventListener('click', closeCustomerModal);
    cancelBtn.addEventListener('click', closeCustomerModal);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeCustomerModal();
    });
</script>


<div id="editCustomerModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
    <div class="bg-surface-container-low w-full max-w-md p-lg rounded-xl border border-outline-variant shadow-lg transform scale-95 transition-transform duration-300">
        
        <div class="flex justify-between items-center mb-md border-b border-outline-variant pb-sm">
            <h3 class="font-title-md font-bold text-primary flex items-center gap-xs">
                <span class="material-symbols-outlined">edit</span>
                Edit Data Pelanggan
            </h3>
            <button id="closeEditModalBtn" class="text-on-surface-variant hover:text-error p-1 rounded-lg transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <form id="editCustomerForm" action="" method="POST" class="flex flex-col gap-sm" autocomplete="off">
            @csrf
            @method('PUT')
            
            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">ID Pelanggan (Dikunci)</label>
                <input type="text" id="edit_display_id" readonly
                    class="w-full px-md py-sm rounded-lg bg-surface-container-high border border-outline-variant text-on-surface-variant font-mono font-semibold cursor-not-allowed">
            </div>

            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Nama Lengkap</label>
                <input type="text" name="nama" id="edit_nama" required placeholder="Masukkan nama pelanggan"
                    class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors">
            </div>

            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Nomor Telepon</label>
                <input type="text" name="telepon" id="edit_telepon" required placeholder="Contoh: 0812345678"
                    class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors">
            </div>

            <div>
                <label class="block font-label-md mb-1 text-on-surface-variant">Alamat Rumah</label>
                <textarea name="alamat" id="edit_alamat" placeholder="Alamat lengkap rumah..." rows="2"
                        class="w-full px-md py-sm rounded-lg bg-surface border border-outline focus:border-primary focus:outline-none transition-colors"></textarea>
            </div>

            <div class="flex justify-end gap-sm mt-md border-t border-outline-variant pt-sm">
                <button type="button" id="cancelEditModalBtn" class="px-md py-sm rounded-lg font-label-md border border-outline text-on-surface-variant hover:bg-surface-container-high transition-colors">
                    Batal
                </button>
                <button type="submit" class="bg-primary text-on-primary font-semibold px-md py-sm rounded-lg hover:opacity-90 transition-all active:scale-95">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const editModal = document.getElementById('editCustomerModal');
    const closeEditBtn = document.getElementById('closeEditModalBtn');
    const cancelEditBtn = document.getElementById('cancelEditModalBtn');
    const editForm = document.getElementById('editCustomerForm');

    // Tangkap semua tombol edit di tabel
    document.querySelectorAll('.edit-trigger-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            // Ambil data atribut dari baris yang diklik
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const telepon = this.getAttribute('data-telepon');
            const alamat = this.getAttribute('data-alamat');

            // Pad ID biar tampil cantik seperti tabel (#LC-000001)
            const formattedId = "#LC-" + String(id).padStart(6, '0');

            // Masukkan data ke dalam form input modal edit
            document.getElementById('edit_display_id').value = formattedId;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_telepon').value = telepon;
            document.getElementById('edit_alamat').value = alamat;

            // Setel Action Route Laravel sesuai web.php
            editForm.action = `/pelanggan/${id}`;

            // Buka Modal Edit dengan animasi smooth
            editModal.classList.remove('hidden');
            setTimeout(() => {
                editModal.classList.remove('opacity-0');
                editModal.querySelector('.transform').classList.remove('scale-95');
            }, 10);
        });
    });

    function closeEditCustomerModal() {
        editModal.classList.add('opacity-0');
        editModal.querySelector('.transform').classList.add('scale-95');
        setTimeout(() => {
            editModal.classList.add('hidden');
        }, 300);
    }

    closeEditBtn.addEventListener('click', closeEditCustomerModal);
    cancelEditBtn.addEventListener('click', closeEditCustomerModal);

    editModal.addEventListener('click', (e) => {
        if (e.target === editModal) closeEditCustomerModal();
    });
</script>

</body>
</html>