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

                    @foreach (['musik','seminar','workshop','olahraga','festival','teknologi'] as $item)
                    <option value="{{ $item }}"
                        {{ request('kategori') == $item ? 'selected' : '' }}>
                        {{ ucfirst($item) }}
                    </option>
                    @endforeach

                </select>

                {{-- KOTA --}}
                <select name="kota" class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Semua Kota</option>
                    <option value="bandung" {{ request('kota')=='bandung'?'selected':'' }}>Bandung</option>
                    <option value="jakarta" {{ request('kota')=='jakarta'?'selected':'' }}>Jakarta</option>
                </select>

                <button class="w-full bg-blue-900 text-white py-2 rounded-lg">
                    Terapkan
                </button>

            </form>

        </div>


        {{-- 🟢 LIST --}}
        <div class="md:col-span-3">

            @php
                $events = collect(range(1, 20))->map(fn($i) => [
                    'name' => "Event $i",
                    'kategori' => ['musik','seminar','workshop','olahraga','festival','teknologi'][rand(0,5)],
                    'kota' => ['bandung','jakarta'][rand(0,1)],
                ]);

                if(request('search')){
                    $events = $events->filter(fn($e) =>
                        str_contains(strtolower($e['name']), strtolower(request('search')))
                    );
                }

                if(request('kategori')){
                    $events = $events->where('kategori', request('kategori'));
                }

                if(request('kota')){
                    $events = $events->where('kota', request('kota'));
                }
            @endphp


            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

                @forelse ($events as $event)

                <div class="bg-white rounded-xl shadow hover:shadow-lg transition">

                    <img src="https://picsum.photos/400/300?random={{ rand(1,100) }}"
                         class="w-full h-32 object-cover">

                    <div class="p-3">
                        <h3 class="font-semibold text-sm">{{ $event['name'] }}</h3>

                        <p class="text-xs text-gray-500 capitalize">
                            {{ $event['kategori'] }} • {{ $event['kota'] }}
                        </p>
                    </div>

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