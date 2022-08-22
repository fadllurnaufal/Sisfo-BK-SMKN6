@extends('admin.layouts.app')
@section('content')
    <div class="pl-10 content">
        <!-- Top Content -->
        <div class="flex">
            <div class= "top-left-content">
                <div class="font-semibold tracking-wide cursor-default text-6-1/2xl header text-tosca-300">
                    {{ $title }}
                </div>
                <div class="mb-2 font-semibold tracking-wider cursor-default sub-header text-gray-350 ">
                    Counseling Guidance Menu 
                    <hr class="absolute mt-2 w-116">
                </div>
            </div>
            <!-- Button  Top -->
            <div class="flex mt-10 ml-100 right-top-content ">
                <div class="calendar h-14 w-44 bg-orange-100 box-border border-orange-300 border text-center py-3.5 text-white font-semibold text-lg rounded-xl hover:cursor-default">
                    <div id="date-time">
                        <script>
                            const zeroFill = n => {
                                return ('0' + n).slice(-2);
                            }
                                const interval = setInterval(() => {
                                const now = new Date();
                                const dateTime = zeroFill(now.getUTCDate()) + '-' + zeroFill((now.getMonth() + 1)) + '-' + now.getFullYear();
                                document.getElementById('date-time').innerHTML = dateTime;
                            }, 1000);
                        </script>
                    </div> 
                </div>
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="h-14 w-68 ml-3 text-tosca-300 bg-white border-2 border-gray-300 rounded-xl hover:bg-gray-100 font-medium text-lg px-4 py-2.5 text-center inline-flex items-center place-content-center duration-200" type="button">
                    <img src="../../../../user-tosca.png" class="w-10 h-10 p-1 m-2 bg-gray-100 border border-gray-300 rounded-2xl" alt="">
                    <span class="ml-2">
                        Username
                    </span>
                    <svg class="w-4 h-4 ml-12" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 shadow w-44 rounded-xl" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                    <ul class="py-1 text-lg duration-200 rounded-xl hover:bg-gray-100" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="flex px-4 py-2 text-tosca-300">
                                <img src="../../../../Gear.svg" class="pl-3 mx-2.5">
                                Setting
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bottom Content Wrapper -->
        <div class="flex mb-10 w-116">
            <!-- Bottom Left Content -->
            <ul class="mt-10 ">
                <li>
                    <a href="../siswa/base" class="box-border inline-flex h-24 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../Name.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Daftar Siswa</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">SMKN 6 Bandung</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../Book.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Jurnal Harian</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">Bimbingan Konseling</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../Home-page.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Kunjungan Rumah</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../Confusion.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Konseling Individu</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                    </a>
                </li>
                <li>
                    <a chref="#" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../Management.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Konseling Kelompok</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                        <img src="../../../../No-entry.svg" class="my-auto ml-4 w-14 h-14">
                        <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Daftar Kasus</span>
                        <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                    </a>
                </li>
            </ul>
            <div class="bottom-right-content">
                <div class="ml-24 border-2 border-gray-300 rounded-lg report-percentage w-157 h-72">
                    <div class="px-8 py-5">
                        <span class="text-3xl font-semibold tracking-wider cursor-default text-black-50">Report Percentage</span>
                        <hr class="mt-3">
                    </div>
                    <div class="flex justify-between mx-8 report-box-wrap place-content-center">
                        <div class="pl-4 bg-orange-100 border border-orange-300 rounded-lg shadow-md left-box w-68 h-39">
                            <div class="mt-4 text-xl font-bold tracking-wide text-white">Jumlah Siswa</div>
                            <span class="text-sm font-medium text-white">SMKN 6 Bandung</span>
                            <div class="float-right mt-5 mr-5 text-center bg-white rounded-full cursor-default w-18 h-18">
                                <div class="py-5 font-sans text-2xl font-semibold text-black-50">72%</div> 
                            </div>
                        </div>
                        <div class="pl-4 text-white border rounded-lg shadow-md right-box w-68 h-39 bg-tosca-300 border-tosca-400">
                            <div class="mt-4 text-xl font-bold tracking-wide text-white">Jumlah Kasus</div>
                            <span class="text-sm font-medium text-white">SMKN 6 Bandung</span>
                            <div class="float-right mt-5 mr-5 text-center bg-white rounded-full cursor-default w-18 h-18">
                                <div class="py-5 font-sans text-2xl font-semibold text-black-50">72%</div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bottom Right Content -->
                <div class="float-right mt-8 border-2 border-gray-300 rounded-lg chart w-157 h-121">
                    <div class="flex justify-between px-8 pt-8">
                        <span class="text-3xl font-semibold tracking-wider cursor-default text-black-50">Counseling Chart</span>
                        <button id="filterChart" data-dropdown-toggle="filter" class="inline-flex items-center px-4 text-center duration-200 bg-white border-2 border-gray-300 h-9 w-38 text-tosca-300 rounded-xl hover:bg-gray-100" type="button">
                            <span class="text-sm">
                                1-6 Month
                            </span>
                            <svg class="w-4 h-4 ml-8" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="filter" class="z-10 hidden bg-white divide-y divide-gray-100 shadow h-9 w-38 rounded-xl" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                            <ul class="py-1 duration-200 rounded-xl hover:bg-gray-100" aria-labelledby="filterChart">
                                <li>
                                    <a href="#" class="flex py-1 text-sm place-content-center text-tosca-300">
                                        <span>1-12 Month</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection