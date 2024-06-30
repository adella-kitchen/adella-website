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
        <div class="h-full w-2/3 bg-white shadow-md flex justify-center items-start pt-[10px]">
            <table
                class="cell-border row-border w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            Nama Karyawan
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                No Telp
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Email
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Jenis Kelamin
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Tanggal Lahir
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Role
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar_karyawan as $karyawan)
                    <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $karyawan->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $karyawan->no_telp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $karyawan->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $karyawan->jenis_kelamin }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $karyawan->tanggal_lahir }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $karyawan->role }}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
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