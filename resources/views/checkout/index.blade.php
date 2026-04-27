@extends('layouts.master')

@section('title', 'Checkout')

@php $step = 4; @endphp

@section('content')

<div class="max-w-7xl mx-auto px-4 py-10">
    <div class="grid md:grid-cols-3 gap-6">

        <!-- KIRI: METODE PEMBAYARAN -->
        <div class="md:col-span-2 bg-white p-6 rounded-xl shadow space-y-6">

            <h2 class="text-2xl font-bold border-b pb-4">
                Metode Pembayaran
            </h2>

            <div x-data="{ open: '' }" class="space-y-4">

                <!-- BANK -->
                <div class="border-2 rounded-xl overflow-hidden">
                    <div @click="open = open === 'bank' ? '' : 'bank'"
                        class="flex justify-between items-center p-4 cursor-pointer hover:bg-gray-50">

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">🏦</div>
                            <div>
                                <p class="font-bold">Transfer Bank</p>
                                <p class="text-xs text-gray-500">Virtual Account</p>
                            </div>
                        </div>

                        <svg class="w-5 h-5 transition"
                            :class="{ 'rotate-180': open === 'bank' }"
                            fill="none" stroke="currentColor">
                            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>

                    <div x-show="open === 'bank'" class="px-4 pb-4 space-y-2">
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">BCA</div>
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">Mandiri</div>
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">BNI</div>
                    </div>
                </div>

                <!-- EWALLET -->
                <div class="border-2 rounded-xl overflow-hidden">
                    <div @click="open = open === 'ewallet' ? '' : 'ewallet'"
                        class="flex justify-between items-center p-4 cursor-pointer hover:bg-gray-50">

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">📱</div>
                            <div>
                                <p class="font-bold">E-Wallet</p>
                                <p class="text-xs text-gray-500">Gopay, OVO, Dana</p>
                            </div>
                        </div>

                        <svg class="w-5 h-5 transition"
                            :class="{ 'rotate-180': open === 'ewallet' }"
                            fill="none" stroke="currentColor">
                            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>

                    <div x-show="open === 'ewallet'" class="px-4 pb-4 space-y-2">
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">Gopay</div>
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">OVO</div>
                        <div class="p-3 border rounded-lg hover:bg-blue-50 cursor-pointer">Dana</div>
                    </div>
                </div>

                <!-- QRIS -->
                <div class="border-2 rounded-xl overflow-hidden">
                    <div @click="open = open === 'qris' ? '' : 'qris'"
                        class="flex justify-between items-center p-4 cursor-pointer hover:bg-gray-50">

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">📸</div>
                            <div>
                                <p class="font-bold">QRIS</p>
                                <p class="text-xs text-gray-500">Scan QR</p>
                            </div>
                        </div>

                        <svg class="w-5 h-5 transition"
                            :class="{ 'rotate-180': open === 'qris' }"
                            fill="none" stroke="currentColor">
                            <path stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>

                    <div x-show="open === 'qris'" class="px-4 pb-4">
                        <p class="text-sm text-gray-500">QR akan muncul setelah klik bayar</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- KANAN: CARD CHECKOUT -->
        <div class="bg-white p-6 rounded-2xl shadow-lg h-fit sticky top-24">

            <h2 class="text-xl font-bold mb-4 border-b pb-3">
                Checkout
            </h2>

            <div class="space-y-4 text-sm">

                <div>
                    <p class="text-gray-500">Event</p>
                    <p class="font-semibold text-gray-800">
                        {{ $title ?? 'Nama Event' }}
                    </p>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600">Harga</span>
                    <span class="font-semibold">
                        Rp {{ number_format($price ?? 0,0,',','.') }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-600">Biaya Layanan</span>
                    <span class="text-green-600 font-semibold">Gratis</span>
                </div>

                <div class="border-t pt-4 flex justify-between items-center">
                    <span class="font-bold text-gray-800">Total</span>
                    <span class="text-xl font-extrabold text-blue-600">
                        Rp {{ number_format($price ?? 0,0,',','.') }}
                    </span>
                </div>

            </div>

            <button class="mt-6 w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition">
                Checkout Sekarang
            </button>

        </div>

    </div>
</div>

@endsection