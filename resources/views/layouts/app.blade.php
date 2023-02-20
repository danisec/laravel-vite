<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-organisms.header />

    <div class="px-4">
        {{ $slot }}
    </div>

</body>

</html>
