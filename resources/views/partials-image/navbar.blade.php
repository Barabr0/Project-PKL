<div class="bg-blue-800 font-semibold text-white text-sm py-2 px-6 flex justify-end items-center gap-4">
    <a href="{{ route('buat-event') }}" class="hover:text-blue-300">
        {{ __('Buat Event') }}
    </a>
    <a href="{{ route('biaya') }}" class="hover:text-blue-300">
        {{ __('Biaya') }}
    </a>
    <a href="{{ route('blog') }}" class="hover:text-blue-300">
        {{ __('Blog') }}
    </a>
    <a href="{{ route('bantuan') }}" class="hover:text-blue-300">
        {{ __('Bantuan') }}
    </a>

    {{-- Language Switcher --}}
    <div x-data="{ open: false }" class="relative ml-2">
        <button @click="open = !open" class="flex items-center gap-1 hover:text-blue-300 focus:outline-none uppercase border border-white/20 rounded px-2 py-0.5 text-xs">
            <span>{{ app()->getLocale() }}</span>
            <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             @click.away="open = false" 
             class="absolute right-0 mt-2 w-20 bg-white rounded-md shadow-lg py-1 z-[60] text-gray-800 font-medium">
            <a href="{{ route('lang.switch', 'id') }}" class="block px-3 py-1.5 hover:bg-gray-100 {{ app()->getLocale() == 'id' ? 'text-blue-600 bg-blue-50' : '' }}">ID</a>
            <a href="{{ route('lang.switch', 'en') }}" class="block px-3 py-1.5 hover:bg-gray-100 {{ app()->getLocale() == 'en' ? 'text-blue-600 bg-blue-50' : '' }}">EN</a>
        </div>
    </div>
</div>

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
                    {{ __('BLOG') }}
                </a>

                <a href="{{ route('info-blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('info-blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    {{ __('INFO') }}
                </a>

                <a href="/bantuan" class="text-white font-semibold hover:text-blue-300">
                    {{ __('BANTUAN') }}
                </a>

                <a href="{{ route('event.blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('event.blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    {{ __('EVENT') }}
                </a>

                <a href="{{ route('screen.blog') }}" class="text-white font-semibold hover:text-blue-300 {{ request()->routeIs('screen.blog') ? 'text-blue-400 border-b-2 border-blue-400' : '' }}">
                    {{ __('SCREEN') }}
                </a>

            </div>
        </div>

        {{-- KANAN (kosong / nanti bisa isi login dll) --}}
        <div class="w-20"></div>

    </div>
</nav>