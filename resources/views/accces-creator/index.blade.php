@extends('layouts.main')

@section('content')

<div class="max-w-5xl mx-auto">
    
    {{-- 🔥 HEADER --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Kelola Akses</h1>

        <button onclick="openModal()"
            class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            + Tambah Akses
        </button>
    </div>


    {{-- 🟢 LIST USER --}}
    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full text-sm">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="text-left p-3">Nama</th>
                    <th class="text-left p-3">Email</th>
                    <th class="text-left p-3">Role</th>
                    <th class="text-left p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @php
                    $users = [
                        ['name'=>'Bara', 'email'=>'bara@mail.com', 'role'=>'Owner'],
                        ['name'=>'Admin 1', 'email'=>'admin@mail.com', 'role'=>'Admin'],
                        ['name'=>'Staff', 'email'=>'staff@mail.com', 'role'=>'Viewer'],
                    ];
                @endphp

                @foreach($users as $user)
                <tr class="border-t">

                    <td class="p-3 font-medium">{{ $user['name'] }}</td>
                    <td class="p-3 text-gray-500">{{ $user['email'] }}</td>

                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs
                            {{ $user['role']=='Owner' ? 'bg-green-100 text-green-600' : '' }}
                            {{ $user['role']=='Admin' ? 'bg-blue-100 text-blue-600' : '' }}
                            {{ $user['role']=='Viewer' ? 'bg-gray-200 text-gray-600' : '' }}
                        ">
                            {{ $user['role'] }}
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">

                        <button class="text-blue-600 hover:underline text-xs">
                            Edit
                        </button>

                        @if($user['role'] != 'Owner')
                        <button class="text-red-500 hover:underline text-xs">
                            Hapus
                        </button>
                        @endif

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</div>


{{-- 🔥 MODAL TAMBAH AKSES --}}
<div id="modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center">

    <div class="bg-white rounded-xl w-full max-w-md p-6">

        <h2 class="font-bold text-lg mb-4">Tambah Akses</h2>

        <form class="space-y-4">

            <div>
                <label class="text-sm">Email</label>
                <input type="email" class="w-full border px-3 py-2 rounded-lg mt-1">
            </div>

            <div>
                <label class="text-sm">Role</label>
                <select class="w-full border px-3 py-2 rounded-lg mt-1">
                    <option>Admin</option>
                    <option>Viewer</option>
                </select>
            </div>

            <div class="flex justify-end gap-2 mt-4">

                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 rounded-lg border">
                    Batal
                </button>

                <button class="px-4 py-2 bg-blue-900 text-white rounded-lg">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>


{{-- 🔥 SCRIPT MODAL --}}
<script>
function openModal(){
    document.getElementById('modal').classList.remove('hidden');
    document.getElementById('modal').classList.add('flex');
}

function closeModal(){
    document.getElementById('modal').classList.add('hidden');
}
</script>

@endsection