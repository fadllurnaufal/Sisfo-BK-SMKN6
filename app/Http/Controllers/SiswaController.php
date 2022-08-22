<?php

namespace App\Http\Controllers;

class SiswaController extends Controller
{
    public function index(){
        return view('/admin/features/siswa.base',[
            'title' => 'Daftar Siswa'
        ]);
    }
}