<x-app-layout :imageNavbar="true">
<section class="bg-gray-50 py-16">
<div class="max-w-6xl mx-auto px-6">

    <!-- HEADER -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            {{ __('app.blog.title') }}
        </h1>
        <p class="text-gray-500">
            {{ __('app.blog.subtitle') }}
        </p>
    </div>

    <!-- FEATURED POST -->
    <div class="mb-16">
        <div class="bg-white rounded-2xl shadow overflow-hidden md:flex">

            <img src="https://source.unsplash.com/800x500/?event"
                 class="w-full md:w-1/2 object-cover">

            <div class="p-8">
                <p class="text-sm text-orange-500 mb-2">{{ __('app.blog.featured_label') }}</p>
                <h2 class="text-2xl font-bold mb-4">
                    {{ __('app.blog.featured_title') }}
                </h2>
                <p class="text-gray-500 mb-4">
                   {{ __('app.blog.featured_desc') }}
                </p>

                <a href="/Jelajah" class="text-orange-500 font-semibold">
                    {{ __('app.blog.read_more') }}
                </a>
            </div>

        </div>
    </div>

    <!-- BLOG GRID -->
    <div class="grid md:grid-cols-3 gap-6">

        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="https://source.unsplash.com/400x300/?concert"
                 class="w-full h-40 object-cover">

            <div class="p-5">
                <h3 class="font-semibold mb-2">
                    {{ __('app.blog.card1_title') }}
                </h3>
                <p class="text-sm text-gray-500 mb-3">
                    {{ __('app.blog.card1_desc') }}
                </p>
                <a href="#" class="text-orange-500 text-sm font-semibold">
                    {{ __('app.blog.read') }}
                </a>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="https://source.unsplash.com/400x300/?festival"
                 class="w-full h-40 object-cover">

            <div class="p-5">
                <h3 class="font-semibold mb-2">
                    {{ __('app.blog.card2_title') }}
                </h3>
                <p class="text-sm text-gray-500 mb-3">
                    {{ __('app.blog.card2_desc') }}
                </p>
                <a href="#" class="text-orange-500 text-sm font-semibold">
                    {{ __('app.blog.read') }}
                </a>
            </div>
        </div>

        <!-- CARD -->
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition overflow-hidden">
            <img src="https://source.unsplash.com/400x300/?conference"
                 class="w-full h-40 object-cover">

            <div class="p-5">
                <h3 class="font-semibold mb-2">
                    {{ __('app.blog.card3_title') }}
                </h3>
                <p class="text-sm text-gray-500 mb-3">
                    {{ __('app.blog.card3_desc') }}
                </p>
                <a href="#" class="text-orange-500 text-sm font-semibold">
                    {{ __('app.blog.read') }}
                </a>
            </div>
        </div>

    </div>

</div>
</section>
</x-app-layout>