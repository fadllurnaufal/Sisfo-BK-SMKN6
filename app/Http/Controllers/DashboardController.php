<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
class DashboardController extends Controller
{
    public function index(){
        $jml_siswa = Siswa::all()->count();
        return view('/admin/features/dashboard',[
            'title' => 'Dashboard'
        ])->with('jml_siswa', $jml_siswa);
    }
}