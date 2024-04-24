<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    
    <title>{{ $title ?? 'Page Title' }}</title>
    
    
</head>

<body class="grid grid-cols-[300px,1fr]">
    <div class="w-[300px]">
        @include('livewire.component.sidebar')
    </div>
    <div class="bg-gray-50 w-full relative">
        <header class="w-full z-[9999] absolute">
            @include('livewire.component.navbar')
        </header>
        {{ $slot }}
    </div>
    
    <script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            info: false,
            paging: false,
           
        });
        
        
    });
</script>
    
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
