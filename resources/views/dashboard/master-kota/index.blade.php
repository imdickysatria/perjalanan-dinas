@extends('dashboard.layout-dashboard.main')
@section('container')
@include('dashboard.master-kota.modal-create')
@include('dashboard.master-kota.modal-edit')

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
   <h1 class="text-5xl font-bold">Master Kota</h1>
   <hr class="mt-2 mb-6">
   <div class="border-filter">
    <div class="flex items-center py-4 bg-white dark:bg-gray-800 justify-end mx-auto">
            <!-- Modal toggle -->
            <button class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-modal-target="create-kota" data-modal-toggle="create-kota" type="button">
                Create
                <svg class="w-5 h-8 ml-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                  </svg>
            </button>
    </div>
   </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kota
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Provinsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pulau
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Luar Negeri
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Latitude
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Longitude
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Bandung
                    </td>
                    <td class="px-6 py-4">
                        Jawa Barat
                    </td>
                    <td class="px-6 py-4">
                        Jawa
                    </td>
                    <td class="px-6 py-4">
                        Tidak
                    </td>
                    <td class="px-6 py-4">
                        -6.917500
                    </td>
                    <td class="px-6 py-4">
                        107.619100
                    </td>
                    <td class="px-6 py-4 inline-flex items-center">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-1" data-modal-target="edit-kota" data-modal-toggle="edit-kota">
                            <svg class="w-5 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                              </svg>
                        </a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="w-5 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                              </svg>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

 </div>

@endsection

