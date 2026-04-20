@extends('layouts.main')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- 🔥 HEADER --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Informasi Bank</h1>
        <p class="text-sm text-gray-500">
            Tambahkan rekening bank untuk pencairan dana event kamu.
        </p>
    </div>


    {{-- ⚠️ INFO --}}
    <div class="bg-blue-50 border border-blue-100 text-blue-700 p-4 rounded-xl mb-6 text-sm">
        Pastikan nama pemilik rekening sesuai dengan nama di bank agar proses pencairan dana tidak gagal.
    </div>


    {{-- 🏦 FORM BANK --}}
    <div class="bg-white rounded-xl shadow p-6 space-y-5">

        {{-- BANK --}}
        <div>
            <label class="text-sm font-medium">Bank</label>
            <select class="w-full mt-1 border rounded-lg px-3 py-2">
                <option>BCA</option>
                <option>BRI</option>
                <option>BNI</option>
                <option>Mandiri</option>
                <option>CIMB Niaga</option>
            </select>
        </div>

        {{-- NAMA PEMILIK --}}
        <div>
            <label class="text-sm font-medium">Nama Pemilik Rekening</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="Sesuai nama di bank">
        </div>

        {{-- NOMOR REKENING --}}
        <div>
            <label class="text-sm font-medium">Nomor Rekening</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="1234567890">
        </div>

        {{-- CABANG --}}
        <div>
            <label class="text-sm font-medium">Kantor Cabang (opsional)</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="Bandung / Jakarta / dll">
        </div>

        {{-- KOTA --}}
        <div>
            <label class="text-sm font-medium">Kota</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="Bandung">
        </div>


        {{-- BUTTON --}}
        <div class="flex justify-end">
            <button class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800">
                Simpan Rekening
            </button>
        </div>

    </div>


    {{-- 📌 LIST REKENING --}}
    <div class="mt-6 bg-white rounded-xl shadow p-6">

        <h2 class="font-bold mb-4">Rekening Tersimpan</h2>

        <div class="space-y-3">

            {{-- contoh 1 --}}
            <div class="border rounded-lg p-4 flex justify-between items-center">
                <div>
                    <p class="font-semibold">BCA - 1234567890</p>
                    <p class="text-sm text-gray-500">Bara User</p>
                </div>
                <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">
                    Aktif
                </span>
            </div>

        </div>

    </div>

</div>

@endsection