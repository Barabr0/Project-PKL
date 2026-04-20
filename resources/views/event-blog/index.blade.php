<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Event</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

{{-- HEADER --}}
@include('partials-image.navbar')

{{-- CONTENT --}}
<div class="max-w-7xl mx-auto px-4 py-8">

    {{-- TITLE --}}
    <h1 class="text-2xl font-bold mb-6">
        Info Event
    </h1>

    {{-- 🔥 POPULER --}}
    <div class="mb-10">
        <h2 class="text-lg font-semibold mb-4">Artikel Populer</h2>

        <div class="grid md:grid-cols-3 gap-6">

            {{-- BESAR --}}
            <div class="md:col-span-2 bg-white rounded-xl shadow">
                <img src="https://picsum.photos/800/400" class="w-full h-60 object-cover rounded-t-xl">
                <div class="p-4">
                    <h3 class="font-bold">Artikel Utama Event</h3>
                </div>
            </div>

            {{-- KECIL --}}
            <div class="space-y-3">
                @for ($i=1; $i<=3; $i++)
                <div class="flex gap-3 bg-white p-3 rounded-xl shadow">
                    <img src="https://picsum.photos/200/150?random={{$i}}" class="w-20 h-20 rounded object-cover">
                    <p class="text-sm font-medium">Event {{$i}}</p>
                </div>
                @endfor
            </div>

        </div>
    </div>

    {{-- 🟣 PILIHAN --}}
    <div class="mb-10">
        <h2 class="text-lg font-semibold mb-4">Artikel Pilihan</h2>

        <div class="grid md:grid-cols-3 gap-6">
            @for ($i=1; $i<=6; $i++)
            <div class="bg-white rounded-xl shadow">
                <img src="https://picsum.photos/400/300?random={{$i}}" class="h-40 w-full object-cover rounded-t-xl">
                <div class="p-3">
                    <p class="text-sm font-semibold">Event {{$i}}</p>
                </div>
            </div>
            @endfor
        </div>
    </div>

    {{-- ⚫ LAINNYA --}}
    <div>
        <h2 class="text-lg font-semibold mb-4">Artikel Lainnya</h2>

        <div class="space-y-4">
            @for ($i=1; $i<=5; $i++)
            <div class="flex gap-4 bg-white p-3 rounded-xl shadow">
                <img src="https://picsum.photos/200/150?random={{$i}}" class="w-28 h-20 rounded object-cover">
                <p class="text-sm font-semibold">Event {{$i}}</p>
            </div>
            @endfor
        </div>
    </div>

</div>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>