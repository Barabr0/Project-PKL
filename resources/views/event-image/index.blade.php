<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Detail</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

@include('partials.navbar')

<div class="max-w-7xl mx-auto px-4 py-8">

    {{-- 🔵 IMAGE + SIDEBAR --}}
    <div class="grid md:grid-cols-3 gap-6">

        {{-- IMAGE --}}
        <div class="md:col-span-2">
            <img src="https://picsum.photos/1000/500" 
                class="w-full h-64 md:h-96 object-cover rounded-xl shadow">
        </div>

        {{-- 🟣 SIDEBAR INFO --}}
       <div class="bg-white p-5 rounded-xl shadow h-fit sticky top-20">

    <h1 class="text-lg font-bold mb-3">
        Seringai Live in Concert
    </h1>

    <p class="text-sm text-gray-500 mb-2">
        📅 20 April 2026
    </p>

    <p class="text-sm text-gray-500 mb-4">
        📍 Jakarta
    </p>

    <div class="mb-4">
        <p class="text-xl font-bold text-blue-600">
            Rp 150.000
        </p>
    </div>

    <button class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">
        Beli Tiket
    </button>

</div>

    </div>

    {{-- ⚫ DESKRIPSI --}}
    <div class="mt-10 bg-white p-6 rounded-xl shadow">

        <h2 class="text-lg font-bold mb-4">
            Deskripsi Event
        </h2>

        <p class="text-gray-700 leading-relaxed text-justify">
            Konser Seringai menghadirkan pengalaman musik metal yang penuh energi.
            Nikmati penampilan live yang spektakuler dengan tata panggung terbaik.
        </p>

    </div>

    {{-- 🔥 DETAIL TAMBAHAN --}}
    <div class="mt-6 bg-white p-6 rounded-xl shadow">

        <h2 class="text-lg font-bold mb-4">
            Detail Event
        </h2>

        <ul class="space-y-2 text-sm text-gray-600">
            <li>🎤 Artis: Seringai</li>
            <li>⏰ Waktu: 19:00 WIB</li>
            <li>📍 Venue: Jakarta Convention Center</li>
        </ul>

    </div>

</div>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>