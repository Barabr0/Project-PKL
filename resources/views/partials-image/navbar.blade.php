<nav class="bg-blue-900 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- LOGO --}}
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-blue-400 rounded"></div>
            <h1 class="text-xl font-bold text-white"><a href="/">LOKET</a></h1>
        </div>

        {{-- MENU TENGAH --}}
        <div class="flex-1 flex justify-center">
            <div class="flex items-center space-x-10"> 

                <a href="{{ route('blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('blog*') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    BLOG
                </a>

                <a href="{{ route('info-blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('info-blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    INFO
                </a>

                <a href="/bantuan" class="text-white font-semibold hover:text-blue-300">
                    BANTUAN
                </a>

                <a href="{{ route('event.blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('event.blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    EVENT
                </a>

                <a href="{{ route('screen.blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('screen.blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    SCREEN
                </a>

            </div>
        </div>

        {{-- KANAN (kosong / nanti bisa isi login dll) --}}
        <div class="w-20"></div>

    </div>
</nav>