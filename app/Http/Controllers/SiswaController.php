<?php

namespace App\Http\Controllers;

class SiswaController extends Controller
{
    public function index(){
        return view('/admin/features/siswa.base',[
            'title' => 'Daftar Siswa'
        ]);
    }

    public function detail(){
        return view('/admin/features/siswa.detail',[
            'title' => 'Informasi Siswa'
        ]);
    }
}