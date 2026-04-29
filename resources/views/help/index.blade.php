<x-app-layout :imageNavbar="true">


{{-- 🔵 HERO KECIL (SEARCH) --}}
<div class="bg-blue-900 text-white py-10">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-2xl font-bold mb-4">{{ __('app.help.title') }}</h1>
        <input type="text" placeholder="{{ __('app.help.search_placeholder') }}"
            class="w-full px-4 py-3 rounded-lg text-black focus:outline-none">
    </div>
</div>

{{-- 🟣 KATEGORI --}}
<div class="max-w-7xl mx-auto px-4 py-10">

    <h2 class="text-lg font-bold mb-6">{{ __('app.help.categories_title') }}</h2>

    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            🎫
            <p class="mt-2 font-semibold">{{ __('app.help.cat_ticket') }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            💳
            <p class="mt-2 font-semibold">{{ __('app.help.cat_payment') }}</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            👤
            <p class="mt-2 font-semibold">{{ __('app.help.cat_account') }}</p>
        </div>

        <a href="{{ route('contact') }}" class="bg-white p-6 rounded-xl shadow text-center hover:shadow-lg cursor-pointer">
            📩
            <p class="mt-2 font-semibold">{{ __('app.help.cat_contact') }}</p>
        </a>

    </div>

</div>

{{-- ⚫ FAQ --}}
<div class="max-w-4xl mx-auto px-4 pb-12">

    <h2 class="text-lg font-bold mb-6">{{ __('app.help.faq_title') }}</h2>

    <div class="space-y-4">

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                {{ __('app.help.faq1_q') }}
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                {{ __('app.help.faq1_a') }}
            </p>
        </div>

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                {{ __('app.help.faq2_q') }}
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                {{ __('app.help.faq2_a') }}
            </p>
        </div>

        {{-- ITEM --}}
        <div x-data="{open:false}" class="bg-white rounded-xl shadow p-4">
            <button @click="open = !open" class="w-full text-left font-semibold flex justify-between">
                {{ __('app.help.faq3_q') }}
                <span x-text="open ? '-' : '+'"></span>
            </button>

            <p x-show="open" x-transition class="mt-3 text-sm text-gray-600">
                {{ __('app.help.faq3_a') }}
            </p>
        </div>

    </div>

</div>

</x-app-layout>