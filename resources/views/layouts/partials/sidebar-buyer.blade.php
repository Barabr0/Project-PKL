<aside class="w-64 bg-blue-900 text-white border-r border-blue-800">

    {{-- LOGO --}}
    <div class="p-5 border-b border-blue-800">
        <h1 class="text-lg font-bold">
            <a href="/">Loket</a>
        </h1>
    </div>

    <nav class="p-4 space-y-1 text-sm">

        {{-- ========================= --}}
        {{-- 🔵 MODE PEMBELI --}}
        {{-- ========================= --}}
        @if(session('mode', 'buyer') == 'buyer')

            <a href="/Jelajah"
                class="block px-3 py-2 rounded-lg
                {{ request()->is('Jelajah') 
                    ? 'bg-blue-700 font-medium' 
                    : 'hover:bg-blue-800' }}">
                Jelajah
            </a>

            <a href="/tiket"
                class="block px-3 py-2 rounded-lg mt-1
                {{ request()->is('tiket') 
                    ? 'bg-blue-700 font-medium' 
                    : 'hover:bg-blue-800' }}">
                Tiket
            </a>

        @else

        {{-- ========================= --}}
        {{-- 🟣 MODE CREATOR --}}
        {{-- ========================= --}}
            <a href="/kreator"
                class="block px-3 py-2 rounded-lg
                {{ request()->is('kreator') 
                    ? 'bg-blue-700 font-medium' 
                    : 'hover:bg-blue-800' }}">
                Dashboard
            </a>

            <a href="/event/create"
                class="block px-3 py-2 rounded-lg mt-1
                {{ request()->is('event/create') 
                    ? 'bg-blue-700 font-medium' 
                    : 'hover:bg-blue-800' }}">
                Buat Event
            </a>

        @endif


        {{-- ========================= --}}
        {{-- 🔘 AKUN --}}
        {{-- ========================= --}}
        <hr class="border-blue-800 my-3">

        <p class="text-xs text-gray-400 px-2">Akun</p>

        <a href="/profile"
            class="block px-3 py-2 rounded-lg mt-1
            {{ request()->is('profile') 
                ? 'bg-blue-700 font-medium' 
                : 'hover:bg-blue-800' }}">
            Informasi Dasar
        </a>

        <a href="/setting"
            class="block px-3 py-2 rounded-lg mt-1
            {{ request()->is('setting') 
                ? 'bg-blue-700 font-medium' 
                : 'hover:bg-blue-800' }}">
            Pengaturan
        </a>


       <div class="mt-6 border-t border-blue-800 pt-4">

    <p class="text-xs text-gray-400 mb-2">Mode Akun</p>

    @if(session('mode', 'buyer') == 'buyer')

        <a href="{{ route('switch.mode', 'creator') }}"
           class="block px-3 py-2 rounded-lg text-center
                  border border-blue-500 text-blue-300
                  hover:bg-blue-700 hover:text-white transition">
            Beralih ke Creator
        </a>

    @else

        <a href="{{ route('switch.mode', 'buyer') }}"
           class="block px-3 py-2 rounded-lg text-center
                  border border-green-500 text-green-300
                  hover:bg-green-600 hover:text-white transition">
            Kembali ke Pembeli
        </a>

    @endif

</div>

    </nav>

</aside>