@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper -->
<div class="w-full">
    <!-- Top Content-->
    <div class="flex justify-between">
        <div class="mb-5">
            <!-- Header -->
            <div class=" relative font-semibold tracking-normal cursor-default text-6-1/2xl text-tosca-300">
                {{ $title }}
            </div>
            <!-- Sub-header -->
            <div class="mb-2 font-semibold tracking-wider cursor-default text-gray-350">
                SMK Negeri 6 Bandung
            </div>
        </div>
        <!-- Modal toggle tambah-->
        <div class="mt-10">
            <button class="box-border flex items-center h-11 font-semibold text-white duration-200 bg-orange-100 border border-orange-300 calendar w-50 rounded-4xl place-content-center shadow-sm hover:bg-orange-200" type="button" data-modal-toggle="add-modal">
                <img src="../../../../Plus.svg" class="w-5 h-5 mr-2"/>
                <span>Tambah Data</span>
            </button>
        </div>
    </div>
    <hr>
    <!-- /Top Content -->

    <!-- Bottom Content -->
    <div class="my-10">            
        <!-- Table content -->
        <div class="table-container">
            <section class="container mx-auto font-sans">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                        <thead>
                            <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3 text-center">No</th>
                                <th class="px-4 py-3 text-center">Tanggal Kegiatan</th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Sasaran Kegiatan
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Kegiatan Layanan
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Hasil yang Dicapai
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">Guru Pembimbing</th>
                                <th class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $id = 1;
                            @endphp
                            @if ($dtjurnal->count())
                                @foreach ($dtjurnal as $jurnal)
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border text-center">
                                            {{ $id++ }}
                                        </td>
                                        <td class="px-4 py-3 text-ms font-semibold border text-center">
                                            {{ $jurnal->tanggal }}
                                        </td>
                                        <td class="px-4 py-3 text-sm border">{{ $jurnal->sasaran_kegiatan }}</td>
                                        <td class="px-4 py-3 text-sm border">{{ $jurnal->layanan_kegiatan }}</td>
                                        <td class="px-4 py-3 text-sm border">{{ $jurnal->hasil_kegiatan }}</td>
                                        <td class="px-4 py-3 text-sm border">{{ $jurnal->guru }}</td>
                                        <td class="px-4 py-3 text-sm border">
                                            <div class="flex justify-center ">
                                                <button class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200 cursor-pointer" type="button" data-modal-toggle="edit-modal">
                                                    <img src="../../../../Edit.svg" alt="">
                                                </button>
                                                <a href="../siswa/detail" class="w-7 h-7 bg-green-200 border-green-400 border p-1 rounded-md mx-1 hover:bg-green-500 duration-200" >
                                                    <img src="../../../../About.svg" alt="">
                                                </a>
                                                <button class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="button" data-modal-toggle="delete-modal">
                                                    <img src="../../../../Trash.svg" alt="">
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        </table>
                            <div class="my-5 mx-5">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Bottom Content -->
    
    <!-- Modal content -->

    <!-- Main modal tambah -->
        <div id="add-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
            <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-1 mt-5 text-center text-4xl font-medium text-tosca-300 dark:text-white">Jurnal Harian</h3>
                    <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                    <hr>
                    <form class="space-y-6 my-5" action="{{ route('jurnal.store.jurnal') }}" method="POST">
                        @csrf
                        <div class="mx-4 mb-5">
                            <label for="tanggal" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
                            <div class="relative ">
                                <input type="date" name="tanggal" id="tanggal" class="border border-gray-300 text-gray-900 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-7 p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50">
                                <div class="flex absolute inset-y-0 left-2 items-center pr-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>                                        </div>
                                </div>
                                <label for="sasaran_kegiatan" class="text-xs text-gray-400">Sasaran Kegiatan :</label>
                                <input type="text" name="sasaran_kegiatan" id="sasaran_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                <label for="layanan_kegiatan" class="text-xs text-gray-400">Kegiatan Layanan :</label>
                                <textarea type="text" name="layanan_kegiatan" id="layanan_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                <label for="hasil_kegiatan" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                <textarea type="text" name="hasil_kegiatan" id="hasil_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200 align-text-top" required=""> </textarea>
                                <div class="flex mb-5 justify-between w-full">
                                    <div class="mr-2">
                                        <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="guru" id="guru" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                    <div class="pt-7 ml-2">
                                        <button type="submit" class="w-full h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm py-2.5 px-3 text-center">Simpan Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>

        <!-- Main modal edit -->
        <div id="edit-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
            <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-1 mt-5 text-center text-4xl font-medium text-tosca-300 dark:text-white">Jurnal Harian</h3>
                    <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                    <hr>
                    <form class="space-y-6 my-5" action="#">
                        <div class="mx-4 mb-5">
                            <label for="date" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
                            <div class="relative ">
                                <input datepicker type="date" class="border border-gray-300 text-gray-900 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50">
                                <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>                                        
                                </div>
                                <label for="sasaran" class="text-xs text-gray-400">Sasaran Kegiatan :</label>
                                <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                <label for="layanan" class="text-xs text-gray-400">Kegiatan Layanan :</label>
                                <textarea type="text" name="layanan" id="kelas" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                <textarea type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200 align-text-top" required=""> </textarea>
                                <div class="flex mb-5 justify-between w-full">
                                    <div class="mr-2">
                                        <label for="date" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="date" id="date" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                    <div class="pt-7 ml-2">
                                        <button type="submit" class="w-full h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm py-2.5 px-3 text-center">Simpan Data</button>
                                    </div>
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