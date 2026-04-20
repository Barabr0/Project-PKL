<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp Event</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @vite('resources/css/app.css')

    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden; /* Mencegah geser kanan di seluruh device */
        }
        .swiper.mySwiper {
            overflow: visible;
        }
        .swiper.heroSwiper {
            overflow: hidden;
            border-radius: 1rem;
        }
        .swiper-pagination-bullet { background: white; opacity: 0.7; }
        .swiper-pagination-bullet-active { background: white; opacity: 1; }
    </style>
</head>

<body class="bg-gray-100 antialiased">

@include('partials.navbar')

<section class="max-w-7xl mx-auto px-4 pt-6 overflow-hidden">
  <div class="swiper heroSwiper w-full relative shadow-lg">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><a href="/content-image"><img src="https://picsum.photos/1200/400?random=11" class="w-full h-48 md:h-72 lg:h-96 object-cover"></a></div>
      <div class="swiper-slide"><a href="/content-image"><img src="https://picsum.photos/1200/400?random=12" class="w-full h-48 md:h-72 lg:h-96 object-cover"></a></div>
      <div class="swiper-slide"><a href="/content-image"><img src="https://picsum.photos/1200/400?random=13" class="w-full h-48 md:h-72 lg:h-96 object-cover"></a></div>
    </div>
    <div class="swiper-button-next hero-next"></div>
    <div class="swiper-button-prev hero-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
  <h2 class="text-2xl font-bold mb-6">Event Populer</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @for ($i = 1; $i <= 10; $i++)
      <div class="swiper-slide !w-56">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
          <a href="/event-image">
            <img src="https://picsum.photos/400/300?random={{$i}}" class="w-full h-32 object-cover">
            <div class="p-3"><h3 class="font-semibold text-sm">Event {{$i}}</h3></div>
          </a>
        </div>
      </div>
      @endfor
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

        
<div class="max-w-7xl mx-auto px-4 mt-6">
  <a href="/content-image">
    <img 
        src="https://picsum.photos/1200/400?random=11" 
        class="w-full h-48 md:h-72 lg:h-96 object-cover rounded-xl shadow"
    >
  </a>
</div>

