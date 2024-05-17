@extends('layouts.admin')

@section('title', 'Manajemen Menu')
@section('content')
    <section class="content">
        <div class="left-side w-full h-full overflow-y-auto">
            <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] bg-white z-10">
                <button data-modal-target="input-menu" data-modal-toggle="input-menu"
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
            <div id="kumpulan-card-menu" class="w-full h-full flex flex-wrap justify-start flex-start gap-4 ">
                @foreach ($daftar_menu as $menu)
                    <a href="/admin/manajemen-menu/{{ $menu->id_menu }}"
                        class="card min-w-[180px] max-w-[200px] flex-1 border bg-white">
                        <img src="/img/manajemen_menu/menu1.png" alt="">
                        <div class="py-4 px-4 text-center flex flex-col gap-1">
                            <p>{{ $menu->menu_name }}</p>
                            <p>Stok : 13</p>
                            <p class="font-semibold text-[18px]">Rp {{ $menu->price_menu }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @include('admin.component.modal.manajemen-menu.input-menu')
@endsection
