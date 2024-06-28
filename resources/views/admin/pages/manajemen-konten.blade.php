@extends('layouts.admin')

@section('title', 'Manajemen Konten')
@section('content')
<section id="manajemen-konten" class="content">
    <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] z-10 shadow-sm">
        <button data-modal-target="input-konten" data-modal-toggle="input-konten"
            class="border font-medium bg-red border-transparent text-white rounded-md px-4 py-2 text-sm focus:ring-blue-500">+
            Tambah</button>
        <select id="small"
            class="text-sm px-4 py-2 text-gray-900 border border-gray-300 rounded-md bg-white dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            <option selected>Terbaru</option>
            <option value="CA">Terlama</option>
            <option value="FR">Termahal</option>
            <option value="DE">Termurah</option>
            {{-- <option value="DE">Terbanyak</option> --}}
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
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari menu..." required />
            </div>
        </form>
    </div>

    {{-- start card --}}
    <div class="bg-white rounded-sm px-5 overflow-y-auto h-full">
        <div class="justify-center align-middle text-center font-medium text-xl py-7">Daftar Konten Promo</div>
        <div class="grid gap-4">
            @foreach ($daftar_promo as $promo)
            <form action="/admin/manajemen-konten/update-konten/{{ $promo->id_promo }}" method="POST">
                @csrf
                <div
                    class="card-promo bg-gray-50 w-full h-[250px] px-[30px] py-[20px] border border-grey4 rounded-lg flex gap-4">
                    <div class="left-promo w-[300px]">
                        <div class="border border-dashed border-grey4 w-full h-[200px] p-2">
                            <img src="/img/manajemen_menu/menu1.jpg" alt="" class="w-full h-full">
                        </div>
                        <input type="image" src="" alt="" class="w-full">
                    </div>
                    <div class="right-promo flex-1 flex flex-col gap-4">
                        <div class="flex">
                            <input class="border mr-4 border-grey4 px-4 py-3 w-full rounded-lg text-left"
                                placeholder="Masukan judul konten" value="{{ $promo->judul_promo }}"
                                name="judul_promo_card">
                            <div class="h-full">
                                <div id="date-range-picker" date-rangepicker class="flex items-center h-full">
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-start" name="mulai_promo_card" type="text"
                                            class="py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Mulai" value="{{ $promo->mulai_promo }}">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-end" name="selesai_promo_card" type="text"
                                            class="py-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Selesai" value="{{ $promo->selesai_promo }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <textarea class="border mr-4 border-grey4 px-4 py-3 w-full h-[500px] rounded-lg text-left"
                            placeholder="Masukan judul konten"
                            name="deskripsi_promo_card">{{ old('deskripsi_promo') ?? $promo->deskripsi_promo }}</textarea>

                        <div class="flex justify-end">
                            <div class="flex items-center">
                                <button class="flex px-4 py-2 text-white rounded-md bg-green hover:bg-green2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="M5 21h14a2 2 0 0 0 2-2V8l-5-5H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zM7 5h4v2h2V5h2v4H7V5zm0 8h10v6H7v-6z">
                                        </path>
                                    </svg>
                                    <p class="ml-2">Simpan</p>
                                </button>
                                <button class="flex px-4 ml-2 py-2 text-white rounded-md bg-red hover:bg-red3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z">
                                        </path>
                                    </svg>
                                    <a class="ml-2"
                                        href="/admin/manajemen-konten/delete-konten/{{ $promo->id_promo }}">Hapus</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    {{-- end card --}}
    @include('admin.component.modal.manajemen-konten-promo.input-konten')
    @include('admin.component.modal.manajemen-konten-promo.edit-konten')
</section>
@endsection