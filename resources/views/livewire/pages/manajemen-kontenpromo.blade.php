<section id="manajemen-konten" class="w-full h-[100dvh] py-[80px] px-[20px] bg-inherit">
    <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] z-10 shadow-sm">
        <button data-modal-target="input-konten" data-modal-toggle="input-konten"
            class="border font-semibold bg-white border-transparent text-black px-4 py-2 text-sm focus:ring-blue-500">+
            Tambah</button>
        <select id="small"
            class="text-sm px-4 py-2 text-gray-900 border border-transparent bg-white dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
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
            @endforeach ($i = 0; $i < 8; $i++) <div
                class="card p-7 border border-grey2 bg-grey6 rounded-lg flex flex-col">
                {{-- top side --}}
                <div class="flex">
                    <div class="w-1/4 mr-4">
                        <div class="border-dotted border-grey1 border-2 rounded-lg">
                            <div class="p-2">
                                <div class="bg-contain">
                                    <img class="rounded-lg" src="{{ asset('img/manajemen-konten/menu1.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/admin/manajemen-konten/{{ $promo->id_promo }}">
                        <div class="w-3/4 flex flex-col justify-between">
                            <div class=" mb-4 flex items-center">
                                {{-- Input judul konten --}}
                                <input class="border border-[2px] mr-4 border-grey4 p-4 w-full rounded-lg text-left"
                                    placeholder="Masukan judul konten">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(109, 109, 109, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                                                </path>
                                                <path
                                                    d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z">
                                                </path>
                                            </svg>
                                        </div>
                                        {{-- Input Mulai --}}
                                        <input name="mulai" type="text"
                                            class="bg-gray-50 border border-grey4 text-grey2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Mulai">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(109, 109, 109, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z">
                                                </path>
                                                <path
                                                    d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z">
                                                </path>
                                            </svg>
                                        </div>
                                        {{-- Input Selesai --}}
                                        <input name="selesai" type="text"
                                            class="bg-gray-50 border border-grey4 text-grey2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Selesai">
                                    </div>
                                </div>
                            </div>
                            {{-- Input Deskripsi Konten --}}
                            <input class="border border-[2px] border-grey4 p-4 w-full h-full rounded-lg text-left   "
                                placeholder="Masukan deskripsi konten">
                        </div>
                    </a>
                </div>
                {{-- bottom side --}}
                <div class="mt-5 flex justify-between items-center">
                    <button
                        class="border w-1/4 bg-white border-grey2 py-2 font-medium text-grey2 hover:bg-grey2 hover:text-white">Upload</button>
                    <div class="flex items-center">
                        <button class="flex px-4 py-2 text-white rounded-md bg-green hover:bg-green2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path
                                    d="M5 21h14a2 2 0 0 0 2-2V8l-5-5H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zM7 5h4v2h2V5h2v4H7V5zm0 8h10v6H7v-6z">
                                </path>
                            </svg>
                            <a class="ml-2" href="">Simpan</a>
                        </button>
                        <button class="flex px-4 ml-2 py-2 text-white rounded-md bg-red hover:bg-red3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                                <path
                                    d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z">
                                </path>
                            </svg>
                            <a class="ml-2" href="">Hapus</a>
                        </button>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
    </div>
    {{-- end card --}}
    @include('livewire.component.input-konten')
    @include('livewire.component.edit-konten')
</section>
