<div class="bg-blue-800 font-semibold text-white text-sm py-2 px-6 flex justify-end items-center">
    <a href="{{ route('creator.create') }}" class="hover:text-blue-300 mr-4">Buat Event</a>
    <a href="/biaya" class="hover:text-blue-300 mr-4">Biaya</a>
    <a href="/blog" class="hover:text-blue-300 mr-4">Blog</a>
    <a href="/bantuan" class="hover:text-blue-300 mr-4">Bantuan</a>
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
            <input type="text" placeholder="Cari event..."
                class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white">
        </div>

        {{-- MENU --}}
        <div class="ml-auto flex items-center space-x-6">

            {{-- 🔥 MENU TENGAH --}}
            <div class="flex items-center space-x-6">

                {{-- GUEST --}}
                @guest
                    <h1 class="text-white font-semibold">
                        <a href="/Jelajah">Jelajah</a>
                    </h1>
                    <h1 class="text-white font-semibold">
                        <a href="/login">Tiket</a>
                    </h1>
                @endguest

                {{-- AUTH --}}
                @auth
                    @php
                        $mode = session('mode') ?? 'buyer';
                    @endphp

                    @if($mode == 'creator')
                        <h1 class="text-white font-semibold">
                            <a href="/Jelajah">Jelajah</a>
                        </h1>
                        <h1 class="text-white font-semibold">
                            <a href="/event/create">Buat Event</a>
                        </h1>

                    @else
                        <h1 class="text-white font-semibold">
                            <a href="/Jelajah">Jelajah</a>
                        </h1>
                        <h1 class="text-white font-semibold">
                            <a href="/tiket">Tiket saya</a>
                        </h1>
                    @endif
                @endauth

            </div>

            {{-- 🔥 AUTH BUTTON / PROFILE --}}
            <div class="flex items-center space-x-4">

                {{-- GUEST --}}
                @guest
                    <a href="/login" class="text-white hover:text-blue-300">Login</a>
                    <a href="/register" class="bg-white text-blue-900 px-4 py-2 rounded hover:bg-gray-200">Register</a>
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
                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            <a href="{{ route('creator.event') }}" class="block px-4 py-2 hover:bg-gray-100">Event saya</a>
                            <a href="{{ route('creator.access') }}" class="block px-4 py-2 hover:bg-gray-100">Kelola akses</a>
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">Informasi Dasar</a>
                            <a href="/profile/legal-information" class="block px-4 py-2 hover:bg-gray-100">Informasi Legal</a>
                            <a href="/profile/bank" class="block px-4 py-2 hover:bg-gray-100">Informasi Bank</a>
                            <a href="/setting" class="block px-4 py-2 hover:bg-gray-100">Pengaturan</a>

                        {{-- BUYER --}}
                        @else
                            <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">Informasi Dasar</a>
                            <a href="/tiket" class="block px-4 py-2 hover:bg-gray-100">Tiket</a>
                        @endif

                        <form method="POST" action="/logout">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @endauth

            </div>
        </div>
    </div>
</nav>