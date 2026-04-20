@extends('layouts.main')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-10" x-data="{ tab: 'aktif' }">

    <h1 class="text-2xl font-bold mb-6">Tiket Saya</h1>

    {{-- TAB --}}
    <div class="border-b flex space-x-6">

        <button 
            @click="tab = 'aktif'"
            :class="tab === 'aktif' 
                ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' 
                : 'text-gray-500'"
            class="pb-2 transition"
        >
            Event Aktif
        </button>

        <button 
            @click="tab = 'nonaktif'"
            :class="tab === 'nonaktif' 
                ? 'text-blue-600 border-b-2 border-blue-600 font-semibold' 
                : 'text-gray-500'"
            class="pb-2 transition"
        >
            Event Tidak Aktif
        </button>

    </div>

    {{-- CONTENT --}}
    <div class="mt-6">

        {{-- AKTIF --}}
        <div x-show="tab === 'aktif'" x-transition class="grid md:grid-cols-3 gap-4">

            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-xl shadow p-4">
                <h3 class="font-semibold">Event Aktif {{$i}}</h3>
                <p class="text-sm text-gray-500">Status: Aktif</p>
            </div>
            @endfor

        </div>

        {{-- NONAKTIF --}}
        <div x-show="tab === 'nonaktif'" x-transition class="grid md:grid-cols-3 gap-4">

            @for ($i = 1; $i <= 3; $i++)
            <div class="bg-white rounded-xl shadow p-4 opacity-70">
                <h3 class="font-semibold">Event Selesai {{$i}}</h3>
                <p class="text-sm text-gray-500">Status: Tidak Aktif</p>
            </div>
            @endfor

        </div>

    </div>

</div>

@endsection