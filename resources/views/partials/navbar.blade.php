<div class="bg-blue-800 font-semibold text-white text-sm py-2 px-6 flex justify-end items-center gap-4">
    <a href="{{ route('buat-event') }}" class="hover:text-blue-300">
        {{ __('app.navbar.create_event') }}
    </a>
    <a href="{{ route('biaya') }}" class="hover:text-blue-300">
        {{ __('app.navbar.biaya') }}
    </a>
    <a href="{{ route('blog') }}" class="hover:text-blue-300">
        {{ __('app.navbar.blog') }}
    </a>
    <a href="{{ route('bantuan') }}" class="hover:text-blue-300">
        {{ __('app.navbar.bantuan') }}
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
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center">

        {{-- LOGO --}}
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-blue-400 rounded"></div>
            <h1 class="text-xl font-bold text-white">
                <a href="/">Loket</a>
            </h1>
        </div>

        {{-- SEARCH --}}
        <div class="hidden md:block w-1/3 mx-6">
            <input type="text" placeholder="{{ __('app.navbar.search_placeholder') }}"
                class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white">
        </div>

        {{-- MENU --}}
        <div class="ml-auto flex items-center space-x-6">

            {{-- 🔥 MENU TENGAH --}}
            <div class="flex items-center space-x-6">

                {{-- GUEST --}}
                @guest
                    <h1 class="text-white font-semibold">
                        <a href="/Jelajah">{{ __('app.navbar.jelajah') }}</a>
                    </h1>
                    <h1 class="text-white font-semibold">
                        <a href="/login">{{ __('app.navbar.tiket') }}</a>
                    </h1>
                @endguest

                {{-- AUTH --}}
                @auth
                    @php
                        $mode = session('mode') ?? 'buyer';
                    @endphp

                    @if($mode == 'creator')
                        <h1 class="text-white font-semibold">
                            <a href="/Jelajah">{{ __('app.navbar.jelajah') }}</a>
                        </h1>
                        <h1 class="text-white font-semibold">
                            <a href="/event/create">{{ __('app.navbar.create_event') }}</a>
                        </h1>

                    @else
                        <h1 class="text-white font-semibold">
                            <a href="/Jelajah">{{ __('app.navbar.jelajah') }}</a>
                        </h1>
                        <h1 class="text-white font-semibold">
                            <a href="/tiket">{{ __('app.navbar.tiket_saya') }}</a>
                        </h1>
                    @endif
                @endauth

            </div>

            {{-- 🔥 AUTH BUTTON / PROFILE --}}
            <div class="flex items-center space-x-4">

                {{-- GUEST --}}
                @guest
                    <a href="/login" class="text-white hover:text-blue-300">{{ __('app.navbar.login') }}</a>
                    <a href="/register" class="bg-white text-blue-900 px-4 py-2 rounded hover:bg-gray-200">{{ __('app.navbar.register') }}</a>
                @endguest

                {{-- AUTH --}}
                @auth
                @php
                    $mode = session('mode') ?? 'buyer';
                @endphp

                <div class="relative group">
                    <div class="flex items-center gap-2 cursor-pointer p-2">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>

                    <div class="absolute right-0 w-44 bg-white rounded-lg shadow-lg 
                                invisible opacity-0 group-hover:visible group-hover:opacity-100 
                                transition-all duration-300 ease-in-out z-50">

                        <div class="h-2 w-full bg-transparent -mt-2"></div>

                        {{-- CREATOR --}}
                        @if($mode == 'creator')
                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.dashboard') }}</a>
                            <a href="{{ route('creator.event') }}" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.event_saya') }}</a>
                            <a href="{{ route('creator.access') }}" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.kelola_akses') }}</a>
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.informasi_dasar') }}</a>
                            <a href="/profile/legal-information" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.informasi_legal') }}</a>
                            <a href="/profile/bank" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.informasi_bank') }}</a>
                            <a href="/setting" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.pengaturan') }}</a>

                        {{-- BUYER --}}
                        @else
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.informasi_dasar') }}</a>
                            <a href="/tiket" class="block px-4 py-2 hover:bg-gray-100">{{ __('app.navbar.tiket') }}</a>
                        @endif

                        <form method="POST" action="/logout">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100">
                                {{ __('app.navbar.logout') }}
                            </button>
                        </form>
                    </div>
                </div>
                @endauth

            </div>
        </div>
    </div>
</nav>