@extends('layouts.admin')

@section('title', 'Pesanan')
@section('content')
    <section class="content">
        @include('admin.component.tab-order')
        <div class="p-8 w-full h-full relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
            {{-- comfirmed --}}
            <table id="table-confirmed"
                class=" cell-border row-border w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            Order Number
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Date
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Status
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Total
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Note
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="">Action</span>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar_order_confirmed as $order)
                        <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $order->order_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_total }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->note }}
                            </td>
                            <td class="px-6 py-4 text-center flex gap-[8px]">

                                <button data-id={{ $order->id_number }} data-modal-target="edit-karyawan-modal"
                                    data-modal-toggle="edit-karyawan-modal"
                                    class="font-medium rounded-[10px] px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white dark:text-blue-500 btn-edit "><i
                                        class="ri-check-line"></i></button>
                                <form id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                        id="deleteButton{{ $order->id_number }}" type="button"
                                        class="font-medium rounded-[10px] px-2 py-1 bg-red hover:bg-rose-500 text-white dark:text-blue-500"><i
                                            class="ri-close-line"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- uncomfirm --}}
            <table id="table-unconfirm"
                class="cell-border row-border w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white bg-gray-600 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            Order Number
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Date
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Status
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Order Total
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 ">
                            <div class="flex items-center">
                                Note
                                <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                    </svg></a>
                            </div>
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="">Action</span>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar_order_unconfirm as $order)
                        <tr class=" bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $order->order_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_total }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->note }}
                            </td>
                            <td class="px-6 py-4 text-center flex gap-[8px]">
                                <form id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button data-modal-target="deleteModal" data-modal-toggle="deleteModal"
                                        id="deleteButton{{ $order->id_number }}" type="button"
                                        class="font-medium rounded-[10px] px-2 py-1 bg-red hover:bg-rose-500 text-white dark:text-blue-500"><i
                                            class="ri-delete-bin-7-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
