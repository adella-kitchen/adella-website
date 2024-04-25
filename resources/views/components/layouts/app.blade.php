<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="grid grid-cols-[300px,1fr]">
    <div class="w-[300px]">
        @include('livewire.component.sidebar', ['title' => $title])
    </div>
    <div class="bg-gray-50 w-full relative">
        <header class="w-full absolute">
            @include('livewire.component.navbar', ['title' => $title])
        </header>
        {{ $slot }}
    </div>


    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
