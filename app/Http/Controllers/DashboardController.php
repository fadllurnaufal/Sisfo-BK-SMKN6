<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use App\Models\Cases;
class DashboardController extends Controller
{
    public function index(){
        $jml_siswa = Siswa::all()->count();
        $jml_cases = Cases::all()->count();
        return view('/admin/features/dashboard',[
            'title' => 'Dashboard'
        ])->with('jml_siswa', $jml_siswa)->with('jml_cases', $jml_cases);
    }

    public function profile(){
        return view('/admin/features.profile',[
            'title' => 'Profile'
        ]);
    }
}