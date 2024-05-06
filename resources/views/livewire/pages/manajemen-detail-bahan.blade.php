<section id="manajemen-detail-bahan" class=" w-full h-[100dvh] flex">
    <div class="left-side w-[65%] h-full py-[80px] px-[20px] overflow-y-auto">
        <div class="flex gap-2 items-center w-full py-4 ps-3 sticky top-[-20px] bg-white z-10">
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
        <div id="kumpulan-card-menu" class="w-full h-full flex flex-wrap justify-center flex-start gap-4">
            @for ($i = 0; $i < 17; $i++)
                <div class="card max-w-[23%] border bg-white">
                    <img src="/img/manajemen_menu/menu1.png" alt="">
                    <div class="py-4 px-4 text-center flex flex-col gap-1">
                        <p>Mie Ayam Udang</p>
                        <p>Stok : 13</p>
                        <p class="font-semibold text-[18px]">Rp 45.000</p>
                    </div>
                </div>
            @endfor
        </div>

    </div>
    <div class="right-side w-[35%] h-full bg-white border py-[80px] px-[10px]">
        <div class="w-full border-b pb-4">
            <button
                class="border-2 border-red px-4 py-3 rounded-md text-red font-medium text-[14px] hover:bg-red hover:text-white">
                + Tambahkan
                komposisi
                bahan</button>
        </div>
        <div class="h-full flex flex-col justify-between">
            <div>
                <h2 class="w-full py-4 text-center font-semibold text-black1">Daftar Komposisi Bahan</h2>
                <table id="menu-table" class="w-full text-[14px]">
                    <tbody>
                        @for ($i = 1; $i < 7; $i++)
                            <tr class="flex w-full my-2">
                                <td class="p-4 w-[60%]">{{ '#' . $i }} Mie Pangsit Medium</td>
                                <td class="p-4 flex-1">100gr</td>
                                <td class="p-4 flex-1 flex gap-2">
                                    <x-eos-edit class="w-6 bg-blue-800 text-white p-1 rounded-full" />
                                    <x-gmdi-delete-r class="w-6 bg-red text-white p-1 rounded-full" />
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            <button class="w-full mb-4 px-8 py-3 rounded-md bg-red text-white font-medium text-[14px]">Tambahkan
                komposisi
                bahan</button>
        </div>
    </div>
</section>
