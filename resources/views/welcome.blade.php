<x-app-layout>
<section class="max-w-7xl mx-auto px-4 pt-6 overflow-hidden">
  <div class="swiper heroSwiper w-full relative shadow-lg">
    <div class="swiper-wrapper">
      @foreach($contents as $content)
      <div class="swiper-slide">
        <a href="{{ route('content.image') }}">
          <img src="{{ $content->gambar ? (\Illuminate\Support\Str::startsWith($content->gambar, 'http') ? $content->gambar : asset('storage/' . $content->gambar)) : 'https://picsum.photos/1200/400?random=' . $content->id }}" alt="{{ $content->judul }}" class="w-full h-48 md:h-72 lg:h-96 object-cover">
        </a>
      </div>
      @endforeach
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
      @forelse ($popularEvents as $event)
      <div class="swiper-slide !w-56">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
          <a href="{{ route('event.detail', $event->id) }}">
            <img src="{{ $event->gambar ? (\Illuminate\Support\Str::startsWith($event->gambar, 'http') ? $event->gambar : asset('storage/' . $event->gambar)) : 'https://picsum.photos/400/300?random=' . $event->id }}" class="w-full h-32 object-cover">
            <div class="p-3"><h3 class="font-semibold text-sm">{{ $event->nama_event }}</h3></div>
          </a>
        </div>
      </div>
      @empty
      <div class="w-full py-10 text-center text-gray-500">Tidak ada event populer saat ini.</div>
      @endforelse
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

        
<div class="max-w-7xl mx-auto px-4 mt-6">
  <a href="{{ route('content.image') }}">
    @php $firstContent = $contents->first(); @endphp
    <img 
        src="{{ $firstContent && $firstContent->gambar ? (\Illuminate\Support\Str::startsWith($firstContent->gambar, 'http') ? $firstContent->gambar : asset('storage/' . $firstContent->gambar)) : 'https://picsum.photos/1200/400?random=11' }}" 
        class="w-full h-48 md:h-72 lg:h-96 object-cover rounded-xl shadow"
        alt="Banner"
    >
  </a>
</div>

