<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>@yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


</head>

<body>
    <nav class="bg-red flex justify-between items-center py-4 px-[150px]">
        <img src="/img/logo/ADELA_WHITE.png" alt="s" class="w-[50px]">
        <ul class="flex gap-6 text-white">
            <a href="">Home</a>
            <a href="">About Me</a>
            <a href="">Our Promo</a>
            <a href="">Our Product</a>
        </ul>
        <a href="" class="text-black px-10 py-2 bg-white rounded-full"><i class="ri-logout-box-r-line "></i>Login</a>
    </nav>
    <section id="hero-section" class="w-full h-[85dvh] flex flex-col justify-center items-center"
        style="background-image: url('/img/landing/background.png')">
        <h1 class="text-grey5 text-[50px] font-[800]">ADELA KITCHEN</h1>
        <h3 class="text-grey5 font-thin">“Kenikmatan Makanan, Kegembiraan Hati”</h3>
        <a href="" class="text-black px-10 py-2 bg-white rounded-full mt-4">Jelajahi Produk</a>
    </section>
    <section class="flex flex-col justify-center items-center py-[100px]">
        <h2 class="px-10 py-2 bg-red text-white mb-12">About Me</h2>
        <div class="flex items-center gap-8">
            <img src="/img/landing/about-img.png" alt="" class="w-[450px]">
            <div>
                <h3>#Tentang Kami</h3>
                <h2 class="text-[24px] font-semibold text-black1">Kenikmatan Makanan, Kegembiraan Hati</h2>
                <p class="font-thin w-[600px]">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem
                    Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <div class="flex items-center justify-start gap-20">
                    <div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>sadasda</p>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>sadasda</p>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>sadasda</p>
                        </div>
                        <div class="flex items-center justify-center gap-2">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>sadasda</p>
                        </div>
                    </div>
                </div>
                <a href=""
                    class="inline-block text-red px-10 py-2 bg-white border-2 border-red rounded-full mt-4">Jelajahi
                    Produk</a>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>