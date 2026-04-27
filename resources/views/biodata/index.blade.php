@extends('layouts.master')

@section('title', 'Isi Data Diri')

@section('content')

@php $step = 2; @endphp
<div class="bg-yellow-400 text-black text-center py-2 text-sm font-semibold">
    04:40 | Remaining time to make your payment
</div>

<div class="max-w-7xl mx-auto px-4 py-8 grid md:grid-cols-3 gap-6">

    <div class="md:col-span-2 bg-white p-6 rounded-xl shadow">

        <h2 class="font-bold text-lg mb-6">Personal Information</h2>

        <div class="space-y-4">

            <input type="text" placeholder="First Name" class="w-full border rounded-lg p-3">
            <input type="text" placeholder="Last Name" class="w-full border rounded-lg p-3">
            <input type="email" placeholder="Email" class="w-full border rounded-lg p-3">

            <div class="flex gap-2">
                <select class="border rounded-lg p-3">
                    <option>+62</option>
                </select>
                <input type="text" placeholder="Phone Number" class="w-full border rounded-lg p-3">
            </div>

            <input type="text" placeholder="ID Number" class="w-full border rounded-lg p-3">

            <div class="flex gap-2">
                <input type="text" placeholder="dd" class="w-20 border rounded-lg p-3">
                <input type="text" placeholder="mm" class="w-20 border rounded-lg p-3">
                <input type="text" placeholder="yyyy" class="w-28 border rounded-lg p-3">
            </div>

            <div class="flex gap-4">
                <label><input type="radio" name="gender"> Male</label>
                <label><input type="radio" name="gender"> Female</label>
            </div>

            <div class="flex gap-4">
                <label><input type="radio" name="wa"> Yes</label>
                <label><input type="radio" name="wa"> No</label>
            </div>

            <div class="space-y-2 text-sm">
                <label><input type="checkbox"> Terms & Conditions</label>
                <label><input type="checkbox"> Data Policy</label>
            </div>

            <a href="{{ route('confirmation', ['type' => $type, 'id' => $id]) }}" 
               class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
               Lanjut
            </a>

        </div>

    </div>

    <div class="bg-white p-6 rounded-xl shadow h-fit">

        <h3 class="font-bold mb-2">Event</h3>

        <p class="text-sm mb-2">{{ $title ?? 'Event Title' }}</p>

        <div class="border-t pt-4 mt-4">
            <p class="text-sm">1 ticket</p>
            <p class="font-bold text-blue-600">Rp {{ number_format($price ?? 0,0,',','.') }}</p>
        </div>

    </div>

</div>

@endsection