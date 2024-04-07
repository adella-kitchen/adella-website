<section id="manajemen-bahan" class=" w-full h-[100dvh] flex">
    <div class="left-side w-[65%] h-full py-[80px] px-[20px] overflow-y-auto">
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
                class="border-2 border-red px-8 py-3 rounded-md text-red font-medium text-[14px] hover:bg-red hover:text-white">Tambahkan
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
