<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreator</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

@include('partials-image.navbar')

{{-- 🔵 BANNER --}}
<div class="w-full h-48 md:h-64 bg-gray-300 relative">
    <img src="https://picsum.photos/1200/400?random=1"
         class="w-full h-full object-cover">

    <div class="absolute -bottom-10 left-10">
        <img src="https://picsum.photos/100"
             class="w-20 h-20 rounded-full border-4 border-white shadow">
    </div>
</div>

{{-- 🔵 INFO --}}
<div class="max-w-7xl mx-auto px-4 mt-14">
    <h1 class="text-2xl font-bold">Scent of Indonesia</h1>
    <p class="text-gray-600 mt-2 max-w-2xl">
        Kreator event yang menghadirkan pengalaman unik mulai dari konser,
        workshop, hingga festival budaya Indonesia.
    </p>
</div>

{{-- 🔵 TAB --}}
<div class="max-w-7xl mx-auto px-4 mt-8 border-b">

    @php
        $tab = request('status', 'aktif');
    @endphp

    <div class="flex gap-6 text-sm font-medium">

        <a href="{{ url('/kreator?status=aktif') }}"
           class="pb-3 border-b-2
           {{ $tab == 'aktif' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            Event Aktif
        </a>

        <a href="{{ url('/kreator?status=nonaktif') }}"
           class="pb-3 border-b-2
           {{ $tab == 'nonaktif' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            Event Tidak Aktif
        </a>

    </div>
</div>

{{-- 🔵 LIST EVENT --}}
<section class="max-w-7xl mx-auto px-4 py-10">

    @php
        $events = collect(range(1, 10))->map(function ($i) {
            return [
                'name' => "Event $i",
                'status' => rand(0,1) ? 'aktif' : 'nonaktif'
            ];
        });

        // FILTER
        if(request('status')){
            $events = $events->where('status', request('status'));
        }
    @endphp

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        @forelse ($events as $event)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition">

            <img src="https://picsum.photos/400/300?random={{rand(1,100)}}"
                 class="w-full h-40 object-cover rounded-t-xl">

            <div class="p-3">

                <h3 class="font-semibold text-sm">
                    {{ $event['name'] }}
                </h3>

                <p class="text-xs mt-1
                    {{ $event['status'] == 'aktif' ? 'text-green-600' : 'text-gray-400' }}">
                    {{ $event['status'] == 'aktif' ? 'Aktif' : 'Selesai' }}
                </p>

            </div>

        </div>
        @empty

        <p class="col-span-4 text-center text-gray-500">
            Tidak ada event 😢
        </p>

        @endforelse

    </div>

</section>

<footer class="bg-gray-800 text-white text-center py-6">
    <p>© 2026 MyEvent</p>
</footer>

</body>
</html>