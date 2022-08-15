<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index(){
        return view('/admin/dashboard/layouts.main',[
            'title' => 'Dashboard'
        ]);
    }
}