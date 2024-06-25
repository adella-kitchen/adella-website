@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')
<section class="content flex gap-2 flex-col">
    <div class="w-full h-[120px] flex bg-white mb-2 shadow-md">
        <div class="flex-1 border-r flex gap-2 flex-col justify-center items-center">
            <p class="text-3xl font-bold text-black">Rp {{ $total_pendapatan }}</p>
            <div class="flex items-center gap-2 text-[18px] text-grey3">
                <i class="ri-money-dollar-box-fill"></i>
                <p>Jumlah Pendapatan</p>
            </div>
        </div>
        <div class="flex-1 border-r flex gap-2 flex-col justify-center items-center">
            <p class="text-3xl font-bold text-black">{{ $jumlah_pesanan }}</p>
            <div class="flex items-center gap-2 text-[18px] text-grey3">
                <i class="ri-money-dollar-box-fill"></i>
                <p>Jumlah Pesanan</p>
            </div>
        </div>
        <div class="flex-1 border-r flex gap-2 flex-col justify-center items-center">
            <p class="text-3xl font-bold text-black">{{ $jumlah_pesanan }}</p>
            <div class="flex items-center gap-2 text-[18px] text-grey3">
                <i class="ri-money-dollar-box-fill"></i>
                <p>Total Menu</p>
            </div>
        </div>
        <div class="flex-1 border-r flex gap-2 flex-col justify-center items-center">
            <p class="text-3xl font-bold text-black">{{ $total_karyawan }}</p>
            <div class="flex items-center gap-2 text-[18px] text-grey3">
                <i class="ri-money-dollar-box-fill"></i>
                <p>Karyawan</p>
            </div>
        </div>
    </div>
    <div class="h-[75dvh] flex gap-4">
        <div class="h-full w-2/3 bg-white shadow-md flex justify-center items-center">Grafik</div>
        <div class="h-full w-1/3 bg-white shadow-md p-2">
            <h3 class="w-full bg-red py-3 px-2 text-center text-white font-semibold rounded-md mb-2">Pesanan Terbaru
            </h3>
            <div class="px-6">
                @foreach ($pesanan_terbaru as $pesanan)
                <div class="card-pesanan-terbaru flex gap-4 py-3">
                    <img src="/img/manajemen_menu/menu1.jpg" alt="" class="w-[50px] h-[50px] bg-cover">
                    <div class="flex flex-col justify-center">
                        <p class="font-bold text-[18px]">Mie Gacoan lvl 2</p>
                        <P>Dipesan oleh {{ $pesanan->name }}</P>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection