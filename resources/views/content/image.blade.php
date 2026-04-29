<x-app-layout :imageNavbar="true">

@php
    $item = isset($content) ? $content : (isset($contents) ? $contents->first() : null);
@endphp

<div class="max-w-7xl mx-auto px-4 mt-6">
    <img 
        src="{{ asset('storage/images/test.jpg') }}" 
        class="w-full h-48 md:h-72 lg:h-96 object-cover rounded-xl shadow"
        alt="{{ $item ? $item->judul : 'Banner' }}"
    >
</div>
<section class="max-w-3xl mx-auto px-4 py-10">

    {{-- JUDUL --}}
    <h1 class="text-2xl md:text-3xl font-bold mb-2">
        {{ $item ? $item->judul : 'Judul Konten' }}
    </h1>

    {{-- META --}}
    <p class="text-sm text-gray-500 mb-6">
        {{ $item && $item->created_at ? $item->created_at->format('d M Y') : '02 Apr 2026' }} • MyEvent Admin
    </p>

    {{-- ISI --}}
    <div class="space-y-4 text-gray-700 leading-relaxed text-justify">
        <p>
            {{ $item ? $item->deskripsi : 'Deskripsi konten' }}
        </p>
    </div>

</section>
@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper(".heroSwiper", {
    loop: true, autoplay: { delay: 3000 },
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" }
});

document.querySelectorAll('.mySwiper').forEach((el) => {
    new Swiper(el, {
        slidesPerView: "auto",
        spaceBetween: 16,
        navigation: {
            nextEl: el.querySelector('.swiper-button-next'),
            prevEl: el.querySelector('.swiper-button-prev'),
        }
    });
});

new Swiper(".kategoriSwiper", { slidesPerView: "auto", spaceBetween: 12 });
new Swiper(".eventKategoriSwiper", {
    slidesPerView: "auto", spaceBetween: 20,
    navigation: { nextEl: ".eventKategori-next", prevEl: ".eventKategori-prev" },
});
</script>
</x-app-layout>