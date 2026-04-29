<x-app-layout :imageNavbar="true">
<!-- STORY DETAIL -->
<section class="bg-gray-50 py-20">
<div class="max-w-6xl mx-auto px-6 space-y-20">

    <!-- SECTION 1 -->
    <div class="grid md:grid-cols-2 gap-10 items-center">
        
        <!-- IMAGE -->
        <div class="bg-gray-200 h-72 rounded-2xl"></div>

        <!-- TEXT -->
        <div>
            <h3 class="text-2xl font-bold mb-4">
                {{ __('app.career.s1_title') }}
            </h3>
            <p class="text-gray-500 leading-relaxed">
                {{ __('app.career.s1_desc') }}
            </p>
        </div>

    </div>

    <!-- SECTION 2 (zig zag) -->
    <div class="grid md:grid-cols-2 gap-10 items-center">
        
        <!-- TEXT -->
        <div class="order-2 md:order-1">
            <h3 class="text-2xl font-bold mb-4">
                {{ __('app.career.s2_title') }}
            </h3>
            <p class="text-gray-500 leading-relaxed">
                {{ __('app.career.s2_desc') }}
            </p>
        </div>

        <!-- IMAGE -->
        <div class="bg-gray-200 h-72 rounded-2xl order-1 md:order-2"></div>

    </div>

    <!-- SECTION 3 -->
    <div class="grid md:grid-cols-2 gap-10 items-center">
        
        <!-- IMAGE -->
        <div class="bg-gray-200 h-72 rounded-2xl"></div>

        <!-- TEXT -->
        <div>
            <h3 class="text-2xl font-bold mb-4">
                {{ __('app.career.s3_title') }}
            </h3>
            <p class="text-gray-500 leading-relaxed">
                {{ __('app.career.s3_desc') }}
            </p>
        </div>

    </div>

</div>
</section>
</x-app-layout>