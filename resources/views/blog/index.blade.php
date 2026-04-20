<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @vite('resources/css/app.css')

    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="bg-gray-100 antialiased">

{{-- NAVBAR --}}
@include('partials-image.navbar')

{{-- 🔵 ARTIKEL POPULER --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Artikel Populer</h2>

    <div class="grid md:grid-cols-3 gap-6">

        {{-- 🔥 CARD BESAR --}}
        <div class="md:col-span-2 bg-white rounded-xl shadow">

            <img src="https://picsum.photos/800/400?random=1" 
                class="w-full h-60 object-cover rounded-t-xl">

            <div class="p-5">
                <h3 class="text-lg font-bold mb-2">
                    Artikel Utama Populer
                </h3>
                <p class="text-sm text-gray-500">
                    20 Apr 2026 • Admin
                </p>
            </div>

        </div>

        {{-- ⚫ LIST KECIL --}}
        <div class="space-y-4">

            @for ($i = 1; $i <= 4; $i++)
            <div class="flex gap-3 bg-white p-3 rounded-xl shadow">

                <img src="https://picsum.photos/200/150?random={{$i+10}}" 
                    class="w-20 h-20 object-cover rounded">

                <div>
                    <h3 class="text-sm font-semibold">
                        Artikel Populer {{$i}}
                    </h3>
                    <p class="text-xs text-gray-500">
                        20 Apr 2026
                    </p>
                </div>

            </div>
            @endfor

        </div>

    </div>

</section>

{{-- 🟣 ARTIKEL PILIHAN --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Artikel Pilihan</h2>

    <div class="grid md:grid-cols-3 gap-6">

        @for ($i = 1; $i <= 6; $i++)
        <div class="bg-white rounded-xl shadow">

            <img src="https://picsum.photos/400/300?random={{$i+10}}" 
                class="w-full h-40 object-cover rounded-t-xl">

            <div class="p-4">
                <h3 class="text-sm font-semibold mb-2">
                    Artikel Pilihan {{$i}}
                </h3>
                <p class="text-xs text-gray-500">
                    20 Apr 2026 • Admin
                </p>
            </div>

        </div>
        @endfor

    </div>

</section>

{{-- ⚫ ARTIKEL LAINNYA --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Artikel Lainnya</h2>

    <div class="space-y-4">

        @for ($i = 1; $i <= 6; $i++)
        <div class="flex gap-4 bg-white p-4 rounded-xl shadow">

            <img src="https://picsum.photos/200/150?random={{$i+20}}" 
                class="w-32 h-24 object-cover rounded-lg">

            <div>
                <h3 class="text-sm font-semibold">
                    Artikel Lain {{$i}}
                </h3>
                <p class="text-xs text-gray-500 mt-1">
                    20 Apr 2026 • Admin
                </p>
            </div>

        </div>
        @endfor

    </div>

</section>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

</body>
</html>