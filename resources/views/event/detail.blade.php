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
            <img src="{{ asset('storage/images/test.jpg') }}" 
                class="w-full h-64 md:h-96 object-cover rounded-xl shadow">
        </div>

        {{-- 🟣 SIDEBAR INFO --}}
       <div class="bg-white p-5 rounded-xl shadow h-fit sticky top-20">

    <h1 class="text-lg font-bold mb-3">
        {{ $event->nama_event ?? 'Nama Event' }}
    </h1>

    <p class="text-sm text-gray-500 mb-2">
        📅 {{ $event->tanggal ? \Carbon\Carbon::parse($event->tanggal)->format('d F Y') : '20 April 2026' }}
    </p>

    <p class="text-sm text-gray-500 mb-4">
        📍 {{ $event->lokasi ?? 'Jakarta' }}
    </p>

    <div class="mb-4">
        <p class="text-xl font-bold text-blue-600">
            Rp {{ $event->harga ? number_format($event->harga, 0, ',', '.') : '150.000' }}
        </p>
    <a href="{{ route('event.pay', $event->id) }}"
   class="inline-block w-full text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
    Beli Tiket
</a>

</div>

    </div>

    {{-- ⚫ DESKRIPSI --}}
    <div class="mt-10 bg-white p-6 rounded-xl shadow">

        <h2 class="text-lg font-bold mb-4">
            Deskripsi Event
        </h2>

        <p class="text-gray-700 leading-relaxed text-justify">
            {{ $event->deskripsi ?? 'Konser Seringai menghadirkan pengalaman musik metal yang penuh energi. Nikmati penampilan live yang spektakuler dengan tata panggung terbaik.' }}
        </p>

    </div>

    {{-- 🔥 DETAIL TAMBAHAN --}}
    <div class="mt-6 bg-white p-6 rounded-xl shadow">

        <h2 class="text-lg font-bold mb-4">
            Detail Event
        </h2>

        <ul class="space-y-2 text-sm text-gray-600">
            <li>🎤 Artis: {{ $event->nama_event ?? 'Seringai' }}</li>
            <li>⏰ Waktu: 19:00 WIB</li>
            <li>📍 Venue: {{ $event->lokasi ?? 'Jakarta Convention Center' }}</li>
        </ul>

    </div>

</div>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>