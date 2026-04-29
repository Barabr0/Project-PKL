<x-app-layout :imageNavbar="true">


{{-- 🔵 ARTIKEL POPULER --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Event Populer</h2>

    <div class="grid md:grid-cols-3 gap-6">

        {{-- 🔥 CARD BESAR --}}
        <div class="md:col-span-2 bg-white rounded-xl shadow overflow-hidden">
            <a href="{{ $main ? route('blog.show', $main->id) : '#' }}">
                <img src="{{ asset('storage/images/test.jpg') }}" 
                    class="w-full h-60 object-cover hover:scale-105 transition duration-300">
            </a>

            <div class="p-5">
                <h3 class="text-lg font-bold mb-2">
                    <a href="{{ $main ? route('blog.show', $main->id) : '#' }}" class="hover:text-blue-600">
                        {{ $main ? $main->nama_event : 'Artikel Utama Event' }}
                    </a>
                </h3>
                <p class="text-sm text-gray-500">
                    {{ $main ? \Carbon\Carbon::parse($main->tanggal)->format('d M Y') : '20 Apr 2026' }} • Admin
                </p>
            </div>

        </div>

        {{-- ⚫ LIST KECIL --}}
        <div class="space-y-4">

            @foreach ($contents->slice(1, 4) as $item)
            <div class="flex gap-3 bg-white p-3 rounded-xl shadow overflow-hidden">

                <a href="{{ route('blog.show', $item->id) }}" class="flex-shrink-0">
                    <img src="{{ asset('storage/images/test.jpg') }}" 
                        class="w-20 h-20 object-cover rounded hover:opacity-80 transition">
                </a>

                <div>
                    <h3 class="text-sm font-semibold hover:text-blue-600">
                        <a href="{{ route('blog.show', $item->id) }}">
                            {{ $item->nama_event }}
                        </a>
                    </h3>
                    <p class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                    </p>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</section>

{{-- 🟣 ARTIKEL PILIHAN --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Event Pilihan</h2>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach ($contents->shuffle()->take(6) as $item)
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <a href="{{ route('blog.show', $item->id) }}">
                <img src="{{ asset('storage/images/test.jpg') }}" 
                    class="w-full h-40 object-cover hover:scale-105 transition duration-300">
            </a>

            <div class="p-4">
                <h3 class="text-sm font-semibold mb-2 hover:text-blue-600">
                    <a href="{{ route('blog.show', $item->id) }}">
                        {{ $item->nama_event }}
                    </a>
                </h3>
                <p class="text-xs text-gray-500">
                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }} • Admin
                </p>
            </div>

        </div>
        @endforeach

    </div>

</section>

{{-- ⚫ ARTIKEL LAINNYA --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Event Lainnya</h2>

    <div class="space-y-4">

        @foreach ($contents as $item)
        <div class="flex gap-4 bg-white p-4 rounded-xl shadow overflow-hidden">

            <a href="{{ route('blog.show', $item->id) }}" class="flex-shrink-0">
                <img src="{{ asset('storage/images/test.jpg') }}" 
                    class="w-32 h-24 object-cover rounded-lg hover:opacity-80 transition">
            </a>

            <div>
                <h3 class="text-sm font-semibold hover:text-blue-600">
                    <a href="{{ route('blog.show', $item->id) }}">
                        {{ $item->nama_event }}
                    </a>
                </h3>
                <p class="text-xs text-gray-500 mt-1">
                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }} • Admin
                </p>
            </div>

        </div>
        @endforeach

    </div>

</section>

{{-- FOOTER --}}
</x-app-layout>

