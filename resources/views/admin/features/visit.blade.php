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
                Bimbingan Konseling SMK Negeri 6 Bandung
            </h3>
        </div>
        <hr>
        <!-- Bottom Content -->
        <div class="flex justify-between my-8">
            <!-- Search Content -->
            <div class="flex mt-8 mb-4 justify-between">
                <!-- Search Content -->
                <form action="{{ route('visit.index') }}" method="GET">
                    <div class= "">
                        <input type="search" name="search" id="search" value="{{ request('search') }}" onclick="this.value=''" class="h-12 text-lg font-medium border-2 border-gray-300 shadow-sm rounded-2xl w-100 focus:ring-0 focus:ring-orange-100 focus:border-orange-100 placeholder:text-gray-300" placeholder="Cari siswa">
                        <button class="absolute w-16 h-12 -ml-16 duration-200 bg-orange-100 rounded-r-2xl hover:bg-orange-200">
                            <img src="../../../../Search.svg" alt="" class="mx-auto">
                        </button>
                    </div>
                </form>
            </div>   
            <!-- Filter Content -->
            <div class="filter-container flex">
                <!-- Filter Kelas -->
                <div class="filter-class">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-flex items-center h-10 ml-3 font-medium text-gray-400 duration-200 bg-white border-2 border-gray-300 shadow-sm justify-evenly w-33 rounded-xl hover:bg-gray-100 place-content-center" type="button">
                        <span class="ml-2 mr-6">
                            Kelas
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Filter menu class -->
                    <div id="dropdown" class="z-10 hidden" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 10
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 11
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 12
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Semua
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="filter-major">
                    <button id="dropdownMajor" data-dropdown-toggle="dropdown-major" class="inline-flex items-center h-10 ml-3 font-medium text-gray-400 duration-200 bg-white border-2 border-gray-300 shadow-sm justify-evenly w-40 rounded-xl hover:bg-gray-100 place-content-center" type="button">
                        <span class="ml-2 mr-6">
                            Jurusan
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Filter menu major -->
                    <div id="dropdown-major" class="z-10 hidden" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul aria-labelledby="dropdownMajor">
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    DPIB
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Pengelasan
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TAV
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TITL
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TKRO
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TPM
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table content -->
        <div class="">
            <section class="container mx-auto font-sans">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                        <thead>
                            <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3 text-center">No</th>
                                <th class="px-4 py-3 text-center">NIS</th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        @sortablelink('Nama Siswa')
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Kelas
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Jurusan
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                </div></th>
                                <th class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $id = 1;
                            @endphp
                            @if ($dtsiswa->count())
                                @foreach ($dtsiswa as $siswa)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border text-center">
                                        {{ $id++ }}
                                    </td>
                                    <td class="px-4 py-3 text-ms font-semibold border text-center">
                                        {{ $siswa->nis }}
                                    </td>
                                    <td class="px-4 py-3 text-xs border">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-black capitalize">{{ $siswa->nama }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm border text-center">{{ $siswa->kelas }}</td>
                                    <td class="px-4 py-3 text-sm border text-center">{{ $siswa->jurusan }}</td>
                                    <td class="px-4 py-3 text-sm border text-center">
                                        <div class="flex justify-center ">
                                            <button class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200" type="button" data-modal-toggle="tambah-modal">
                                                <img src="../../../../PlusBlack.svg" alt="">
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
                                {{ $dtsiswa->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Modal content -->
            <!-- Main modal tambah -->
            <div id="tambah-modal" tabindex="-1" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center mt-10" aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-fit h-full overflow-y-scroll mt-20 mb-20  md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-2xl h-200 shadow w-200 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="tambah-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-4xl font-semibold text-tosca-300 tracking-wider">Kunjungan Rumah</h3>
                            <h6 class="mb-4 text-center text-xs font-semibold text-gray-400 tracking-wider">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                            <hr>
                            <form class="space-y-6 my-5" action="#">
                                <div class="mx-4 mb-5">
                                    <div class="flex justify-between">
                                        <div>
                                            <label for="date" class="text-xs text-gray-400">Bidang Layanan :</label>
                                            <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        </div>
                                        <div>
                                            <label for="sasaran" class="text-xs text-gray-400">Fungsi Layanan :</label>
                                            <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            <label for="date" class="text-xs text-gray-400">Topik/ Permasalahan :</label>
                                            <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        </div>
                                        <div>
                                            <label for="sasaran" class="text-xs text-gray-400">Pihak yang Terlibat :</label>
                                            <input type="text" name="sasaran" id="sasaran" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        </div>
                                    </div>
                                    <label for="layanan" class="text-xs text-gray-400">Tujuan Kegiatan :</label>
                                    <textarea type="text" name="layanan" id="kelas" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Gambaran Ringkasan Masalah :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Alamat Kunjungan :</label>
                                    <input type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Hari/Tanggal dan lama kunjungan :</label>
                                    <input type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Anggota keluarga yang dikunjungi :</label>
                                    <input type="text" name="hasil" id="jurusan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                    <label for="hasil" class="text-xs text-gray-400">Rencana Evaluasi :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Tindak Lanjut :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Catatan Khusus :</label>
                                    <textarea type="text" name="hasil" id="jurusan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                </div>
                                <div class="flex mx-4 mb-5 justify-between">
                                    <div class="">
                                        <label for="date" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="date" id="date" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                    <div class="pt-7">
                                        <button type="submit" class="w-32 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Simpan Data</button>
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

