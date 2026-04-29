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



@yield('content')

<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>