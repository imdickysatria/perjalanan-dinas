@extends('dashboard.layout-dashboard.main')
@section('container')
@include('dashboard.pengajuan-perdin.modal-show')

<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
   <h1 class="text-5xl font-bold">Pengajuan Perdin</h1>
   <hr class="mt-2 mb-6">



<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="pengajuan-tab" data-tabs-target="#pengajuan" type="button" role="tab" aria-controls="pengajuan" aria-selected="false">Pengajuan Baru</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="history-tab" data-tabs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">History Pengajuan</button>
        </li>
    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="pengajuan" role="tabpanel" aria-labelledby="profile-tab">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
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
                            Walker
                        </td>
                        <td class="px-6 py-4">
                            Lorem ipsum
                        </td>
                        <td class="px-6 py-4">
                            Lorem, ipsum.
                        </td>
                        <td class="px-6 py-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quia.
                        </td>
                        <td class="px-6 py-4 inline-flex items-center">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-1" data-modal-target="show-pengajuan" data-modal-toggle="show-pengajuan">
                                <svg class="w-5 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                  </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="history" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Walker
                        </td>
                        <td class="px-6 py-4">
                            lorem
                        </td>
                        <td class="px-6 py-4">
                            lorem 2
                        </td>
                        <td class="px-6 py-4">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias ab incidunt non? Beatae inventore architecto exercitationem reprehenderit nobis iusto quasi.
                        </td>
                        <td class="px-6 py-4 inline-flex items-center">
                            <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                Reject
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>





 </div>

@endsection

