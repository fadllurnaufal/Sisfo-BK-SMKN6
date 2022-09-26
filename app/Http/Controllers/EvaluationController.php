<?php

namespace App\Http\Controllers;

class EvaluationController extends Controller{
    public function index(){
        return view('/admin/features/individual', [
            'title' => 'Konseling Individu',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }

    public function group(){
        return view('/admin/features/group',[
            'title' => 'Konseling Kelompok',
            'subtitle' => 'Bimbingan Konseling SMK Negeri 6 Bandung'
        ]);
    }

    public function cases(){
        return view('/admin/features/cases',[
            'title' => 'Daftar Kasus',
            'subtitle' => 'Siswa SMK Negeri 6 Bandung'
        ]);
    }
}