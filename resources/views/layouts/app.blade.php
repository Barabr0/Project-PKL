<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body class="bg-gray-100">

{{-- NAVBAR --}}
<nav class="bg-blue-900 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center">

        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-blue-400 rounded"></div>
            <h1 class="text-xl font-bold text-white"><a href="//">Loket</a></h1>
        </div>

        <div class="hidden md:block w-1/3 mx-6">
            <input type="text" placeholder="Cari event..."
                class="w-full px-4 py-2 rounded-lg bg-white/10 text-white placeholder-white/70">
        </div>

        <div class="ml-auto flex items-center space-x-6">

            <div class="flex items-center space-x-6">
                <a href="/jelajah" class="text-white font-semibold hover:text-blue-300">Jelajah</a>
                <a href="#" class="text-white font-semibold hover:text-blue-300">Tiket</a>
            </div>

            <div class="flex items-center space-x-4">
                @guest
                    <a href="/login" class="text-white">Login</a>
                    <a href="/register" class="bg-white text-blue-900 px-4 py-2 rounded">Register</a>
                @endguest

                @auth
                <div class="relative group">
                    <div class="flex items-center gap-2 cursor-pointer p-2">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>

                    <div class="absolute right-0 w-40 bg-white rounded shadow
                        invisible opacity-0 group-hover:visible group-hover:opacity-100 transition">

                        <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">
                            Profile
                        </a>

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

{{-- CONTENT --}}
<main>
    {{ $slot }}
</main>

{{-- FOOTER --}}
<footer class="bg-gray-800 text-white text-center py-6 mt-10">
    <p>© 2026 MyEvent. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>