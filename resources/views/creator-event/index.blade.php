@extends('layouts.main')

@section('content')

<div class="max-w-6xl mx-auto">

    {{-- 🔥 HEADER --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Event Saya</h1>

        @if(session('mode','buyer') == 'creator')
        <a href="/event/create"
           class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            + Buat Event
        </a>
        @endif
    </div>


    {{-- 🔵 TAB --}}
    <div x-data="{ tab: 'aktif' }">

        <div class="flex gap-6 border-b mb-6">

            <button @click="tab='aktif'"
                :class="tab==='aktif' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                class="pb-2 font-semibold">
                Aktif
            </button>

            <button @click="tab='nonaktif'"
                :class="tab==='nonaktif' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                class="pb-2 font-semibold">
                Tidak Aktif
            </button>

        </div>


        {{-- 🟢 EVENT AKTIF --}}
        <div x-show="tab==='aktif'">

            @php
                $eventAktif = collect(range(1,5))->map(fn($i)=>[
                    'name'=>"Event Aktif $i",
                    'date'=>"20 Apr 2026",
                    'status'=>"Aktif"
                ]);
            @endphp

            @if($eventAktif->count())

                <div class="grid md:grid-cols-3 gap-4">

                    @foreach($eventAktif as $event)
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition">

                        <img src="https://picsum.photos/400/300?random={{ rand(1,100) }}"
                             class="w-full h-36 object-cover rounded-t-xl">

                        <div class="p-4">

                            <h3 class="font-semibold text-sm mb-1">
                                {{ $event['name'] }}
                            </h3>

                            <p class="text-xs text-gray-500 mb-2">
                                {{ $event['date'] }}
                            </p>

                            <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">
                                Aktif
                            </span>

                        </div>

                    </div>
                    @endforeach

                </div>

            @else

                {{-- EMPTY --}}
                <div class="bg-white rounded-xl shadow p-10 text-center">
                    <p class="text-gray-500 mb-4">Belum ada event aktif</p>

                    <a href="/event/create"
                       class="bg-blue-900 text-white px-4 py-2 rounded-lg">
                        Buat Event
                    </a>
                </div>

            @endif

        </div>


        {{-- ⚫ EVENT TIDAK AKTIF --}}
        <div x-show="tab==='nonaktif'">

            @php
                $eventNon = collect(range(1,3))->map(fn($i)=>[
                    'name'=>"Event Lama $i",
                    'date'=>"10 Mar 2026",
                    'status'=>"Selesai"
                ]);
            @endphp

            @if($eventNon->count())

                <div class="grid md:grid-cols-3 gap-4">

                    @foreach($eventNon as $event)
                    <div class="bg-white rounded-xl shadow opacity-80">

                        <img src="https://picsum.photos/400/300?random={{ rand(1,100) }}"
                             class="w-full h-36 object-cover rounded-t-xl">

                        <div class="p-4">

                            <h3 class="font-semibold text-sm mb-1">
                                {{ $event['name'] }}
                            </h3>

                            <p class="text-xs text-gray-500 mb-2">
                                {{ $event['date'] }}
                            </p>

                            <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">
                                Selesai
                            </span>

                        </div>

                    </div>
                    @endforeach

                </div>

            @else

                <div class="bg-white rounded-xl shadow p-10 text-center">
                    <p class="text-gray-500">Belum ada event sebelumnya</p>
                </div>

            @endif

        </div>

    </div>

</div>

@endsection