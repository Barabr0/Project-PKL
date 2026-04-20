@extends('layouts.main')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- 🔥 HEADER --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Informasi Legal</h1>
        <p class="text-sm text-gray-500">
            Lengkapi data legal untuk keamanan transaksi & pencairan dana.
        </p>
    </div>


    {{-- ⚠️ ALERT --}}
    <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 p-4 rounded-xl mb-6">
        <p class="text-sm">
            Data legal diperlukan untuk verifikasi akun creator dan pencairan dana event.
        </p>
    </div>


    {{-- 📄 FORM --}}
    <div class="bg-white rounded-xl shadow p-6 space-y-5">

        <div>
            <label class="text-sm font-medium">Nama Lengkap / Nama Perusahaan</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="Contoh: PT ABC Indonesia">
        </div>

        <div>
            <label class="text-sm font-medium">Nomor Identitas (KTP / NIB / NPWP)</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="Masukkan nomor identitas">
        </div>

        <div>
            <label class="text-sm font-medium">Alamat Legal</label>
            <textarea rows="3"
                      class="w-full mt-1 border rounded-lg px-3 py-2"
                      placeholder="Alamat sesuai dokumen legal"></textarea>
        </div>

        <div>
            <label class="text-sm font-medium">Email</label>
            <input type="email"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="email@domain.com">
        </div>

        <div>
            <label class="text-sm font-medium">Nomor Telepon</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="08xxxxxxxxxx">
        </div>


        {{-- 🔘 BUTTON --}}
        <div class="flex justify-end">
            <button class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800">
                Simpan Data
            </button>
        </div>

    </div>


    {{-- 📌 INFO SECTION --}}
    <div class="mt-6 bg-white rounded-xl shadow p-6">

        <h2 class="font-bold mb-2">Kenapa perlu informasi legal?</h2>

        <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
            <li>Verifikasi akun creator</li>
            <li>Proses pencairan dana event</li>
            <li>Keamanan transaksi pembeli</li>
            <li>Memenuhi ketentuan platform</li>
        </ul>

    </div>

</div>

@endsection