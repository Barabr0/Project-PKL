<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen Blog</title>

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

    <h2 class="text-xl font-bold mb-4">Screen Populer</h2>

    <div class="grid md:grid-cols-3 gap-6">

        {{-- 🔥 CARD BESAR --}}
        <div class="md:col-span-2 bg-white rounded-xl shadow overflow-hidden">
            <a href="{{ $main ? route('blog.show', $main->id) : '#' }}">
                <img src="{{ $main && $main->gambar ? (\Illuminate\Support\Str::startsWith($main->gambar, 'http') ? $main->gambar : asset('storage/' . $main->gambar)) : 'https://picsum.photos/800/400?random=1' }}" 
                    class="w-full h-60 object-cover hover:scale-105 transition duration-300">
            </a>

            <div class="p-5">
                <h3 class="text-lg font-bold mb-2">
                    <a href="{{ $main ? route('blog.show', $main->id) : '#' }}" class="hover:text-blue-600">
                        {{ $main ? $main->judul : 'Artikel Utama Screen' }}
                    </a>
                </h3>
                <p class="text-sm text-gray-500">
                    {{ $main ? $main->created_at->format('d M Y') : '20 Apr 2026' }} • Admin
                </p>
            </div>

        </div>

        {{-- ⚫ LIST KECIL --}}
        <div class="space-y-4">

            @foreach ($contents->slice(1, 4) as $item)
            <div class="flex gap-3 bg-white p-3 rounded-xl shadow overflow-hidden">

                <a href="{{ route('blog.show', $item->id) }}" class="flex-shrink-0">
                    <img src="{{ $item->gambar ? (\Illuminate\Support\Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/' . $item->gambar)) : 'https://picsum.photos/200/150?random=' . $loop->iteration }}" 
                        class="w-20 h-20 object-cover rounded hover:opacity-80 transition">
                </a>

                <div>
                    <h3 class="text-sm font-semibold hover:text-blue-600">
                        <a href="{{ route('blog.show', $item->id) }}">
                            {{ $item->judul }}
                        </a>
                    </h3>
                    <p class="text-xs text-gray-500">
                        {{ $item->created_at->format('d M Y') }}
                    </p>
                </div>

            </div>
            @endforeach

        </div>

    </div>

</section>

{{-- 🟣 ARTIKEL PILIHAN --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Screen Pilihan</h2>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach ($contents->shuffle()->take(6) as $item)
        <div class="bg-white rounded-xl shadow overflow-hidden">

            <a href="{{ route('blog.show', $item->id) }}">
                <img src="{{ $item->gambar ? (\Illuminate\Support\Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/' . $item->gambar)) : 'https://picsum.photos/400/300?random=' . $loop->iteration + 20 }}" 
                    class="w-full h-40 object-cover hover:scale-105 transition duration-300">
            </a>

            <div class="p-4">
                <h3 class="text-sm font-semibold mb-2 hover:text-blue-600">
                    <a href="{{ route('blog.show', $item->id) }}">
                        {{ $item->judul }}
                    </a>
                </h3>
                <p class="text-xs text-gray-500">
                    {{ $item->created_at->format('d M Y') }} • Admin
                </p>
            </div>

        </div>
        @endforeach

    </div>

</section>

{{-- ⚫ ARTIKEL LAINNYA --}}
<section class="max-w-7xl mx-auto px-4 py-6">

    <h2 class="text-xl font-bold mb-4">Screen Lainnya</h2>

    <div class="space-y-4">

        @foreach ($contents as $item)
        <div class="flex gap-4 bg-white p-4 rounded-xl shadow overflow-hidden">

            <a href="{{ route('blog.show', $item->id) }}" class="flex-shrink-0">
                <img src="{{ $item->gambar ? (\Illuminate\Support\Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/' . $item->gambar)) : 'https://picsum.photos/200/150?random=' . $loop->iteration + 40 }}" 
                    class="w-32 h-24 object-cover rounded-lg hover:opacity-80 transition">
            </a>

            <div>
                <h3 class="text-sm font-semibold hover:text-blue-600">
                    <a href="{{ route('blog.show', $item->id) }}">
                        {{ $item->judul }}
                    </a>
                </h3>
                <p class="text-xs text-gray-500 mt-1">
                    {{ $item->created_at->format('d M Y') }} • Admin
                </p>
            </div>

        </div>
        @endforeach

    </div>

</section>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

</body>
</html>
