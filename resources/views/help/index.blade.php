<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan</title>

    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100">

{{-- HEADER --}}
@include('partials-image.navbar')

{{-- 🔵 HERO KECIL (SEARCH) --}}
<div class="bg-blue-900 text-white py-10">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-2xl font-bold mb-4">Pusat Bantuan</h1>
        <input type="text" placeholder="Cari bantuan..."
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none">
    </div>
</div>

{{-- 🟣 KATEGORI --}}
<div class="max-w-7xl mx-auto px-4 py-10">

    <h2 class="text-lg font-bold mb-6">Kategori Bantuan</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            🎫
            <p class="mt-2 font-semibold">Tiket</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            💳
            <p class="mt-2 font-semibold">Pembayaran</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            👤
            <p class="mt-2 font-semibold">Akun</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            📩
            <p class="mt-2 font-semibold">Kontak</p>
        </div>

    </div>

</div>

{{-- ⚫ FAQ --}}
<div class="max-w-4xl mx-auto px-4 pb-12">

    <h2 class="text-lg font-bold mb-6">Pertanyaan Umum</h2>

    <div class="space-y-4">

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                Cara beli tiket?
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                Kamu bisa membeli tiket melalui halaman event, pilih tiket, lalu lakukan pembayaran.
            </p>
        </div>

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                Metode pembayaran apa saja?
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                Kami menyediakan transfer bank, e-wallet, dan kartu kredit.
            </p>
        </div>

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                Tiket tidak masuk?
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                Cek email spam atau hubungi support kami.
            </p>
        </div>

    </div>

</div>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>