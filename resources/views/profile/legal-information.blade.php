@extends('layouts.main')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- 🔥 HEADER --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold">{{ __('app.profile.legal_title') }}</h1>
        <p class="text-sm text-gray-500">
            {{ __('app.profile.legal_desc') }}
        </p>
    </div>


    {{-- ⚠️ ALERT --}}
    <div class="bg-yellow-50 border border-yellow-200 text-yellow-700 p-4 rounded-xl mb-6">
        <p class="text-sm">
            {{ __('app.profile.legal_alert') }}
        </p>
    </div>


    {{-- 📄 FORM --}}
    <div class="bg-white rounded-xl shadow p-6 space-y-5">

        <div>
            <label class="text-sm font-medium">{{ __('app.profile.legal_fullname') }}</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="{{ __('app.profile.legal_fullname_ph') }}">
        </div>

        <div>
            <label class="text-sm font-medium">{{ __('app.profile.legal_id') }}</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="{{ __('app.profile.legal_id_ph') }}">
        </div>

        <div>
            <label class="text-sm font-medium">{{ __('app.profile.legal_address') }}</label>
            <textarea rows="3"
                      class="w-full mt-1 border rounded-lg px-3 py-2"
                      placeholder="{{ __('app.profile.legal_address_ph') }}"></textarea>
        </div>

        <div>
            <label class="text-sm font-medium">{{ __('app.profile.legal_email') }}</label>
            <input type="email"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="email@domain.com">
        </div>

        <div>
            <label class="text-sm font-medium">{{ __('app.profile.legal_phone') }}</label>
            <input type="text"
                   class="w-full mt-1 border rounded-lg px-3 py-2"
                   placeholder="{{ __('app.profile.legal_phone_ph') }}">
        </div>


        {{-- 🔘 BUTTON --}}
        <div class="flex justify-end">
            <button class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800">
                {{ __('app.profile.save_data') }}
            </button>
        </div>

    </div>


    {{-- 📌 INFO SECTION --}}
    <div class="mt-6 bg-white rounded-xl shadow p-6">

        <h2 class="font-bold mb-2">{{ __('app.profile.why_legal_title') }}</h2>

        <ul class="text-sm text-gray-600 space-y-2 list-disc pl-5">
            <li>{{ __('app.profile.why_legal_1') }}</li>
            <li>{{ __('app.profile.why_legal_2') }}</li>
            <li>{{ __('app.profile.why_legal_3') }}</li>
            <li>{{ __('app.profile.why_legal_4') }}</li>
        </ul>

    </div>

</div>

@endsection