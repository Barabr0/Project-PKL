<nav class="bg-white-900 text-dark shadow-md">

    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- 🔵 KIRI (MENU) --}}
        <div class="flex items-center gap-8">
            <div class="flex gap-6 text-sm font-medium">
                <label for=""><h2 class="text-sm font-semibold capitalize">
                    {{ request()->segment(1) }}
                </h2></label>
            </div>

        </div>


        {{-- 🟢 KANAN (PROFILE) --}}
        <div class="relative">

            {{-- ICON --}}
            <div class="group cursor-pointer">

                <div class="w-9 h-9 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                {{-- DROPDOWN --}}
                <div class="absolute right-0 mt-2 w-52 bg-white text-gray-700 rounded-lg shadow-lg
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible
                            transition duration-200 z-50">

                    {{-- biar gak keputus hover --}}
                    <div class="h-2"></div>

                    <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">
                        Profile
                    </a>

                    {{-- SWITCH MODE --}}
                    @if(session('mode', 'buyer') == 'buyer')
                        <a href="{{ route('switch.mode', 'creator') }}"
                           class="block px-4 py-2 text-blue-600 hover:bg-gray-100">
                            Masuk ke Creator
                        </a>
                    @else
                        <a href="{{ route('switch.mode', 'buyer') }}"
                           class="block px-4 py-2 text-green-600 hover:bg-gray-100">
                            Kembali ke Pembeli
                        </a>
                    @endif

                    <hr>

                    <form method="POST" action="/logout">
                        @csrf
                        <button class="w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>

                </div>

            </div>

        </div>

    </div>

</nav>