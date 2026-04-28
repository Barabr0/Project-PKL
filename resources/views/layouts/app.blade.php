<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp Event</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @vite('resources/css/app.css')

    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden; /* Mencegah geser kanan di seluruh device */
        }
        .swiper.mySwiper {
            overflow: visible;
        }
        .swiper.heroSwiper {
            overflow: hidden;
            border-radius: 1rem;
        }
        .swiper-pagination-bullet { background: white; opacity: 0.7; }
        .swiper-pagination-bullet-active { background: white; opacity: 1; }
    </style>
</head>

<body class="bg-gray-100 antialiased">

{{-- NAVBAR --}}
@include('partials.navbar')

{{-- CONTENT --}}
<main>
    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 mt-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        </div>
    @endif
    {{ $slot }}
</main>


<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
        
        <!-- Brand -->
        <div class="col-span-2">
            <h2 class="text-white text-xl font-bold mb-4">NamaWeb</h2>
            <p class="text-sm">
                Platform event dan ticketing terbaik untuk pengalaman kamu.
            </p>
        </div>

        <!-- Kolom 1 -->
        <div>
            <h3 class="text-white font-semibold mb-3">Produk</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">Buat Event</a></li>
                <li><a href="#" class="hover:text-white">Cari Event</a></li>
                <li><a href="#" class="hover:text-white">Promo</a></li>
            </ul>
        </div>

        <!-- Kolom 2 -->
        <div>
            <h3 class="text-white font-semibold mb-3">Perusahaan</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-white">Karir</a></li>
                <li><a href="#" class="hover:text-white">Blog</a></li>
            </ul>
        </div>

        <!-- Kolom 3 -->
        <div>
            <h3 class="text-white font-semibold mb-3">Bantuan</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">FAQ</a></li>
                <li><a href="#" class="hover:text-white">Kontak</a></li>
                <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
            </ul>
        </div>

        <!-- Kolom 4 -->
        <div>
            <h3 class="text-white font-semibold mb-3">Ikuti Kami</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">Instagram</a></li>
                <li><a href="#" class="hover:text-white">Twitter</a></li>
                <li><a href="#" class="hover:text-white">Facebook</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 text-center py-4 text-sm">
        © {{ date('Y') }} NamaWeb. All rights reserved. 
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', () => {

    // HERO SWIPER (TETAP)
    new Swiper(".heroSwiper", {
        loop: true,
        autoplay: { delay: 3000 },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".hero-next",
            prevEl: ".hero-prev"
        }
    });

    // SCREEN SWIPER (TETAP)
    new Swiper(".screenSwiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // EVENT KATEGORI SWIPER (FIX DUPLIKAT - HANYA 1)
    new Swiper(".eventKategoriSwiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
        navigation: {
            nextEl: ".eventKategori-next",
            prevEl: ".eventKategori-prev",
        },
    });

    // KATEGORI SWIPER (HANYA 1 INISIALISASI)
    new Swiper(".kategoriSwiper", {
        slidesPerView: "auto",
        spaceBetween: 10,
    });

    // POPULER / MY SWIPER (AMAN UNTUK ALPINE + FILTER)
    document.querySelectorAll('.mySwiper').forEach((el) => {
        new Swiper(el, {
            slidesPerView: "auto",
            spaceBetween: 16,
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev'),
            },
        });
    });

});
</script>
</body>
</html>