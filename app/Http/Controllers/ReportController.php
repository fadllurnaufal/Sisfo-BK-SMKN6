<?php

namespace App\Http\Controllers;

class ReportController extends Controller{
    public function index(){
        return view('/admin/features/report.jurnal',[
            'title' => 'Jurnal Harian'
        ]);
    }

    public function visit(){
        return view('/admin/features/report.visit',[
            'title' => 'Kunjungan Rumah'
        ]);
    }
}
