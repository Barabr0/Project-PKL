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
@include('partials-image.navbar')
<div class="max-w-7xl mx-auto px-4 mt-6">
    <img 
        src="https://picsum.photos/1200/400?random=11" 
        class="w-full h-48 md:h-72 lg:h-96 object-cover rounded-xl shadow"
    >
</div>
<section class="max-w-3xl mx-auto px-4 py-10">

    {{-- JUDUL --}}
    <h1 class="text-2xl md:text-3xl font-bold mb-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </h1>

    {{-- META --}}
    <p class="text-sm text-gray-500 mb-6">
        02 Apr 2026 • Winda Paramita
    </p>

    {{-- ISI --}}
    <div class="space-y-4 text-gray-700 leading-relaxed text-justify">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nunc velit, sollicitudin vel est sit amet, venenatis vulputate erat. Pellentesque eget lectus ac est elementum semper non vitae diam. In blandit, nunc sed laoreet mattis, orci lorem vehicula leo, et bibendum eros eros dictum lorem. Duis nec odio egestas, euismod massa id, iaculis orci. Aliquam feugiat maximus auctor. Quisque varius mi pellentesque, semper mauris a, faucibus neque. Aenean porta, tellus blandit laoreet bibendum, libero odio vestibulum nisi, iaculis bibendum est magna vitae ante. Sed porttitor, sem nec pharetra tempus, leo justo rutrum dolor, a ullamcorper nunc turpis eu nulla. Fusce sapien lorem, lobortis ac placerat a, condimentum id nibh. Sed sed nisi nec ipsum scelerisque convallis. Curabitur tortor sem, blandit eu justo quis, vestibulum lacinia massa.
        </p>

        <p>
            Nulla a bibendum arcu. Ut blandit, nibh et tincidunt pulvinar, ligula risus ornare velit, vel iaculis augue nulla eget nisl. Vivamus nec tempor tellus, ut sagittis mi. Fusce eu ligula sollicitudin, viverra neque at, auctor arcu. Nunc risus dolor, dignissim fermentum orci in, consequat sagittis quam. Pellentesque vel felis est. Maecenas vulputate sem in justo rhoncus scelerisque. Curabitur eget elit quis libero egestas posuere. Nam nec lorem tincidunt, suscipit nibh vitae, finibus augue.
        </p>

    </div>

</section>
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

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
</body>
</html>