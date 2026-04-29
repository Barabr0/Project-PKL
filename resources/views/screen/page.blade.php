<x-app-layout>

@php
$poster = !empty($detail['poster_path']) 
    ? 'https://image.tmdb.org/t/p/w500' . $detail['poster_path'] 
    : 'https://via.placeholder.com/400x600?text=No+Image';

$backdrop = !empty($detail['backdrop_path']) 
    ? 'https://image.tmdb.org/t/p/w1280' . $detail['backdrop_path'] 
    : $poster;
@endphp

<div class="relative bg-black text-white">

    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ $backdrop }}"
            class="w-full h-full object-cover blur-xl opacity-30 scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-3 gap-8 items-center">

        <div class="flex justify-center md:justify-end">
            <img src="{{ $poster }}"
                class="rounded-xl shadow-2xl border border-white/20 w-64 md:w-80 object-cover">
        </div>

        <div class="md:col-span-2">

            <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
                {{ $detail['title'] ?? 'Tidak ada judul' }}
            </h1>

            <div class="flex items-center gap-2 mb-3">
                <span class="bg-yellow-400 text-black px-2 py-1 rounded text-sm font-bold">
                    ⭐ {{ number_format($detail['vote_average'] ?? 0, 1) }}
                </span>
                <span class="text-gray-400 text-sm">
                    ({{ $detail['vote_count'] ?? 0 }} votes)
                </span>
            </div>

            <div class="flex gap-4 text-sm text-gray-300 mb-4">
                <span>{{ $detail['genres'][0]['name'] ?? 'Genre' }}</span>
                <span>•</span>
                <span>{{ $detail['runtime'] ?? '-' }} menit</span>
                <span>•</span>
                <span>{{ isset($detail['release_date']) ? \Carbon\Carbon::parse($detail['release_date'])->format('Y') : '-' }}</span>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('screen.pay', $detail['id'] ?? '') }}"
                    class="bg-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">
                    Beli Tiket
                </a>

                <a href="https://www.themoviedb.org/movie/{{ $detail['id'] ?? '' }}"
                    class="bg-gray-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-600">
                    Lihat Detail
                </a>
            </div>

        </div>

    </div>
</div>

<section class="max-w-5xl mx-auto px-4 py-10">
    <h2 class="text-xl font-bold mb-4">Sinopsis</h2>
    <p class="text-gray-300 leading-relaxed text-lg">
        {{ $detail['overview'] ?: 'Sinopsis belum tersedia.' }}
    </p>
</section>

<section class="max-w-5xl mx-auto px-4 py-6">
    <h2 class="text-xl font-bold mb-4">Cast</h2>

    <div class="flex gap-4 overflow-x-auto">
        @foreach ($cast as $actor)
        <div class="min-w-[120px] text-center">

            <img src="{{ !empty($actor['profile_path']) 
                ? 'https://image.tmdb.org/t/p/w200' . $actor['profile_path'] 
                : 'https://via.placeholder.com/200' }}"
                class="w-24 h-24 rounded-full object-cover mx-auto">

            <p class="text-sm mt-2">{{ $actor['name'] ?? 'Unknown' }}</p>

        </div>
        @endforeach
    </div>
</section>

</div>
</x-app-layout>