<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buat event baru di platform kami dengan mudah dan cepat.">
    <title>Buat Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .input-style {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #e2e8f0;
            transition: all 0.2s ease;
        }
        .input-style::placeholder { color: #64748b; }
        .input-style:focus {
            outline: none;
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.1);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }
        .upload-zone {
            background: rgba(255, 255, 255, 0.03);
            border: 2px dashed rgba(255, 255, 255, 0.15);
            transition: all 0.3s ease;
        }
        .upload-zone:hover {
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
        }
        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.35);
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.5);
        }
        select option { background: #1e1b4b; color: #e2e8f0; }
        input[type="date"]::-webkit-calendar-picker-indicator { filter: invert(1) opacity(0.5); }
        label.text-slate-300 { color: #cbd5e1; }
    </style>
</head>
<body class="py-10 px-4">

    {{-- BACK BUTTON + HEADER --}}
    <div class="max-w-3xl mx-auto mb-8 flex items-center gap-4">
        <a href="{{ url()->previous() }}"
           class="w-9 h-9 rounded-full glass-card flex items-center justify-center text-slate-400 hover:text-white hover:border-indigo-500 transition border border-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
        </a>
        <div>
            <h1 class="text-2xl font-bold text-white tracking-tight">Buat Event</h1>
            <p class="text-sm text-slate-400 mt-0.5">Mulai dengan upload banner event kamu</p>
        </div>
    </div>

    <div class="max-w-3xl mx-auto space-y-5">

        {{-- BANNER UPLOAD --}}
        <div class="glass-card rounded-2xl p-6">
            <h2 class="text-sm font-semibold text-slate-400 uppercase tracking-wider mb-4">🖼️ Banner Event</h2>
            <label id="upload-zone" class="upload-zone rounded-xl p-12 text-center cursor-pointer block">
                <input type="file" id="banner-input" class="hidden" accept="image/*">
                <div id="upload-placeholder" class="space-y-3">
                    <div class="text-5xl">🖼️</div>
                    <p class="font-semibold text-slate-300">Klik atau drag untuk upload banner</p>
                    <p class="text-sm text-slate-500">Rekomendasi ukuran 1200 × 400 px &bull; JPG, PNG, WEBP</p>
                </div>
                <img id="banner-preview" src="" alt="Preview Banner" class="hidden max-h-48 mx-auto rounded-lg object-cover w-full">
            </label>
        </div>

        {{-- FORM DETAIL --}}
        <div class="glass-card rounded-2xl p-6 space-y-5">
            <h2 class="text-sm font-semibold text-slate-400 uppercase tracking-wider">Detail Event</h2>

            {{-- Nama Event --}}
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1.5" for="nama-event">Nama Event</label>
                <input id="nama-event" type="text"
                       class="input-style w-full rounded-xl px-4 py-2.5 text-sm"
                       placeholder="Contoh: Konser Musik 2026">
            </div>

            {{-- Kategori & Tipe --}}
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5" for="kategori">Kategori</label>
                    <select id="kategori" class="input-style w-full rounded-xl px-4 py-2.5 text-sm">
                        <option value="">Pilih Kategori</option>
                        <option>Musik</option>
                        <option>Seminar</option>
                        <option>Workshop</option>
                        <option>Olahraga</option>
                        <option>Seni & Budaya</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5" for="tipe-event">Tipe Event</label>
                    <select id="tipe-event" class="input-style w-full rounded-xl px-4 py-2.5 text-sm">
                        <option value="">Pilih Tipe</option>
                        <option>Offline</option>
                        <option>Online</option>
                        <option>Hybrid</option>
                    </select>
                </div>
            </div>

            {{-- Tanggal --}}
            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5" for="tanggal-mulai">Tanggal Mulai</label>
                    <input id="tanggal-mulai" type="date"
                           class="input-style w-full rounded-xl px-4 py-2.5 text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-1.5" for="tanggal-selesai">Tanggal Selesai</label>
                    <input id="tanggal-selesai" type="date"
                           class="input-style w-full rounded-xl px-4 py-2.5 text-sm">
                </div>
            </div>

            {{-- Lokasi --}}
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1.5" for="lokasi">Lokasi</label>
                <input id="lokasi" type="text"
                       class="input-style w-full rounded-xl px-4 py-2.5 text-sm"
                       placeholder="Bandung / Online / Jakarta">
            </div>

            {{-- Harga Tiket --}}
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1.5" for="harga">Harga Tiket</label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm font-medium">Rp</span>
                    <input id="harga" type="number" min="0"
                           class="input-style w-full rounded-xl pl-10 pr-4 py-2.5 text-sm"
                           placeholder="0">
                </div>
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-1.5" for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" rows="4"
                          class="input-style w-full rounded-xl px-4 py-2.5 text-sm resize-none"
                          placeholder="Ceritakan detail tentang event kamu..."></textarea>
            </div>

            {{-- BUTTON --}}
            <div class="flex justify-end pt-2">
                <button id="btn-lanjutkan"
                        class="btn-primary text-white font-semibold px-8 py-2.5 rounded-xl text-sm flex items-center gap-2">
                    Lanjutkan
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <script>
        // Preview banner image
        const bannerInput = document.getElementById('banner-input');
        const bannerPreview = document.getElementById('banner-preview');
        const uploadPlaceholder = document.getElementById('upload-placeholder');

        bannerInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = (e) => {
                bannerPreview.src = e.target.result;
                bannerPreview.classList.remove('hidden');
                uploadPlaceholder.classList.add('hidden');
            };
            reader.readAsDataURL(file);
        });

        // Drag & drop
        const uploadZone = document.getElementById('upload-zone');
        uploadZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadZone.style.borderColor = '#6366f1';
        });
        uploadZone.addEventListener('dragleave', () => {
            uploadZone.style.borderColor = '';
        });
        uploadZone.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadZone.style.borderColor = '';
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                const dt = new DataTransfer();
                dt.items.add(file);
                bannerInput.files = dt.files;
                bannerInput.dispatchEvent(new Event('change'));
            }
        });
    </script>

</body>
</html>