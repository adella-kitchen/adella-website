<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="grid grid-cols-[300px,1fr]">
    <div class="w-[300px]">
        @include('components.sidebar')
    </div>
    <div class="bg-gray-50 h-[100dvh] w-full">
        <header class="w-full border z-[9999]">
            @include('components.navbar')
        </header>
        <h1>asd</h1>
    </div>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
