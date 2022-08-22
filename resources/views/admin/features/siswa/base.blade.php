@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper -->
<div class="px-10 content">
    <!-- Top Content-->
        <div class="inline-flex">
            <div class="header">
                <div class="font-semibold tracking-normal cursor-default header text-6-1/2xl text-tosca-300">
                    {{ $title }}
                </div>
                <div class="mb-2 font-semibold tracking-wider cursor-default sub-header text-gray-350">
                    SMK Negeri 6 Bandung
                </div>
            </div>
            <!-- Button Tambah -->
            <form action="#">
                <div class="flex mt-10 ml-160">
                    <button class="box-border flex items-center h-12 font-semibold text-white duration-200 bg-orange-100 border border-orange-300 calendar w-50 rounded-4xl place-content-center hover:bg-orange-200">
                        <img src="../../../../Plus.svg" class="w-5 h-5 mr-2"/>
                        <span>Tambah Siswa</span>
                    </button>  
                </div>
            </form>
        </div>
        <hr>
        <!-- Bottom Content -->
        <div class="flex">
            <div class="my-8 search-container">
                <input type="text" class="h-12 text-xl font-medium border-2 border-gray-300 shadow-sm rounded-2xl w-100 focus:outline-none focus:ring focus:ring-orange-100 focus:border-orange-100 placeholder:text-gray-300" placeholder="Cari siswa">
                <button class="absolute w-16 h-12 -ml-16 duration-200 bg-orange-100 rounded-r-2xl hover:bg-orange-200">
                    <img src="../../../../Search.svg" alt="" class="mx-auto">
                </button>
            </div>
            
        </div>
</div>
@endsection