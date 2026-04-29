<x-app-layout>


{{-- 🔥 HERO --}}
<section class="bg-blue-900 text-white py-16 text-center">
    <h1 class="text-3xl md:text-4xl font-bold mb-3">
        {{ __('Biaya & Komisi') }}
    </h1>
    <p class="text-blue-200">
        {{ __('Transparan, tanpa biaya tersembunyi') }}
    </p>
</section>

{{-- 💰 PRICING --}}
<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="grid md:grid-cols-2 gap-8">

        {{-- KOMISI --}}
        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-xl font-bold mb-4">
                {{ __('Biaya Penjualan Tiket') }}
            </h2>

            <p class="text-gray-600 mb-6">
                {{ __('Komisi dikenakan dari total penjualan tiket event kamu.') }}
            </p>

            <div class="text-5xl font-bold text-blue-600 mb-4">
                3.5%
            </div>

            <ul class="text-sm text-gray-500 space-y-2">
                <li>✔ {{ __('Berlaku untuk semua metode pembayaran') }}</li>
                <li>✔ {{ __('Tanpa biaya setup') }}</li>
                <li>✔ {{ __('Dipotong dari penjualan') }}</li>
            </ul>

        </div>

        {{-- MODEL --}}
        <div class="bg-white rounded-2xl shadow p-8">

            <h2 class="text-xl font-bold mb-4">
                {{ __('Model Pembayaran') }}
            </h2>

            <div class="space-y-4">

                <div class="p-4 rounded-lg bg-gray-100">
                    <h3 class="font-semibold">
                        {{ __('Dibayar Creator') }}
                    </h3>
                    <p class="text-sm text-gray-500">
                        {{ __('Komisi dipotong dari pendapatan event kamu') }}
                    </p>
                </div>

                <div class="p-4 rounded-lg bg-gray-100">
                    <h3 class="font-semibold">
                        {{ __('Dibayar Pembeli') }}
                    </h3>
                    <p class="text-sm text-gray-500">
                        {{ __('Komisi ditambahkan ke harga tiket') }}
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
            {{ __('Simulasi Pendapatan') }}
        </h2>

        <div class="grid md:grid-cols-3 gap-6 text-center">

            <div>
                <p class="text-gray-500 text-sm">{{ __('Harga Tiket') }}</p>
                <h3 class="text-xl font-bold">Rp100.000</h3>
            </div>

            <div>
                <p class="text-gray-500 text-sm">{{ __('Terjual') }}</p>
                <h3 class="text-xl font-bold">100 {{ __('Tiket') }}</h3>
            </div>

            <div>
                <p class="text-gray-500 text-sm">{{ __('Total') }}</p>
                <h3 class="text-xl font-bold">Rp10.000.000</h3>
            </div>

        </div>

        <div class="mt-8 text-center">

            <p class="text-gray-500 text-sm">{{ __('Biaya') }} (3.5%)</p>
            <h3 class="text-2xl font-bold text-red-500">
                - Rp350.000
            </h3>

            <p class="mt-4 text-gray-500 text-sm">{{ __('Pendapatan Bersih') }}</p>
            <h2 class="text-3xl font-bold text-green-600">
                Rp9.650.000
            </h2>

        </div>

    </div>

</section>

{{-- 🚀 CTA --}}
<section class="bg-gray-100 py-16 text-center">

    <h2 class="text-2xl font-bold mb-4">
        {{ __('Siap Mulai Event Kamu?') }}
    </h2>

    <a href="/event/create"
       class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
        {{ __('Buat Event Sekarang') }}
    </a>

</section>

</x-app-layout>