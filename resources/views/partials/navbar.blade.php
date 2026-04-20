<div class="bg-blue-800 font-semibold text-white text-sm py-2 px-6 flex justify-end items-center">
        <a href="/creator-create" class="hover:text-blue-300 mr-4">Buat Event</a>
        <a href="/biaya" class="hover:text-blue-300 mr-4">Biaya</a>
        <a href="/blog" class="hover:text-blue-300 mr-4">Blog</a>
        <a href="/bantuan" class="hover:text-blue-300 mr-4">Bantuan</a>
</div>
<nav class="bg-blue-900 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-blue-400 rounded"></div>
            <h1 class="text-xl font-bold text-white"><a href="/ ">Loket</a></h1>
        </div>

        <div class="hidden md:block w-1/3 mx-6">
            <input type="text" placeholder="Cari event..." class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white">
        </div>

        <div class="ml-auto flex items-center space-x-6">
            <div class="flex items-center space-x-6">
                        @if(session('mode', 'buyer') == 'creator')

    {{-- MODE CREATOR --}}
    <h1 class="text-white font-semibold hover:text-blue-300 cursor-pointer"><a href="/Jelajah" class="{{ request()->is('Jelajah') ? 'bg-blue-700 text-white font-medium' : 'hover:bg-blue-800' }}">Jelajah</a></h1>
    <h1 class="text-white font-semibold hover:text-blue-300 cursor-pointer"><a href="/event/create" class="{{ request()->is('event/create') ? 'bg-blue-700 text-white font-medium' : 'hover:bg-blue-800' }}">Buat Event</a></h1>

@else

    {{-- MODE PEMBELI --}}
    <h1 class="text-white font-semibold hover:text-blue-300 cursor-pointer"><a href="/Jelajah" class="{{ request()->is('Jelajah') ? 'bg-blue-700 text-white font-medium' : 'hover:bg-blue-800' }}">Jelajah</a></h1>
    <h1 class="text-white font-semibold hover:text-blue-300 cursor-pointer"><a href="/tiket" class="{{ request()->is('tiket') ? 'bg-blue-700 text-white font-medium' : 'hover:bg-blue-800' }}">Tiket saya</a></h1>

@endif
            </div>

            <div class="flex items-center space-x-4">
                @guest
                    <a href="/login" class="text-white hover:text-blue-300">Login</a>
                    <a href="/register" class="bg-white text-blue-900 px-4 py-2 rounded hover:bg-gray-200">Register</a>
                @endguest

                @auth
<div class="relative group">
    <div class="flex items-center gap-2 cursor-pointer p-2">
        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>
    </div>

    <div class="absolute right-0 w-40 bg-white rounded-lg shadow-lg 
                invisible opacity-0 group-hover:visible group-hover:opacity-100 
                transition-all duration-300 delay-150 ease-in-out z-50">
        
        <div class="h-2 w-full bg-transparent -mt-2"></div>
        @if(session('mode', 'buyer') == 'creator')
        <a href="/dashboard" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Dashboard
        </a>
        <a href="/event" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Event saya
        </a>
        <a href="/access-creator" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Kelola akses
        </a>
        <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Informasi Dasar
        </a>
        <a href="/profile/legal-information" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Informasi Legal
        </a>
        <a href="/profile/bank" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Informasi Bank
        </a>
        <a href="/setting" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Pengaturan
        </a>
        @else
        <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Informasi Dasar
        </a>
        <a href="/tiket" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-t-lg">
            Tiket
        </a>
        @endif
        <form method="POST" action="/logout">
            @csrf
            <button class="w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 rounded-b-lg">
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