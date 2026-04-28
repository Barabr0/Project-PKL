<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creator</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

@include('partials.navbar')

{{-- 🔥 HERO PARALLAX --}}
<section class="max-w-7xl mx-auto px-6 py-10">

    <div 
    class="relative rounded-2xl overflow-hidden shadow-lg h-[70vh] md:h-[80vh]"
    onmousemove="moveBg(event, this)"
    onmouseleave="resetBg(this)"
>

        {{-- 🖼 BACKGROUND --}}
        <div class="absolute inset-0">
            <img 
                src="{{ $banner ?? asset('storage/images/test.jpg') }}"
                class="w-full h-full object-cover transition-transform duration-300"
            >
            <div class="absolute inset-0 bg-black/50"></div>
        </div>

        {{-- 🔥 CONTENT --}}
        <div class="relative p-10 md:p-16 text-white flex flex-col justify-between h-full">

            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                Jual Tiket Event Lebih Mudah & Cepat
            </h1>

            <p class="text-gray-200 mb-6 max-w-xl">
                Platform all-in-one untuk membuat, mengelola, dan menjual tiket event kamu.
            </p>

            <a href="/event/create"
               class="bg-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-500">
                Mulai Sekarang
            </a>

            {{-- CARD --}}
            <div class="grid md:grid-cols-2 gap-4 mt-10">

                <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl">
                    <h3 class="font-bold">Kelola Event</h3>
                    <p class="text-sm text-gray-200">Buat & atur event</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md p-4 rounded-xl">
                    <h3 class="font-bold">Jual Tiket</h3>
                    <p class="text-sm text-gray-200">Penjualan otomatis</p>
                </div>

            </div>

        </div>

    </div>

</section>

{{-- 🌈 CARD BERWARNA --}}
<section class="max-w-7xl mx-auto px-6 py-10">

    <h2 class="text-2xl font-bold mb-8">
        Mulai Jadi Creator
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        <div class="rounded-xl p-6 text-white shadow-lg bg-gradient-to-br from-blue-500 to-blue-700 hover:scale-105 transition">
            <h3 class="font-bold text-lg mb-2">Panduan Creator</h3>
            <p class="text-sm mb-4">
                Pelajari cara membuat event dan mengelola tiket dengan mudah.
            </p>
            <a href="#" class="text-sm font-semibold underline">Lihat Panduan →</a>
        </div>

        <div class="rounded-xl p-6 text-white shadow-lg bg-gradient-to-br from-purple-500 to-indigo-600 hover:scale-105 transition">
            <h3 class="font-bold text-lg mb-2">Fitur Lengkap</h3>
            <p class="text-sm mb-4">
                Gunakan berbagai fitur untuk meningkatkan penjualan event kamu.
            </p>
            <a href="#" class="text-sm font-semibold underline">Lihat Fitur →</a>
        </div>

        <div class="rounded-xl p-6 text-white shadow-lg bg-gradient-to-br from-orange-400 to-red-500 hover:scale-105 transition">
            <h3 class="font-bold text-lg mb-2">Butuh Bantuan?</h3>
            <p class="text-sm mb-4">
                Tim kami siap membantu kamu kapan saja.
            </p>
            <a href="#" class="text-sm font-semibold underline">Hubungi Kami →</a>
        </div>

    </div>

</section>

{{-- 💡 FITUR --}}
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-2xl font-bold mb-10">Kenapa Pakai Loket?</h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2">Kelola Event</h3>
                <p class="text-sm text-gray-500">
                    Buat event dengan mudah dan cepat
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2">Penjualan Tiket</h3>
                <p class="text-sm text-gray-500">
                    Sistem penjualan otomatis & aman
                </p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="font-bold mb-2">Dashboard Analitik</h3>
                <p class="text-sm text-gray-500">
                    Pantau performa event realtime
                </p>
            </div>

        </div>

    </div>
</section>

{{-- ⚙️ CARA KERJA --}}
<section class="max-w-7xl mx-auto px-6 py-10">

    <h2 class="text-2xl font-bold text-center mb-12">Cara Mulai</h2>

    <div class="grid md:grid-cols-3 gap-8 text-center">

        <div>
            <div class="text-3xl mb-2">1️⃣</div>
            <h3 class="font-bold">Buat Event</h3>
            <p class="text-sm text-gray-500">Isi detail event kamu</p>
        </div>

        <div>
            <div class="text-3xl mb-2">2️⃣</div>
            <h3 class="font-bold">Publikasikan</h3>
            <p class="text-sm text-gray-500">Event langsung online</p>
        </div>

        <div>
            <div class="text-3xl mb-2">3️⃣</div>
            <h3 class="font-bold">Jual Tiket</h3>
            <p class="text-sm text-gray-500">Mulai dapat pembeli</p>
        </div>

    </div>

</section>

{{-- 📊 STATISTIK --}}
<section class="bg-blue-900 text-white py-16 text-center">

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">

        <div>
            <h2 class="text-3xl font-bold">1M+</h2>
            <p>User Aktif</p>
        </div>

        <div>
            <h2 class="text-3xl font-bold">50K+</h2>
            <p>Event Dibuat</p>
        </div>

        <div>
            <h2 class="text-3xl font-bold">100+</h2>
            <p>Partner</p>
        </div>

    </div>

</section>

{{-- 🚀 CTA --}}
<section class="bg-gray-100 py-16 text-center">

    <h2 class="text-2xl font-bold mb-4">
        Siap Mulai Event Kamu?
    </h2>

    <a href="/event/create"
       class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
        Buat Event Sekarang
    </a>

</section>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

{{-- 🔥 SCRIPT PARALLAX --}}
<script>
function moveBg(e, container) {
    const img = container.querySelector("img");
    const rect = container.getBoundingClientRect();

    const x = (e.clientX - rect.left) / rect.width;
    const y = (e.clientY - rect.top) / rect.height;

    const moveX = (x - 0.5) * 20;
    const moveY = (y - 0.5) * 20;

    img.style.transform = `scale(1.1) translate(${moveX}px, ${moveY}px)`;
}

function resetBg(container) {
    const img = container.querySelector("img");
    img.style.transform = "scale(1.1) translate(0, 0)";
}
</script>

</body>
</html>