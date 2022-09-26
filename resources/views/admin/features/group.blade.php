@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper -->
<div class="w-full">
    <!-- Top Content-->
        <div class="mb-5">
            <!-- Header -->
            <h1 class=" relative font-semibold tracking-normal cursor-default text-6-1/2xl text-tosca-300 w-157">
                {{ $title }}
            </h1>
            <!-- Sub-header -->
            <h3 class="mb-2 font-semibold tracking-wider cursor-default text-gray-350">
                {{ $subtitle }}
            </h3>
        </div>
        <hr>
        <!-- Table content -->
        <div class="my-10">
            <table class="table-fixed border-collapse border border-slate-500">
                <thead>
                    <tr class="">
                        <th class="border-2 border-orange-100 bg-orange-100 w-20 h-10 text-white cursor-default">No</th>
                        <th class="border-2 border-orange-100 bg-orange-100 w-60 h-10 text-white cursor-default">Tanggal</th>
                        <th class="border-2 border-orange-100 bg-orange-100 w-157 h-10 text-white cursor-default">Nama Siswa</th>
                        <th class="border-2 border-orange-100 bg-orange-100 w-80 h-10 text-white cursor-default">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-2 border-gray-50 bg-gray-50 py-2 text-center">1</td>
                        <td class="border-2 border-gray-50 bg-gray-50 py-2 text-center">22/08/2022</td>
                        <td class="border-2 border-gray-50 bg-gray-50 py-2 text-center">Muhammad Naufal Fadllur Rohman</td>
                        <td class="border-2 border-gray-50 bg-gray-50 py-2 text-center">
                            <div class="flex justify-center ">
                                <button class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200" type="button" data-modal-toggle="tambah-modal">
                                    <img src="../../../../PlusBlack.svg" alt="">
                                </button>
                                <button class="w-7 h-7 bg-green-200 border-green-400 border p-1 rounded-md mx-1 hover:bg-green-500 duration-200" type="button" data-modal-toggle="detail-modal">
                                    <img src="../../../../About.svg" alt="">
                                </button>
                                <button class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="button" data-modal-toggle="delete-modal">
                                    <img src="../../../../Trash.svg" alt="">
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Modal content -->
            <!-- Main modal tambah -->
            <div id="tambah-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white h-150 w-full rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="tambah-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white">Laporan Konseling Kelompok</h3>
                            <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                            <hr>
                            <form class="space-y-6 my-5" action="#">
                                <div class="mx-4 mb-5">
                                    <label for="date" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
                                    <div class="relative">
                                        <input datepicker type="text" class="border border-gray-300 text-gray-900 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50 cursor-default">
                                        <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </div>
                                    </div>
                                    <label for="sasaran" class="text-xs text-gray-400">Pertemuan ke- :</label>
                                    <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    <label for="layanan" class="text-xs text-gray-400">Waktu :</label>
                                    <input type="text" name="layanan" id="kelas" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Tempat :</label>
                                    <input type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Pendekatan dan teknik konseling yang digunakan :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                </div>
                                <div class="flex mx-4 mb-5 justify-between">
                                    <div class="">
                                        <label for="date" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="date" id="date" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-40 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                    <div class="pt-7">
                                        <button type="submit" class="w-36 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm p-auto text-center border border-orange-100 duration-200">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Main Modal Edit -->
            <div id="detail-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white h-150 w-full rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="detail-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white">Laporan Konseling Kelompok</h3>
                            <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                            <hr>
                            <form class="space-y-6 my-5" action="#">
                                <div class="mx-4 mb-5">
                                    <label for="date" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
                                    <div class="relative">
                                        <input datepicker type="text" class="border border-gray-300 text-gray-900 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50 cursor-default">
                                        <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </div>
                                    </div>
                                    <label for="sasaran" class="text-xs text-gray-400">Pertemuan ke- :</label>
                                    <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    <label for="layanan" class="text-xs text-gray-400">Waktu :</label>
                                    <input type="text" name="layanan" id="kelas" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Tempat :</label>
                                    <input type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Pendekatan dan teknik konseling yang digunakan :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                </div>
                                <div class="flex mx-4 mb-5 justify-between">
                                    <div class="">
                                        <label for="date" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="date" id="date" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-40 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Main modal delete -->
            <div id="delete-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus nya?</h3>
                            <button data-modal-toggle="delete-modal" type="button" class="text-white bg-tosca-300 hover:bg-tosca-200 focus:ring-4 focus:outline-none focus:ring-tosca-300 font-medium rounded-3xl text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Ya, saya yakin
                            </button>
                            <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak, batalkan</button>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection