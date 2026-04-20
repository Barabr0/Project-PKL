@extends('layouts.main')

@section('content')

<div class="flex gap-12">
    <div class="flex-1">

        <div class="bg-white rounded-xl shadow p-6 max-w-6xl">

            <h1 class="text-xl font-semibold mb-6">
                Pengaturan
            </h1>

            {{-- NOTIFIKASI --}}
            <div class="flex items-center justify-between py-4 border-b">
                <div>
                    <h2 class="font-medium">Newsletter</h2>
                    <p class="text-sm text-gray-500">
                        Dapatkan info event terbaru
                    </p>
                </div>

                {{-- TOGGLE --}}
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:bg-blue-600 relative transition">
                        <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition peer-checked:translate-x-5"></div>
                    </div>
                </label>
            </div>

            {{-- NOTIFIKASI EMAIL --}}
            <div class="flex items-center justify-between py-4 border-b">
                <div>
                    <h2 class="font-medium">Notifikasi Email</h2>
                    <p class="text-sm text-gray-500">
                        Terima update melalui email
                    </p>
                </div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:bg-blue-600 relative transition">
                        <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition peer-checked:translate-x-5"></div>
                    </div>
                </label>
            </div>

            {{-- SECTION BAHAYA --}}
            <div class="mt-6">

                <h2 class="text-red-500 font-semibold mb-2">
                    Zona Berbahaya
                </h2>

                <p class="text-sm text-gray-500 mb-4">
                    Tindakan ini tidak dapat dibatalkan
                </p>

                <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Tutup Akun
                </button>

            </div>

        </div>

    </div>

</div>

@endsection