<section class="max-w-7xl mx-auto px-4 py-10">

    {{-- TITLE --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Screen</h2>
        <a href="/screen/page" class="text-blue-600 text-sm">Lihat Semua</a>
    </div>

    {{-- SLIDER --}}
    <div class="swiper screenSwiper">

        <div class="swiper-wrapper">

            @forelse (array_slice($movies, 0, 10) as $movie)
            <div class="swiper-slide !w-44">

                <div class="bg-white rounded-xl shadow hover:shadow-xl transition overflow-hidden">

                    {{-- POSTER --}}
                    <a href="{{ route('screen.page', ['id' => $movie['id']]) }}">
                    <img src="{{ $movie['poster_path'] ? 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] : 'https://via.placeholder.com/300x450' }}"
                        class="w-full h-64 object-cover" alt="{{ $movie['title'] }}"></a>

                    {{-- INFO --}}
                    <div class="p-3">
                        <h3 class="text-sm font-semibold line-clamp-2" title="{{ $movie['title'] }}">
                            {{ $movie['title'] }}
                        </h3>

                        <p class="text-xs text-gray-500 mt-1">
                            Tayang • {{ \Carbon\Carbon::parse($movie['release_date'] ?? now())->format('Y') }}
                        </p>
                    </div>

                </div>

            </div>
            @empty
            <p class="text-center w-full py-10 text-gray-500">Gagal memuat film tayang.</p>
            @endforelse

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
      @forelse ($topEvents->take(3) as $key => $event)
      <div class="bg-white rounded-lg p-10 w-80 md:w-96 relative shadow flex-shrink-0">
        <div class="absolute -top-5 -left-5 bg-yellow-400 text-white text-xs px-4 py-2 rounded-full">{{ $key + 1 }}</div>
        <a href="{{ route('event.detail', $event->id) }}">
        <img src="{{ $event->gambar ? (\Illuminate\Support\Str::startsWith($event->gambar, 'http') ? $event->gambar : asset('storage/' . $event->gambar)) : 'https://picsum.photos/400/300?random=' . ($event->id + 10) }}" class="w-full h-32 object-cover">
        </a>
      </div>
      @empty
      <div class="w-full py-10 text-center text-white font-medium">Tidak ada event top saat ini.</div>
      @endforelse
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">

    <div class="bg-white rounded-2xl shadow-lg p-6">

        <h2 class="text-2xl font-bold mb-6">Kategori</h2>

        {{-- 🔥 SLIDER --}}
        <div class="swiper eventKategoriSwiper mb-8">
            <div class="swiper-wrapper">

                @foreach ($categories as $kategori)
                <div class="swiper-slide !w-48">

                    <a href="{{ route('Jelajah', ['kategori' => $kategori->slug]) }}">

                        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

                            <img src="{{ $kategori->gambar ? (\Illuminate\Support\Str::startsWith($kategori->gambar, 'http') ? $kategori->gambar : asset('storage/' . $kategori->gambar)) : 'https://picsum.photos/400/300?random=' . ($kategori->id + 20) }}"
                                 class="w-full h-32 object-cover">

                            <div class="p-3">
                                <h3 class="text-sm font-semibold capitalize">
                                    {{ $kategori->nama_kategori }}
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

            @foreach ($categories as $kategori)
            <a href="{{ route('Jelajah', ['kategori' => $kategori->slug]) }}"
               class="px-4 py-2 border rounded-full text-sm capitalize
                      hover:bg-blue-600 hover:text-white transition">

                {{ $kategori->nama_kategori }}

            </a>
            @endforeach

        </div>

    </div>

</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
    <h2 class="text-2xl font-bold mb-6">Event Healing</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @forelse ($healingEvents as $event)
        <div class="swiper-slide !w-56">
          <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
            <a href="{{ route('event.detail', $event->id) }}">
            <img src="{{ $event->gambar ? (\Illuminate\Support\Str::startsWith($event->gambar, 'http') ? $event->gambar : asset('storage/' . $event->gambar)) : 'https://picsum.photos/400/300?random=' . ($event->id + 30) }}" class="w-full h-32 object-cover">
            </a>
            <div class="p-3"><h3 class="font-semibold text-sm">{{ $event->nama_event }}</h3></div>
          </div>
        </div>
        @empty
        <div class="w-full py-10 text-center text-gray-500">Tidak ada event healing saat ini.</div>
        @endforelse
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
    <h2 class="text-2xl font-bold mb-6">Kreator Favorit</h2>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @forelse ($creators as $creator)
                <div class="swiper-slide !w-56 p-2">
                    <div class="bg-white rounded-2xl shadow hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 flex flex-col items-center p-6 group h-full">
                        
                        {{-- PHOTO --}}
                        <div class="relative mb-4">
                            <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                                <img
                                    src="{{ $creator->foto
                                        ? (\Illuminate\Support\Str::startsWith($creator->foto, 'http')
                                            ? $creator->foto
                                            : asset('storage/' . $creator->foto))
                                        : 'https://ui-avatars.com/api/?name=' . urlencode($creator->name) . '&background=random&size=150' }}"
                                    class="w-full h-full object-cover"
                                    alt="{{ $creator->name }}"
                                >
                            </div>
                        </div>

                        {{-- NAME --}}
                        <h3 class="text-base font-bold text-gray-800 text-center mb-1 line-clamp-1">
                            {{ $creator->name }}
                        </h3>
                        <p class="text-[10px] text-blue-500 font-semibold mb-4 uppercase tracking-wider">Creator</p>

                        {{-- BUTTON --}}
                        <a href="{{ route('creator.page', $creator->id) }}" 
                           class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white text-center rounded-xl text-xs font-bold transition-colors mt-auto">
                            Lihat Profil
                        </a>

                    </div>
                </div>
            @empty
                <div class="w-full text-center py-12 bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                    <p class="text-gray-500 font-medium">Tidak ada kreator favorit saat ini.</p>
                </div>
            @endforelse

        </div>

        {{-- NAVIGATION --}}
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12 overflow-hidden">
  <h2 class="text-2xl font-bold mb-6">Workshop</h2>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @forelse ($workshopEvents as $event)
      <div class="swiper-slide !w-56">
        <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full">
          <a href="{{ route('event.detail', $event->id) }}">
            <img src="{{ $event->gambar ? (\Illuminate\Support\Str::startsWith($event->gambar, 'http') ? $event->gambar : asset('storage/' . $event->gambar)) : 'https://picsum.photos/400/300?random=' . ($event->id + 50) }}" class="w-full h-32 object-cover">
          </a>
          <div class="p-3"><h3 class="font-semibold text-sm">{{ $event->nama_event }}</h3></div>
        </div>
      </div>
      @empty
      <div class="w-full py-10 text-center text-gray-500">Tidak ada workshop saat ini.</div>
      @endforelse
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<section id="populer-di" class="max-w-7xl mx-auto px-4 py-12 overflow-hidden"
    x-data="{
        selectedCity: 'Jakarta',
        allEvents: @js($eventsJson ?? []),

        filteredEvents() {
            return this.allEvents.filter(e =>
                String(e.lokasi ?? '').toLowerCase().includes(this.selectedCity.toLowerCase())
            );
        },
        initSwiper() {
            this.$nextTick(() => {
                const container = this.$refs.swiperPopuler;
                if (container.swiper) container.swiper.destroy();
                new Swiper(container, {
                    slidesPerView: 'auto',
                    spaceBetween: 16,
                    navigation: {
                        nextEl: this.$refs.nextBtn,
                        prevEl: this.$refs.prevBtn,
                    }
                });
            });
        }
    }"
    x-init="initSwiper(); $watch('selectedCity', () => initSwiper())"
