@extends('layouts.master')

@section('title', 'Konfirmasi Pesanan')

@section('content')

@php $step = 3; @endphp

<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid md:grid-cols-3 gap-6">
        
        <!-- KIRI: KONFIRMASI DATA -->
        <div class="md:col-span-2 bg-white p-6 rounded-xl shadow space-y-6">
            <h2 class="font-bold text-2xl text-gray-800 border-b pb-4">Konfirmasi Data Anda</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-1">
                    <p class="text-xs text-gray-500 uppercase font-bold">Nama Lengkap</p>
                    <p class="text-gray-900 font-medium">{{ Auth::user()->name ?? 'User' }}</p>
                </div>
                <div class="space-y-1">
                    <p class="text-xs text-gray-500 uppercase font-bold">Email</p>
                    <p class="text-gray-900 font-medium">{{ Auth::user()->email ?? '-' }}</p>
                </div>
                <div class="space-y-1">
                    <p class="text-xs text-gray-500 uppercase font-bold">No. WhatsApp</p>
                    <p class="text-gray-900 font-medium">+62 812 3456 7890</p>
                </div>
                <div class="space-y-1">
                    <p class="text-xs text-gray-500 uppercase font-bold">NIK / No. Identitas</p>
                    <p class="text-gray-900 font-medium">327301XXXXXXXXXX</p>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                <p class="text-sm text-blue-700">
                    Mohon pastikan data di atas sudah benar. Tiket akan dikirimkan ke email yang terdaftar.
                </p>
            </div>

            <div class="pt-4">
                <a href="{{ route('checkout', ['type' => $type, 'id' => $id]) }}" 
                   class="inline-block bg-blue-600 text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-blue-700 hover:shadow-lg transition-all">
                   Lanjut ke Pembayaran
                </a>
            </div>
        </div>

        <!-- KANAN: RINGKASAN -->
        <div class="bg-white p-6 rounded-xl shadow h-fit sticky top-24">
            <h3 class="font-bold text-lg mb-4 border-b pb-2">Ringkasan Event</h3>

            <div class="space-y-4">
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold">Nama Event</p>
                    <p class="text-gray-900 font-bold leading-tight">{{ $title }}</p>
                </div>

                <div class="flex justify-between items-center py-3 border-t border-b border-dashed">
                    <span class="text-sm text-gray-600">1x Tiket Reguler</span>
                    <span class="font-bold text-gray-900">Rp {{ number_format($price, 0, ',', '.') }}</span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-gray-500">Total Tagihan</span>
                    <span class="text-xl font-extrabold text-blue-600">Rp {{ number_format($price, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection