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
    <nav class="bg-red flex justify-between items-center py-4 px-[150px] fixed w-full">
        <img src="/img/logo/ADELA_WHITE.png" alt="s" class="w-[50px]">
        <ul class="flex gap-6 text-white">
            <a href="">Home</a>
            <a href="">About Me</a>
            <a href="">Our Promo</a>
            <a href="">Our Product</a>
        </ul>
        <a href="" class="text-black px-10 py-2 bg-white rounded-full"><i class="ri-logout-box-r-line "></i>Login</a>
    </nav>
    <section id="hero-section" class="w-full h-[90dvh] flex flex-col justify-center items-center"
        style="background-image: url('/img/landing/background.png')">
        <h1 class="text-grey5 text-[50px] font-[800]">ADELA KITCHEN</h1>
        <h3 class="text-grey5 font-thin">“Kenikmatan Makanan, Kegembiraan Hati”</h3>
        <a href="" class="text-black px-10 py-2 bg-white rounded-full mt-4">Jelajahi Produk</a>
    </section>
    <section id="about-me-section" class="flex flex-col justify-center items-center py-[100px]">
        <h2 class="px-10 py-2 bg-red text-white mb-12">Tentang Kami</h2>
        <div class="flex w-full px-[220px] items-center justify-between gap-10">
            <img src="/img/landing/about-img.png" alt="" class="w-[550px]">
            <div>
                <h3 class="text-[20px]">#Tentang Kami</h3>
                <h2 class="text-[28px] font-semibold text-black1">Kenikmatan Makanan, Kegembiraan Hati</h2>
                <p class="font-thin w-[600px]">Kami adalah perusahaan yang berdedikasi untuk memberikan pengalaman
                    kuliner yang luar biasa. Sejak didirikan pada tahun 1500-an, kami telah berkomitmen untuk menjaga
                    kualitas dan keaslian dalam setiap hidangan yang kami sajikan.</p>
                <div class="flex flex-col justify-start w-[800px] gap-4 mt-4">
                    <div class="flex">
                        <div class="flex items-center gap-2 flex-1">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>Bahan-bahan segar dan berkualitas</p>
                        </div>
                        <div class="flex items-center gap-2 flex-1">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>Resep otentik dan tradisional</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex items-center gap-2 flex-1">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>Layanan pelanggan yang ramah</p>
                        </div>
                        <div class="flex items-center gap-2 flex-1">
                            <i class="ri-checkbox-circle-fill"></i>
                            <p>Kebersihan dan higienitas yang terjamin</p>
                        </div>
                    </div>
                </div>
                <a href=""
                    class="inline-block text-red px-10 py-2 bg-white border-2 border-red rounded-full mt-4">Jelajahi
                    Produk Kami</a>
            </div>
        </div>
    </section>

    <section id="why-us-section" class="bg-[#F9F9F9] flex flex-col justify-center items-center py-[100px] px-[100px]">
        <h1 class="text-red text-[20px] font-[700]">Why Choose Us</h1>
        <h3 class="text-black1 text-[30px] font-semibold">“Dengan resep terbaik untuk makanan favoritmu”</h3>
        <div class="flex gap-32 mt-[100px]">
            <div class="text-center flex flex-col justify-center">
                <div class="h-[180px] flex items-center justify-center">
                    <img src="/img/landing/why-section/1.png" alt="">
                </div>
                <h3 class="text-black1 font-bold text-[18px]">Pengiriman Cepat</h3>
                <p class="w-[200px] text-center font-thin">Kami menjamin pengiriman cepat sehingga makanan Anda tiba
                    dalam kondisi terbaik.</p>
            </div>
            <div class="text-center flex flex-col justify-center">
                <div class="h-[180px] flex items-center justify-center">
                    <img src="/img/landing/why-section/2.png" alt="">
                </div>
                <h3 class="text-black1 font-bold text-[18px]">Bahan yang Fresh</h3>
                <p class="w-[200px] text-center font-thin">Kami hanya menggunakan bahan-bahan segar dan berkualitas
                    tinggi untuk setiap hidangan.</p>
            </div>
            <div class="text-center flex flex-col justify-center">
                <div class="h-[180px] flex items-center justify-center">
                    <img src="/img/landing/why-section/3.png" alt="">
                </div>
                <h3 class="text-black1 font-bold text-[18px]">Makanan Lezat</h3>
                <p class="w-[200px] text-center font-thin">Kami menyajikan makanan lezat yang akan memanjakan lidah Anda
                    setiap saat.</p>
            </div>
        </div>
    </section>

    <section id="best-menu-section" class="flex flex-col justify-center items-center py-[100px]">
        <img src="/img/landing/menu/daun.png" alt="">
        <h1 class="text-red text-[20px] font-[700] mt-2">Our Best Menu</h1>
        <p class="font-regular">Kami menawarkan berbagai menu terbaik yang pastinya akan menggugah selera Anda</p>
        <div class="pt-[50px] flex gap-8 w-[1200px] flex-wrap justify-center">
            <!-- Card 1 -->
            <div class="w-[250px] bg-white shadow-md border">
                <img src="/img/landing/menu/produk.png" alt="">
                <div class="px-4 py-2">
                    <p class="text-black1 font-bold text-[18px]">Bali Egg Special</p>
                    <p class="text-[14px] text-justify">Telur khas Bali dengan bumbu rempah pilihan, disajikan dengan
                        nasi hangat.</p>
                    <p class="text-semibold text-[18px] font-bold">Rp. 25.000</p>
                    <a href="" class="text-white text-center text-[14px] bg-red w-full py-2 block mt-2">Pesan
                        Sekarang</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="w-[250px] bg-white shadow-md border">
                <img src="/img/landing/menu/produk.png" alt="">
                <div class="px-4 py-2">
                    <p class="text-black1 font-bold text-[18px]">Rendang Daging Sapi</p>
                    <p class="text-[14px] text-justify">Rendang daging sapi dengan bumbu khas Padang yang kaya akan
                        rempah.</p>
                    <p class="text-semibold text-[18px] font-bold">Rp. 45.000</p>
                    <a href="" class="text-white text-center text-[14px] bg-red w-full py-2 block mt-2">Pesan
                        Sekarang</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="w-[250px] bg-white shadow-md border">
                <img src="/img/landing/menu/produk.png" alt="">
                <div class="px-4 py-2">
                    <p class="text-black1 font-bold text-[18px]">Ayam Betutu</p>
                    <p class="text-[14px] text-justify">Ayam Betutu khas Bali dengan bumbu meresap hingga ke dalam
                        daging.</p>
                    <p class="text-semibold text-[18px] font-bold">Rp. 35.000</p>
                    <a href="" class="text-white text-center text-[14px] bg-red w-full py-2 block mt-2">Pesan
                        Sekarang</a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="w-[250px] bg-white shadow-md border">
                <img src="/img/landing/menu/produk.png" alt="">
                <div class="px-4 py-2">
                    <p class="text-black1 font-bold text-[18px]">Sate Lilit</p>
                    <p class="text-[14px] text-justify">Sate lilit dengan daging ikan segar dan bumbu khas Bali yang
                        lezat.</p>
                    <p class="text-semibold text-[18px] font-bold">Rp. 30.000</p>
                    <a href="" class="text-white text-center text-[14px] bg-red w-full py-2 block mt-2">Pesan
                        Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <section id="discount-section" class="pb-[50px]">
        <div class="flex flex-col justify-center items-center py-[10px]">
            <img src="/img/landing/menu/adela-produk.png" alt="" class="w-[1100px]">
        </div>
    </section>
    <footer class="flex flex-col px-[150px] pt-[80px] pb-[30px] bg-slate-200">
        <div class="flex w-full">
            <div class="w-1/2 flex flex-col gap-3">
                <p class="text-[26px] font-bold">Adella Kitchen</p>
                <p class="w-[400px] font-thin">Website produk makanan terbaik seJember yang dikelola langsung oleh orang
                    berpengalaman</p>
                <div class="pt-2 flex gap-4">
                    <div class="bg-white w-[45px] h-[45px] flex justify-center items-center rounded-full shadow-md">
                        <i class="ri-facebook-fill text-[22px]"></i>
                    </div>
                    <div class="bg-white w-[45px] h-[45px] flex justify-center items-center rounded-full shadow-md">
                        <i class="ri-twitter-fill text-[22px]"></i>
                    </div>
                    <div class="bg-white w-[45px] h-[45px] flex justify-center items-center rounded-full shadow-md">
                        <i class="ri-instagram-fill text-[22px]"></i>
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex justify-between">
                <ul class="flex flex-col gap-4">
                    <li class="font-semibold">About</li>
                    <li>Home</li>
                    <li>About Me</li>
                    <li>Our Product</li>
                    <li>Our Promo</li>
                </ul>
                <ul class="flex flex-col gap-4">
                    <li class="font-semibold">Comunity</li>
                    <li>Events</li>
                    <li>Blog</li>
                    <li>Podcast</li>
                    <li>Invite a friend</li>
                </ul>
                <ul class="flex flex-col gap-4">
                    <li class="font-semibold">Socials</li>
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>YouTube</li>
                    <li>WhatsApp</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-300 mt-8 pt-8 flex justify-between">
            <p>©2024 Adela Kitchen. All rights reserved</p>
            <div class="flex gap-4">
                <p>Privacy & Policy</p>
                <p>Terms & Condition</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>