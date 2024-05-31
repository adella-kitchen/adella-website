@extends('layouts.admin')

@section('title', 'Manajemen Konten')
@section('content')
    <section id="manajemen-konten" class="w-full h-[100dvh] py-[80px] px-[20px] bg-inherit">
        <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] z-10 shadow-sm">
            <button data-modal-target="input-konten" data-modal-toggle="input-konten"
                class="border font-semibold bg-white border-transparent text-black px-4 py-2 text-sm focus:ring-blue-500">
                + Tambah
            </button>
        </div>

        <div class="bg-white rounded-sm px-5 overflow-y-auto h-full">
            <div class="justify-center align-middle text-center font-medium text-xl py-7">Daftar Konten Promo</div>
            <div class="grid gap-4">
                @foreach ($data_promo as $promo)
                    <div class="card p-7 border border-grey2 bg-grey6 rounded-lg flex flex-col">
                        <div class="flex">
                            <div class="w-1/4 mr-4">
                                <div class="border-dotted border-grey1 border-2 rounded-lg">
                                    <div class="p-2">
                                        <div class="bg-contain">
                                            <img src="{{ asset('img/manajemen-konten/menu1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-3/4 flex flex-col justify-between">
                                <div class=" mb-4 flex items-center">
                                    <input class="border border-[2px] mr-4 border-grey4 p-4 w-full rounded-lg text-left"
                                        value="{{ $promo->judul_promo }}" readonly>

                                    <div date-rangepicker class="flex items-center">
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                                                </svg>
                                            </div>
                                            <input type="text" name="tgl_mulai"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Mulai" value="{{ $promo->tgl_mulai }}" readonly>
                                        </div>
                                        <span class="mx-4 text-gray-500">to</span>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                                                </svg>
                                            </div>
                                            <input name="tgl_selesai" type="text"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Selesai" value="{{ $promo->tgl_selesai }}" readonly>
                                        </div>
                                    </div>


                                </div>
                                <textarea class="border border-[2px] border-grey4 p-4 w-full h-full rounded-lg text-left" readonly>{{ $promo->deskripsi_promo }}</textarea>
                            </div>
                        </div>
                        <div class="mt-5 flex justify-between items-center">
                            <button
                                class="border w-1/4 bg-white border-grey2 py-2 font-medium text-grey2 hover:bg-grey2 hover:text-white">Upload</button>
                            <div class="flex items-center">
                                <button class="flex px-4 py-2 text-white rounded-md bg-green hover:bg-green2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path d=" M5 21h14a2 2 0 0 0 2-2V8l-5-5H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zM7
                                                                        5h4v2h2V5h2v4H7V5zm0 8h10v6H7v-6z">
                                        </path>
                                    </svg>
                                    <a class="ml-2" href="">Simpan</a>
                                </button>
                                <button class="flex px-4 ml-2 py-2 text-white rounded-md bg-red hover:bg-red3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                        <path
                                            d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z">
                                        </path>
                                    </svg>
                                    <a class="ml-2" href="{{ route('promo.delete', ['id_promo' => $promo->id_promo]) }}"
                                        id="delete">Hapus</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    @include('admin.component.modal.manajemen-konten-promo.input-konten')
@endsection
