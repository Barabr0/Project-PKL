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
@if($imageNavbar)
    @include('partials-image.navbar')
@else
    @include('partials.navbar')
@endif

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


@include('partials.footer')

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