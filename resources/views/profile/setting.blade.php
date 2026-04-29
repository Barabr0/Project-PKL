@extends('layouts.main')

@section('content')

<div class="flex gap-12">
    <div class="flex-1">

        <div class="bg-white rounded-xl shadow p-6 max-w-6xl">

            <h1 class="text-xl font-semibold mb-6">
                {{ __('app.profile.settings_title') }}
            </h1>

            {{-- NOTIFIKASI --}}
            <div class="flex items-center justify-between py-4 border-b">
                <div>
                    <h2 class="font-medium">{{ __('app.profile.newsletter') }}</h2>
                    <p class="text-sm text-gray-500">
                        {{ __('app.profile.newsletter_desc') }}
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
                    <h2 class="font-medium">{{ __('app.profile.email_notif') }}</h2>
                    <p class="text-sm text-gray-500">
                        {{ __('app.profile.email_notif_desc') }}
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
                    {{ __('app.profile.danger_zone') }}
                </h2>

                @include('profile.partials.delete-user-form')

            </div>

        </div>

    </div>

</div>

@endsection