>

    <!-- HEADER -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-2">
            <h2 class="text-2xl font-bold">Populer di</h2>
            <select x-model="selectedCity" 
                class="ml-3 bg-transparent text-2xl font-bold text-blue-500 border-none focus:outline-none cursor-pointer">
                <option value="Jakarta">Jakarta</option>
                <option value="Bandung">Bandung</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Yogyakarta">Yogyakarta</option>
            </select>
        </div>
    </div>

    <!-- SLIDER -->
    <div class="swiper" x-ref="swiperPopuler">
        <div class="swiper-wrapper">

            <template x-for="event in filteredEvents()" :key="event.id">
                <div class="swiper-slide !w-56">

                    <div class="bg-white rounded-xl shadow hover:shadow-xl transition h-full overflow-hidden border">
                        <a :href="event.url">
                            <img :src="event.gambar || 'https://picsum.photos/400/300?random=' + event.id" 
                                 class="w-full h-32 object-cover">
                        </a>

                        <div class="p-3">
                            <h3 class="font-semibold text-sm line-clamp-1" x-text="event.nama"></h3>
                            <p class="text-xs text-gray-500 capitalize mt-1" x-text="(event.kategori || 'Umum') + ' • ' + event.lokasi"></p>
                            <p class="text-xs font-bold text-blue-600 mt-2" 
                               x-text="'Rp ' + new Intl.NumberFormat('id-ID').format(event.harga || 0)"></p>
                        </div>
                    </div>

                </div>
            </template>

            <!-- EMPTY STATE -->
            <template x-if="filteredEvents().length === 0">
                <div class="w-full py-10 text-center text-gray-500">
                    Tidak ada event di <span x-text="selectedCity"></span>
                </div>
            </template>

        </div>

        <!-- NAVIGATION -->
        <div class="swiper-button-next" x-ref="nextBtn"></div>
        <div class="swiper-button-prev" x-ref="prevBtn"></div>
    </div>

</section>
</x-app-layout>