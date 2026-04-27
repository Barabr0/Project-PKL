<x-app-layout>

<div class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-2xl font-bold mb-6">Jelajah Event</h1>

    {{-- 🔥 INFO FILTER --}}
    @if(request('kategori'))
        <p class="mb-4 text-sm text-gray-600">
            Menampilkan kategori:
            <span class="font-semibold capitalize">
                {{ request('kategori') }}
            </span>
        </p>
    @endif


    <div class="grid md:grid-cols-4 gap-6">

        {{-- 🔵 FILTER --}}
        <div class="bg-white p-4 rounded-xl shadow h-fit">

            <form method="GET" class="space-y-4">

                <h2 class="font-semibold text-lg">Filter</h2>

                {{-- SEARCH --}}
                <input type="text" name="search"
                    placeholder="Cari event..."
                    value="{{ request('search') }}"
                    class="w-full px-3 py-2 border rounded-lg">

                {{-- KATEGORI --}}
                <select name="kategori" class="w-full px-3 py-2 border rounded-lg">

                    <option value="">Semua</option>

                    @foreach ($categories as $kategori)
                    <option value="{{ $kategori->slug }}"
                        {{ request('kategori') == $kategori->slug ? 'selected' : '' }}>
                        {{ ucfirst($kategori->nama_kategori) }}
                    </option>
                    @endforeach

                </select>

                {{-- KOTA --}}
                <select name="kota" class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Semua Kota</option>
                    <option value="Bandung" {{ request('kota')=='Bandung'?'selected':'' }}>Bandung</option>
                    <option value="Jakarta" {{ request('kota')=='Jakarta'?'selected':'' }}>Jakarta</option>
                    <option value="Surabaya" {{ request('kota')=='Surabaya'?'selected':'' }}>Surabaya</option>
                    <option value="Yogyakarta" {{ request('kota')=='Yogyakarta'?'selected':'' }}>Yogyakarta</option>
                </select>

                <button class="w-full bg-blue-900 text-white py-2 rounded-lg">
                    Terapkan
                </button>

            </form>

        </div>


        {{-- 🟢 LIST --}}
        <div class="md:col-span-3">

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                @forelse ($events as $event)

                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                    <a href="{{ route('event.detail', $event->id) }}">
                        <img src="{{ $event->gambar }}"
                             class="w-full h-32 object-cover">

                        <div class="p-3">
                            <h3 class="font-semibold text-sm">{{ $event->nama_event }}</h3>

                            <p class="text-xs text-gray-500 capitalize">
                                {{ $event->category ? $event->category->nama_kategori : 'Umum' }} • {{ $event->lokasi }}
                            </p>
                            <p class="text-xs font-bold text-blue-600 mt-1">
                                Rp {{ number_format($event->harga, 0, ',', '.') }}
                            </p>
                        </div>
                    </a>
                </div>

                @empty

                <p class="col-span-3 text-center text-gray-500">
                    Event tidak ditemukan 😢
                </p>

                @endforelse

            </div>

        </div>

    </div>

</div>

</x-app-layout>