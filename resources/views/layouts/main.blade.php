<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Loket')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#16a34a',
                        soft: '#f3f4f6'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-soft text-gray-800">

<div class="flex h-screen">

    {{-- 🔥 SIDEBAR DINAMIS --}}
    @if(session('mode', 'buyer') == 'creator')

        @include('layouts.partials.sidebar-creator')

    @else

        @include('layouts.partials.sidebar-buyer')

    @endif


    <div class="flex-1 flex flex-col">



        <main class="p-6 overflow-y-auto">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>