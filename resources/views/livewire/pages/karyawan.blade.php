<section class=" w-full h-[100dvh] py-[80px] px-[20px]">
<div  class="p-8 w-full h-full relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
    <button  data-modal-target="tambah-karyawan-modal" data-modal-toggle="tambah-karyawan-modal" class="rounded-[10px] hover:bg-rose-500 shadow-lg px-3 py-2 bg-red absolute right-4 text-white " > Tambah Karyawan </button>
    <table id="myTable" class="cell-border row-border w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
            <tr class="">
                <th scope="col" class="px-6 py-3" >
                    Nama Karyawan
                </th>

                <th scope="col" class="px-6 py-3 ">
                    <div class="flex items-center">
                        No Telp
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 ">
                    <div class="flex items-center">
                        Email
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 ">
                    <div class="flex items-center">
                        Jenis Kelamin
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 ">
                    <div class="flex items-center">
                        Tanggal Lahir
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3 ">
                    <div class="flex items-center">
                        Role
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="">Edit</span>
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($daftar_karyawan as $karyawan )
            <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$karyawan->name}}
                </td>
                <td class="px-6 py-4">
                    {{$karyawan->no_telp}}
                </td>
                <td class="px-6 py-4">
                    {{$karyawan->email}}
                </td>
                <td class="px-6 py-4">
                    {{$karyawan->jenis_kelamin}}
                </td>
                <td class="px-6 py-4">
                    {{$karyawan->tanggal_lahir}}
                </td>
                <td class="px-6 py-4">
                    {{$karyawan->role}}
                </td>
                <td class="px-6 py-4 text-center flex gap-[8px]">

                    <button data-id={{ $karyawan->id }} data-modal-target="edit-karyawan-modal" data-modal-toggle="edit-karyawan-modal" class="font-medium rounded-[10px] px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white dark:text-blue-500 btn-edit ">Edit</button>

                    <form action="{{ route('deleteData', $karyawan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button href="#" class="font-medium rounded-[10px] px-2 py-1 bg-red hover:bg-rose-500 text-white dark:text-blue-500 ">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@include('livewire.component.modal.EditKaryawan')
@include('livewire.component.modal.TambahKaryawan')
@include('livewire.component.modal.validations.DeleteKaryawan')

</section>
