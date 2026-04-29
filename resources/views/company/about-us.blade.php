<x-app-layout :imageNavbar="true">
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6">

        <!-- HERO -->
        <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">
                    {{ __('app.about.hero_title') }}
                </h1>
                <p class="text-gray-500 leading-relaxed">
                    {{ __('app.about.hero_desc') }}
                </p>
            </div>

            <!-- visual -->
            <div class="relative">
                <div class="w-full h-64 bg-orange-100 rounded-3xl"></div>
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-orange-500 rounded-2xl"></div>
            </div>
        </div>

        <!-- STORY -->
        <div class="max-w-3xl mx-auto text-center mb-20">
            <h2 class="text-2xl font-semibold mb-4">{{ __('app.about.story_title') }}</h2>
            <p class="text-gray-500 leading-relaxed">
                {{ __('app.about.story_desc') }}
            </p>
        </div>

        <!-- ZIG ZAG SECTION -->
        <div class="space-y-20">

            <!-- item 1 -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="bg-gray-100 h-64 rounded-2xl"></div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">{{ __('app.about.mission_title') }}</h3>
                    <p class="text-gray-500">
                        {{ __('app.about.mission_desc') }}
                    </p>
                </div>
            </div>

            <!-- item 2 -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="order-2 md:order-1">
                    <h3 class="text-xl font-semibold mb-2">{{ __('app.about.vision_title') }}</h3>
                    <p class="text-gray-500">
                        {{ __('app.about.vision_desc') }}
                    </p>
                </div>
                <div class="bg-gray-100 h-64 rounded-2xl order-1 md:order-2"></div>
            </div>

        </div>

        <!-- VALUES -->
        <div class="mt-20 grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 p-6 rounded-2xl shadow">
                <h4 class="font-semibold mb-2">{{ __('app.about.value_innovation') }}</h4>
                <p class="text-gray-500 text-sm">{{ __('app.about.value_innovation_desc') }}</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-2xl shadow">
                <h4 class="font-semibold mb-2">{{ __('app.about.value_trust') }}</h4>
                <p class="text-gray-500 text-sm">{{ __('app.about.value_trust_desc') }}</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-2xl shadow">
                <h4 class="font-semibold mb-2">{{ __('app.about.value_ease') }}</h4>
                <p class="text-gray-500 text-sm">{{ __('app.about.value_ease_desc') }}</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-20">
            <h3 class="text-2xl font-semibold mb-4">
                {{ __('app.about.cta_title') }}
            </h3>
            <a href="/contact"
               class="inline-block bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transition">
               {{ __('app.about.cta_button') }}
            </a>
        </div>

    </div>
</section>
</x-app-layout>