<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Widget Event')</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

@php
    $step = $step ?? 1;
@endphp

<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

        <a href="/" class="flex items-center gap-2">
            <span class="text-blue-600 font-bold text-xl tracking-tight">🎟 MyEvent</span>
        </a>

        <div class="flex items-center gap-1 md:gap-2">

            <div class="flex items-center gap-1">
                <div class="w-6 h-6 rounded-full text-xs flex items-center justify-center font-bold
                    {{ $step > 1 ? 'bg-green-500 text-white' : ($step == 1 ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-500') }}">
                    {{ $step > 1 ? '✓' : '1' }}
                </div>
                <span class="hidden md:block text-xs font-medium
                    {{ $step == 1 ? 'text-blue-600' : ($step > 1 ? 'text-green-500' : 'text-gray-400') }}">
                    Pilih Tiket
                </span>
            </div>

            <div class="w-6 md:w-10 h-px bg-gray-300"></div>

            <div class="flex items-center gap-1">
                <div class="w-6 h-6 rounded-full text-xs flex items-center justify-center font-bold
                    {{ $step > 2 ? 'bg-green-500 text-white' : ($step == 2 ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-500') }}">
                    {{ $step > 2 ? '✓' : '2' }}
                </div>
                <span class="hidden md:block text-xs font-medium
                    {{ $step == 2 ? 'text-blue-600' : ($step > 2 ? 'text-green-500' : 'text-gray-400') }}">
                    Data Diri
                </span>
            </div>

            <div class="w-6 md:w-10 h-px bg-gray-300"></div>

            <div class="flex items-center gap-1">
                <div class="w-6 h-6 rounded-full text-xs flex items-center justify-center font-bold
                    {{ $step > 3 ? 'bg-green-500 text-white' : ($step == 3 ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-500') }}">
                    {{ $step > 3 ? '✓' : '3' }}
                </div>
                <span class="hidden md:block text-xs font-medium
                    {{ $step == 3 ? 'text-blue-600' : ($step > 3 ? 'text-green-500' : 'text-gray-400') }}">
                    Konfirmasi
                </span>
            </div>

            <div class="w-6 md:w-10 h-px bg-gray-300"></div>

            <div class="flex items-center gap-1">
                <div class="w-6 h-6 rounded-full text-xs flex items-center justify-center font-bold
                    {{ $step == 4 ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-500' }}">
                    4
                </div>
                <span class="hidden md:block text-xs font-medium
                    {{ $step == 4 ? 'text-blue-600' : 'text-gray-400' }}">
                    Checkout
                </span>
            </div>

        </div>

    </div>
</nav>

@yield('content')

<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>