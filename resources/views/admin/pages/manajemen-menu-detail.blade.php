@extends('layouts.admin')

@section('title', 'Manajemen Detail Menu')
@section('content')
    <section id="manajemen-menu" class="content flex h-[100dvh]">
        <div class="left-side w-[65%] h-full overflow-y-auto">
            <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] bg-white z-10">
                <button data-modal-target="input-varian" data-modal-toggle="input-varian"
                    class="bg-red text-white px-4 py-2 rounded-md text-sm">+ Tambah</button>
                <select id="small"
                    class="text-sm px-4 py-2 rounded-md text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected>Pilih Filter</option>
                    <option value="US">Terbaru</option>
                    <option value="CA">Terlama</option>
                    <option value="FR">Termahal</option>
                    <option value="DE">Termurah</option>
                    <option value="DE">Terbanyak</option>
                </select>
                <form class="flex items-center ms-auto me-3">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari menu..." required />
                    </div>
                    <button type="submit"
                        class="p-2.5 ms-2 text-sm font-medium text-white bg-red rounded-lg border focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Cari</span>
                    </button>
                </form>
            </div>
            <div id="kumpulan-card-menu" class="w-full h-full flex flex-col gap-4 bg-white py-2 px-2">
                @if ($daftar_menu)
                    @foreach ($daftar_menu as $menu)
                        <div class="card-detail-menu bg-slate-100 w-full h-[50px] flex items-center px-[40px] text-black">
                            <div class="flex-1">Tambahan : {{ $menu->variant_name }}</div>
                            <div class="flex gap-4">
                                <span class="flex items-center">
                                    <i class="ri-pencil-fill text-[20px] text-grey3"></i>
                                    <p class="font-medium text-grey3">Edit</p>
                                </span>
                                <span class="flex items-center">
                                    <i class="ri-delete-bin-7-fill text-[20px] text-red "></i>
                                    <p class="font-medium text-red">Delete</p>
                                </span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="w-full flex justify-center items-center h-full">
                        <p>Data kosong</p>
                    </div>
                @endif
            </div>

        </div>
        <div class="right-side w-[35%] h-full bg-white border py-[10px] px-[10px]">
            <div class="w-full border-b pb-4">
                <button
                    class="border-2 border-red px-4 py-3 rounded-md text-red font-medium text-[14px] hover:bg-red hover:text-white">
                    + Varian Menu</button>
            </div>
            <div class="h-full flex flex-col justify-between">
                <div>
                    <h2 class="w-full py-4 text-center font-semibold text-black1">Daftar Opsi Varian</h2>
                    <table id="menu-table" class="w-full text-[14px]">
                        <tbody>
                            @for ($i = 1; $i < 7; $i++)
                                <tr class="flex w-full my-2">
                                    <td class="p-4 w-[60%]">{{ '#' . $i }} Mie Pangsit Medium</td>
                                    <td class="p-4 flex-1">100gr</td>
                                    <td class="p-4 flex-1 flex gap-2">
                                        <i class="ri-pencil-fill"></i>
                                        <i class="ri-delete-bin-7-fill"></i>
                                        {{-- <x-eos-edit class="w-6 bg-blue-800 text-white p-1 rounded-full" />
                                        <x-gmdi-delete-r class="w-6 bg-red text-white p-1 rounded-full" /> --}}
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- @include('livewire.component.modal.manajemen-varian.input-varian') --}}
    </section>
@endsection
