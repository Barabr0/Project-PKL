<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen Detail</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">

@include('partials-screen.navbar')

{{-- 🔥 HERO (BACKGROUND + POSTER) --}}
<div class="relative">

    <div class="absolute inset-0">
        <img src="{{ asset('storage/images/test.jpg') }}"
            class="w-full h-full object-cover blur-md opacity-40">
    </div>

    {{-- CONTENT --}}
    <div class="relative max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-6">

        {{-- POSTER --}}
        <div>
            <img src="{{ asset('storage/images/test.jpg') }}"
                class="rounded-xl shadow-lg">
        </div>

        {{-- INFO --}}
        <div class="md:col-span-2 flex flex-col justify-center">

            <h1 class="text-3xl font-bold mb-4">
                Danur: The Last Chapter
            </h1>

            <div class="flex gap-4 text-sm text-gray-300 mb-4">
                <span>Horror</span>
                <span>•</span>
                <span>98 menit</span>
                <span>•</span>
                <span>R13+</span>
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg font-semibold w-fit">
                Beli Tiket
            </button>

        </div>

    </div>

</div>

{{-- ⚫ SINOPSIS --}}
<section class="max-w-5xl mx-auto px-4 py-10">

    <h2 class="text-xl font-bold mb-4">Sinopsis</h2>

    <p class="text-gray-300 leading-relaxed">
        Setelah bertahun-tahun hidup normal, Risa kembali menghadapi kejadian
        mistis yang mengancam keluarganya. Ia harus kembali terhubung dengan
        dunia gaib untuk menyelamatkan orang yang ia cintai.
    </p>

</section>

{{-- 🟣 CAST --}}
<section class="max-w-5xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Cast</h2>

    <div class="flex gap-4 overflow-x-auto">

        @for ($i = 1; $i <= 6; $i++)
        <div class="min-w-[120px] text-center">

            <img src="{{ asset('storage/images/test.jpg') }}"
                class="w-24 h-24 rounded-full object-cover mx-auto">

            <p class="text-sm mt-2">Actor {{$i}}</p>

        </div>
        @endfor

    </div>

</section>

{{-- 🔵 JADWAL / CTA --}}
<section class="max-w-5xl mx-auto px-4 py-10">

    <div class="bg-gray-900 p-6 rounded-xl">

        <h2 class="text-lg font-bold mb-4">Jadwal Tayang</h2>

        <div class="flex gap-3 flex-wrap">

            @for ($i = 1; $i <= 5; $i++)
            <button class="px-4 py-2 bg-gray-800 rounded hover:bg-blue-600">
                19:0{{$i}}
            </button>
            @endfor

        </div>

    </div>

</section>

{{-- FOOTER --}}
<footer class="bg-gray-900 text-center py-6 mt-10 text-gray-400">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>