<section class="max-w-7xl mx-auto px-4 py-10">

    {{-- TITLE --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Screen</h2>
        <a href="/screen-page" class="text-blue-600 text-sm">Lihat Semua</a>
    </div>

    {{-- SLIDER --}}
    <div class="swiper screenSwiper">

        <div class="swiper-wrapper">

            @for ($i = 1; $i <= 10; $i++)
            <div class="swiper-slide !w-44">

                <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                    {{-- POSTER --}}
                    <a href="/screen-page">
                    <img src="https://picsum.photos/300/450?random={{$i}}"
                        class="w-full h-64 object-cover"></a>

                    {{-- INFO --}}
                    <div class="p-3">
                        <h3 class="text-sm font-semibold line-clamp-2">
                            Film {{$i}}
                        </h3>

                        <p class="text-xs text-gray-500 mt-1">
                            Action • 120 menit
                        </p>
                    </div>

                </div>

            </div>
            @endfor

        </div>

        {{-- NAVIGATION --}}
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-6 pb-16">
  <h2 class="text-2xl font-bold mb-6">Event Top</h2>
  <div class="w-full h-auto md:h-80 rounded-xl bg-gradient-to-r from-blue-500 to-purple-600 p-6 overflow-x-auto">
    <div class="flex gap-4 min-w-max">
      @for ($i = 1; $i <= 3; $i++)
      <div class="bg-white rounded-lg p-10 w-80 md:w-96 relative shadow flex-shrink-0">
        <div class="absolute -top-5 -left-5 bg-yellow-400 text-white text-xs px-4 py-2 rounded-full">{{$i}}</div>
        <a href="/event-image">
        <img src="https://picsum.photos/400/300?random={{$i+50}}" class="w-full h-32 object-cover">
        </a>
      </div>
      @endfor
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">

    <div class="bg-white rounded-2xl shadow-lg p-6">

        <h2 class="text-2xl font-bold mb-6">Kategori</h2>

        @php 
        $kategori = ['musik','seminar','workshop','olahraga','festival','teknologi']; 
        @endphp

        {{-- 🔥 SLIDER --}}
        <div class="swiper eventKategoriSwiper mb-8">
            <div class="swiper-wrapper">

                @foreach ($kategori as $i => $item)
                <div class="swiper-slide !w-48">

                    <a href="{{ route('Jelajah', ['kategori' => $item]) }}">

                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                            <img src="https://picsum.photos/400/300?random={{$i+20}}"
                                 class="w-full h-32 object-cover">

                            <div class="p-3">
                                <h3 class="text-sm font-semibold capitalize">
                                    {{ $item }}
                                </h3>
                            </div>

                        </div>

                    </a>

                </div>
                @endforeach

            </div>

            <div class="swiper-button-next eventKategori-next"></div>
            <div class="swiper-button-prev eventKategori-prev"></div>
        </div>

        {{-- 🔵 CHIP --}}
        <div class="flex gap-2 flex-wrap">

            @foreach ($kategori as $item)
            <a href="{{ route('Jelajah', ['kategori' => $item]) }}"
               class="px-4 py-2 border rounded-full text-sm capitalize
                      hover:bg-blue-600 hover:text-white transition">

                {{ $item }}

            </a>
            @endforeach

        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
    <h2 class="text-2xl font-bold mb-6">Event Healing</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @for ($i = 1; $i <= 10; $i++)
        <div class="swiper-slide !w-56">
          <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
            <a href="/event-image">
            <img src="https://picsum.photos/400/300?random={{$i+30}}" class="w-full h-32 object-cover">
            </a>
            <div class="p-3"><h3 class="font-semibold text-sm">Event {{$i}}</h3></div>
          </div>
        </div>
        @endfor
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
  <h2 class="text-2xl font-bold mb-6">Event Kreator</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @for ($i = 1; $i <= 10; $i++)
      <div class="swiper-slide !w-56 flex justify-center">
        <a href="/creator-page">
          <img src="https://picsum.photos/400/300?random={{$i+40}}" class="w-40 h-40 object-cover rounded-full mx-auto">
        </a>
      </div>
      @endfor
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
  <h2 class="text-2xl font-bold mb-6">Workshop</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @for ($i = 1; $i <= 10; $i++)
      <div class="swiper-slide !w-56">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
          <a href="/event-image">
            <img src="https://picsum.photos/400/300?random={{$i+60}}" class="w-full h-32 object-cover">
          </a>
          <div class="p-3"><h3 class="font-semibold text-sm">Event {{$i}}</h3></div>
        </div>
      </div>
      @endfor
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
  <div class="flex items-center justify-between mb-6">
    <div class="flex items-center gap-2">
     <h2 class="text-2xl font-bold">Populer di</h2>
     <select class="ml-3 bg-transparent text-2xl font-bold text-blue-500 border-none ring-0 focus:outline-none">
      <option>Jakarta</option>
      <option>Bandung</option>
      <option>Surabaya</option>
      <option>Yogyakarta</option>
     </select>
    </div>
  </div>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @for ($i = 1; $i <= 10; $i++)
      <div class="swiper-slide !w-56">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
          <a href="/event-image">
            <img src="https://picsum.photos/400/300?random={{$i+70}}" class="w-full h-32 object-cover">
          </a>
          <div class="p-3"><h3 class="font-semibold text-sm">Event {{$i}}</h3></div>
        </div>
      </div>
      @endfor
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<footer class="bg-gray-800 text-white text-center py-6">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
new Swiper(".heroSwiper", {
    loop: true, autoplay: { delay: 3000 },
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" }
});

// Inisialisasi semua mySwiper secara dinamis agar navigasinya tidak tertukar
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
new Swiper(".screenSwiper", {
    slidesPerView: "auto",
    spaceBetween: 16,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
new Swiper(".eventKategoriSwiper", {
    slidesPerView: "auto",
    spaceBetween: 16,
    navigation: {
        nextEl: ".eventKategori-next",
        prevEl: ".eventKategori-prev",
    },
});

new Swiper(".kategoriSwiper", {
    slidesPerView: "auto",
    spaceBetween: 10,
});
</script>
</body>
</html>