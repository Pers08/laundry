<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CleanFlow Admin - Manajemen Layanan</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
                  "primary": "#004ac6",
                  "on-primary": "#ffffff",
                  "primary-container": "#2563eb",
                  "on-primary-container": "#eeefff",
                  "surface": "#f9f9ff",
                  "on-surface": "#111c2d",
                  "on-surface-variant": "#434655",
                  "surface-container-low": "#f0f3ff",
                  "surface-container-lowest": "#ffffff",
                  "surface-container-high": "#dee8ff",
                  "outline-variant": "#c3c6d7",
                  "secondary-container": "#d0e1fb",
                  "primary-fixed": "#dbe1ff",
                  "on-primary-fixed": "#00174b",
                  "on-secondary-container": "#54647a"
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
        }
      }
    }
</script>
<style>
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    body { font-family: 'Inter', sans-serif; }
</style>
</head>
<body class="bg-surface text-on-surface min-h-screen relative">

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

<main class="flex-1 ml-sidebar-width bg-surface">

    <header class="flex justify-between items-center h-16 px-md w-full sticky top-0 z-40 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm">
        <div class="flex items-center gap-md flex-1">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Cari layanan..." type="text"/>
            </div>
        </div>
    </header>

    <div class="px-md pt-8 pb-md max-w-[1400px] mx-auto w-full">

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl flex items-center gap-2 mb-6">
            <span class="material-symbols-outlined">check_circle</span>
            <span class="text-sm font-medium">{{ session('success') }}</span>
        </div>
        @endif

        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-3xl font-bold text-on-surface mb-2">Manajemen Layanan</h2>
                <p class="text-on-surface-variant text-sm">Atur paket laundry dan sesuaikan harga per kilogram.</p>
            </div>
            <button onclick="bukaModalLayanan()" class="bg-primary-container text-on-primary-container px-6 py-2.5 rounded-xl text-sm font-bold flex items-center gap-2 hover:bg-primary hover:text-white transition-all shadow-md active:scale-95">
                <span class="material-symbols-outlined text-[20px]">add</span>
                Tambah Layanan Baru
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-36">
                <div class="bg-primary/10 p-2 rounded-lg text-primary w-fit">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <div>
                    <h3 class="text-on-surface-variant text-sm font-medium">Total Jenis Layanan</h3>
                    <p class="text-3xl font-bold text-primary mt-1">{{ $totalJenis }}</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-36">
                <div class="bg-yellow-100 p-2 rounded-lg text-yellow-700 w-fit">
                    <span class="material-symbols-outlined">star</span>
                </div>
                <div>
                    <h3 class="text-on-surface-variant text-sm font-medium">Layanan Terpopuler</h3>
                    <p class="text-xl font-bold text-on-surface mt-1 truncate">{{ $layananPopuler }}</p>
                </div>
            </div>
            <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-36">
                <div class="bg-green-100 p-2 rounded-lg text-green-700 w-fit">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div>
                    <h3 class="text-on-surface-variant text-sm font-medium">Rata-rata Harga</h3>
                    <p class="text-xl font-bold text-on-surface mt-1">Rp {{ number_format($rataHarga, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden mb-10">
            <div class="p-6 border-b border-outline-variant bg-surface-container-low/50">
                <h3 class="text-lg font-bold text-on-surface">Daftar Layanan Tersedia</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container text-on-surface-variant text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-bold">ID Layanan</th>
                            <th class="px-6 py-4 font-bold">Nama Layanan</th>
                            <th class="px-6 py-4 font-bold">Satuan</th>
                            <th class="px-6 py-4 font-bold">Harga</th>
                            <th class="px-6 py-4 font-bold">Status</th>
                            <th class="px-6 py-4 font-bold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        @forelse($layanans as $layanan)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 text-sm font-bold text-primary">LYN-{{ str_pad($layanan->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-on-surface">{{ $layanan->nama_layanan }}</td>
                            <td class="px-6 py-4 text-sm text-on-surface-variant">Per {{ $layanan->satuan }}</td>
                            <td class="px-6 py-4 text-sm font-bold">Rp {{ number_format($layanan->harga_perkg, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                    <button onclick="toggleStatus(this, {{ $layanan->id }})" 
                                        class="status-btn px-3 py-1 rounded-full {{ strtolower($layanan->status) === 'aktif' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} text-[10px] font-bold flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full {{ strtolower($layanan->status) === 'aktif' ? 'bg-green-500' : 'bg-red-500' }} status-dot"></span> 
                                        <span class="status-text">{{ strtoupper($layanan->status) }}</span>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2 justify-end">
                                    <button onclick="bukaModalEdit({{ $layanan->id }}, '{{ $layanan->nama_layanan }}', {{ $layanan->harga_perkg }}, '{{ $layanan->satuan }}')"
                                        class="p-1.5 rounded-lg hover:bg-primary/10 text-primary transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </button>
                                    <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST"
                                          onsubmit="return confirm('Yakin hapus layanan ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-lg hover:bg-red-100 text-red-500 transition-colors">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-sm text-on-surface-variant">Belum ada layanan yang ditambahkan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

{{-- Modal Tambah Layanan --}}
<div id="modalLayanan" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-surface-container-lowest rounded-2xl shadow-2xl w-full max-w-md border border-outline-variant overflow-hidden">
        <div class="p-4 border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
            <h3 class="text-lg font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">add_circle</span>
                Tambah Layanan Baru
            </h3>
            <button onclick="tutupModalLayanan()" class="text-on-surface-variant hover:text-red-500 rounded-full p-1 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form action="{{ route('layanan.store') }}" method="POST">
            @csrf
            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Nama Layanan</label>
                    <input type="text" name="nama_layanan" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Contoh: Cuci Komplit" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Harga (Rp)</label>
                        <input type="number" name="harga_perkg" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="5000" min="0" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Satuan</label>
                        <select name="satuan" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" required>
                            <option value="Kg">Per Kilogram (Kg)</option>
                            <option value="Pcs">Per Potong (Pcs)</option>
                            <option value="Meter">Per Meter</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-outline-variant bg-surface-container-low flex justify-end gap-2">
                <button type="button" onclick="tutupModalLayanan()" class="px-4 py-2 border border-outline-variant text-sm font-medium rounded-lg hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="px-5 py-2 bg-primary text-white text-sm font-bold rounded-lg hover:brightness-110 active:scale-95 shadow-md transition-all flex items-center gap-1">
                    <span class="material-symbols-outlined text-[18px]">save</span> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit Layanan --}}
<div id="modalEdit" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
    <div class="bg-surface-container-lowest rounded-2xl shadow-2xl w-full max-w-md border border-outline-variant overflow-hidden">
        <div class="p-4 border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
            <h3 class="text-lg font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">edit</span>
                Edit Layanan
            </h3>
            <button onclick="tutupModalEdit()" class="text-on-surface-variant hover:text-red-500 rounded-full p-1 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <form id="formEdit" method="POST">
            @csrf @method('PUT')
            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Nama Layanan</label>
                    <input type="text" name="nama_layanan" id="editNama" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Harga (Rp)</label>
                        <input type="number" name="harga_perkg" id="editHarga" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" min="0" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-on-surface-variant uppercase mb-1">Satuan</label>
                        <select name="satuan" id="editSatuan" class="w-full bg-surface-container border border-outline-variant rounded-lg py-2.5 px-3 text-sm focus:ring-2 focus:ring-primary outline-none" required>
                            <option value="Kg">Per Kilogram (Kg)</option>
                            <option value="Pcs">Per Potong (Pcs)</option>
                            <option value="Meter">Per Meter</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-outline-variant bg-surface-container-low flex justify-end gap-2">
                <button type="button" onclick="tutupModalEdit()" class="px-4 py-2 border border-outline-variant text-sm font-medium rounded-lg hover:bg-surface-container-high transition-colors">Batal</button>
                <button type="submit" class="px-5 py-2 bg-primary text-white text-sm font-bold rounded-lg hover:brightness-110 active:scale-95 shadow-md transition-all flex items-center gap-1">
                    <span class="material-symbols-outlined text-[18px]">save</span> Update
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function bukaModalLayanan() {
        document.getElementById('modalLayanan').classList.remove('hidden');
    }
    function tutupModalLayanan() {
        document.getElementById('modalLayanan').classList.add('hidden');
    }
    document.getElementById('modalLayanan').addEventListener('click', function(e) {
        if (e.target === this) tutupModalLayanan();
    });

    function bukaModalEdit(id, nama, harga, satuan) {
        document.getElementById('editNama').value = nama;
        document.getElementById('editHarga').value = harga;
        document.getElementById('editSatuan').value = satuan;
        document.getElementById('formEdit').action = '/layanan/' + id;
        document.getElementById('modalEdit').classList.remove('hidden');
    }
    function tutupModalEdit() {
        document.getElementById('modalEdit').classList.add('hidden');
    }
    document.getElementById('modalEdit').addEventListener('click', function(e) {
        if (e.target === this) tutupModalEdit();
    });
    
    function toggleStatus(btn, id) {
        // 1. Definisikan variabel text dan dot biar script lu bisa jalan
        const text = btn.querySelector('.status-text');
        const dot = btn.querySelector('.status-dot');

        // 2. INI SCRIPT LU (Ganti warna dan teks)
        if (text.innerText === 'AKTIF') {
            // Ubah ke NONAKTIF - merah
            btn.classList.remove('bg-green-100', 'text-green-700');
            btn.classList.add('bg-red-100', 'text-red-700');
            dot.classList.remove('bg-green-500');
            dot.classList.add('bg-red-500');
            text.innerText = 'NONAKTIF';
        } else {
            // Ubah ke AKTIF - hijau
            btn.classList.remove('bg-red-100', 'text-red-700');
            btn.classList.add('bg-green-100', 'text-green-700');
            dot.classList.remove('bg-red-500');
            dot.classList.add('bg-green-500');
            text.innerText = 'AKTIF';
        }

        // 3. Ambil teks terbaru (aktif/nonaktif) buat dikirim ke Laravel
        let statusBaru = text.innerText.toLowerCase(); 

        // 4. Kirim ke Database diam-diam (AJAX)
        fetch(`/layanan/${id}/toggle-status`, {
        method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Wajib ada di Laravel
            },
            body: JSON.stringify({ status: statusBaru })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                alert('Gagal mengubah status di database!');
                location.reload(); // Kalau gagal, balikin ke tampilan awal
            }
        })
    }

</script>

</body>
</html>