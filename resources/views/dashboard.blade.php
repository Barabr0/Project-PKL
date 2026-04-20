@extends('layouts.main') {{-- layout kamu yang ada sidebar --}}

@section('content')

<div class="max-w-6xl mx-auto">

    {{-- 🔵 HEADER PROFILE --}}
    <div class="bg-white rounded-xl shadow p-6 mb-6 flex items-center gap-4">

        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
        </div>

        <div>
            <h2 class="font-bold text-lg">{{ Auth::user()->name ?? 'User' }}</h2>
            <p class="text-sm text-gray-500">Member sejak 2026</p>
            <p class="text-sm text-gray-400">Jawa Barat</p>
        </div>

    </div>


    {{-- 🔥 TAB EVENT --}}
    <div x-data="{ tab: 'aktif' }">

        <div class="flex gap-6 border-b mb-4">

            <button @click="tab='aktif'"
                :class="tab==='aktif' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                class="pb-2 font-semibold">
                Event Aktif
            </button>

            <button @click="tab='lalu'"
                :class="tab==='lalu' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                class="pb-2 font-semibold">
                Event Lalu
            </button>

        </div>


        {{-- 🟢 EVENT AKTIF --}}
        <div x-show="tab==='aktif'">

            @php
                $eventsAktif = [];
            @endphp

            @if(count($eventsAktif))

                <div class="grid md:grid-cols-3 gap-4">
                    @foreach($eventsAktif as $event)
                        <div class="bg-white rounded-xl shadow p-4">
                            {{ $event['name'] }}
                        </div>
                    @endforeach
                </div>

            @else

                {{-- EMPTY STATE --}}
                <div class="bg-white rounded-xl shadow p-10 text-center">

                    <img src="https://cdn-icons-png.flaticon.com/512/4076/4076478.png"
                         class="w-20 mx-auto mb-4 opacity-70">

                    <p class="text-gray-500 mb-4">Belum ada event aktif</p>

                    @if(session('mode','buyer') == 'creator')
                        <a href="/event/create"
                           class="bg-blue-900 text-white px-4 py-2 rounded-lg">
                            Buat Event
                        </a>
                    @endif

                </div>

            @endif

        </div>


        {{-- ⚫ EVENT LALU --}}
        <div x-show="tab==='lalu'">

            <div class="bg-white rounded-xl shadow p-10 text-center">
                <p class="text-gray-500">Belum ada event sebelumnya</p>
            </div>

        </div>

    </div>


    {{-- 🔥 CTA JADI CREATOR (HANYA UNTUK BUYER) --}}
    @if(session('mode','buyer') == 'buyer')

    <div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl p-6">

        <h3 class="font-bold text-lg mb-2">Siap jadi Event Creator?</h3>
        <p class="text-sm opacity-90 mb-4">
            Kelola event, jual tiket, dan pantau penjualan dengan mudah.
        </p>

        <a href="{{ route('switch.mode','creator') }}"
           class="bg-white text-blue-900 px-4 py-2 rounded-lg font-semibold">
            Mulai Jadi Creator
        </a>

    </div>

    @endif

</div>

@endsection