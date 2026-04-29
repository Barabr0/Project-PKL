<x-app-layout :imageNavbar="true">
<section class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
            {{ __('app.contact.title') }}
        </h2>

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- LEFT: SHAPE LIKE IMAGE -->
            <div class="relative h-[400px] flex items-center justify-center">

                <!-- BLOB BACKGROUND -->
                <div class="absolute w-80 h-80 bg-orange-100 rounded-full blur-2xl"></div>

                <!-- MAIN SHAPE -->
                <div class="relative w-[300px] h-[220px] bg-white rounded-[40px] shadow-lg p-6">

                    <!-- fake content lines -->
                    <div class="space-y-3">
                        <div class="h-3 bg-gray-200 rounded w-3/4"></div>
                        <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                        <div class="h-3 bg-gray-200 rounded w-2/3"></div>
                    </div>

                    <!-- small floating card -->
                    <div class="absolute -top-6 -right-6 w-24 h-16 bg-orange-500 rounded-xl shadow-md"></div>

                    <!-- circle decoration -->
                    <div class="absolute -bottom-6 -left-6 w-16 h-16 bg-blue-100 rounded-full"></div>

                </div>

                <!-- HOTSPOT 1 -->
                <div x-data="{open:false}"
                     @mouseenter="open=true"
                     @mouseleave="open=false"
                     class="absolute top-16 left-10">

                    <div class="relative">
                        <div class="w-4 h-4 bg-orange-500 rounded-full animate-ping"></div>
                        <div class="w-4 h-4 bg-orange-500 rounded-full absolute top-0"></div>
                    </div>

                    <div x-show="open" x-transition
                         class="mt-3 bg-white p-3 rounded-xl shadow-xl w-44">
                        <p class="font-semibold">{{ __('app.contact.office_label') }}</p>
                        <p class="text-sm text-gray-500">Surabaya</p>
                    </div>
                </div>

                <!-- HOTSPOT 2 -->
                <div x-data="{open:false}"
                     @mouseenter="open=true"
                     @mouseleave="open=false"
                     class="absolute bottom-10 right-12">

                    <div class="relative">
                        <div class="w-4 h-4 bg-orange-500 rounded-full animate-ping"></div>
                        <div class="w-4 h-4 bg-orange-500 rounded-full absolute top-0"></div>
                    </div>

                    <div x-show="open" x-transition
                         class="mt-3 bg-white p-3 rounded-xl shadow-xl w-44">
                        <p class="font-semibold">{{ __('app.contact.support_label') }}</p>
                        <p class="text-sm text-gray-500">{{ __('app.contact.support_hours') }}</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT: CONTACT -->
            <div class="space-y-6">

                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">{{ __('app.contact.email_label') }}</h3>
                    <p class="text-gray-500">example@gmail.com</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">{{ __('app.contact.phone_label') }}</h3>
                    <p class="text-gray-500">0812-xxxx-xxxx</p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
                    <h3 class="font-semibold text-lg">{{ __('app.contact.address_label') }}</h3>
                    <p class="text-gray-500">Jl. Contoh No. 123, Surabaya, Jawa Timur</p>
                </div>

            </div>

        </div>
    </div>
</section>
</x-app-layout>