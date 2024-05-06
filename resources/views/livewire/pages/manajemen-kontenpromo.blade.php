<section id="manajemen-konten" class=" w-full h-[100dvh] py-[80px] px-[20px]">
    <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] bg-white z-10">
        <button data-modal-target="input-konten" data-modal-toggle="input-konten"
            class="bg-red text-white px-4 py-2 rounded-md text-sm">+ Tambah Konten</button>
        <select id="small"
            class="text-sm px-4 py-2 rounded-md text-gray-900 border border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            <option selected>Pilih Filter</option>
            <option value="US">Terbaru</option>
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

    {{-- start card --}}
    <div id="kumpulan-card-menu" class="w-full h-full flex flex-wrap justify-center flex-start gap-4">
        @for ($i = 0; $i < 17; $i++)
            <div class="card max-w-[23%] border bg-white rounded-lg">
                <img src="/img/manajemen_menu/menu1.png" alt="" class="rounded-t-lg">
                <div class="py-4 px-4 text-center flex flex-col gap-1">
                    <p class="judul_promo" id="judul_promo" name="judul_promo"></p>
                    <p class="deskripsi_promo" id="deskripsi_promo" name="deskripsi_promo">

                    </p>
                    <div class="justify-center pt-3">
                        <button type="button" data-modal-target="edit-konten" data-modal-toggle="edit-konten"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Edit</button>
                        <button type="button"
                            class="text-white bg-rose-600 hover:bg-red focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm  px-5 py-2.5 me-2 mb-2 dark:bg-rose-600 dark:hover:bg-red focus:outline-none dark:focus:ring-rose-300">
                            Hapus</button>

                    </div>
                </div>
            </div>
        @endfor
    </div>
    {{-- end card --}}
    @include('livewire.component.input-konten')
    @include('livewire.component.edit-konten')
</section>
