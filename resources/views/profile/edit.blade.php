@extends('layouts.main')

@section('content')

        <header class="bg-white border-b px-6 py-4">
            <h2 class="font-semibold text-gray-700">Profile</h2>
        </header>
<div class="max-w-4xl space-y-6">

    {{-- CARD --}}
    <div class="bg-white p-6 rounded-xl shadow-sm border">

        <h2 class="text-lg font-semibold mb-4 text-gray-700">
            Informasi Dasar
        </h2>

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border">

        <h2 class="text-lg font-semibold mb-4 text-gray-700">
            Keamanan
        </h2>

        @include('profile.partials.update-password-form')

    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-red-100">

        <h2 class="text-lg font-semibold mb-4 text-red-500">
            Zona Bahaya
        </h2>

        @include('profile.partials.delete-user-form')

    </div>

</div>

@endsection