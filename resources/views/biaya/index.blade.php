<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biaya & Komisi</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

@include('partials.navbar')

{{-- 🔥 HERO --}}
<section class="bg-blue-900 text-white py-16 text-center">
    <h1 class="text-3xl md:text-4xl font-bold mb-3">
        Biaya & Komisi
    </h1>
    <p class="text-blue-200">
        Transparan, tanpa biaya tersembunyi
    </p>
</section>

{{-- 💰 PRICING --}}
<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-2 gap-8">

        {{-- KOMISI --}}
        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-xl font-bold mb-4">
                Biaya Penjualan Tiket
            </h2>

            <p class="text-gray-600 mb-6">
                Komisi dikenakan dari total penjualan tiket event kamu.
            </p>

            <div class="text-5xl font-bold text-blue-600 mb-4">
                3.5%
            </div>

            <ul class="text-sm text-gray-500 space-y-2">
                <li>✔ Berlaku untuk semua metode pembayaran</li>
                <li>✔ Tanpa biaya setup</li>
                <li>✔ Dipotong dari penjualan</li>
            </ul>

        </div>

        {{-- MODEL --}}
        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-xl font-bold mb-4">
                Model Pembayaran
            </h2>

            <div class="space-y-4">

                <div class="p-4 rounded-lg bg-gray-100">
                    <h3 class="font-semibold">
                        Dibayar Creator
                    </h3>
                    <p class="text-sm text-gray-500">
                        Komisi dipotong dari pendapatan event kamu
                    </p>
                </div>

                <div class="p-4 rounded-lg bg-gray-100">
                    <h3 class="font-semibold">
                        Dibayar Pembeli
                    </h3>
                    <p class="text-sm text-gray-500">
                        Komisi ditambahkan ke harga tiket
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

{{-- 📊 SIMULASI --}}
<section class="max-w-7xl mx-auto px-6 pb-16">

    <div class="bg-white rounded-2xl shadow p-8">

        <h2 class="text-xl font-bold mb-6 text-center">
            Simulasi Pendapatan
        </h2>

        <div class="grid md:grid-cols-3 gap-6 text-center">

            <div>
                <p class="text-gray-500 text-sm">Harga Tiket</p>
                <h3 class="text-xl font-bold">Rp100.000</h3>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Terjual</p>
                <h3 class="text-xl font-bold">100 Tiket</h3>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Total</p>
                <h3 class="text-xl font-bold">Rp10.000.000</h3>
            </div>

        </div>

        <div class="mt-8 text-center">

            <p class="text-gray-500 text-sm">Biaya (3.5%)</p>
            <h3 class="text-2xl font-bold text-red-500">
                - Rp350.000
            </h3>

            <p class="mt-4 text-gray-500 text-sm">Pendapatan Bersih</p>
            <h2 class="text-3xl font-bold text-green-600">
                Rp9.650.000
            </h2>

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

</body>
</html>