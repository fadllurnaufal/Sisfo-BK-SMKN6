<?php

namespace App\Http\Controllers;

class LoginController extends Controller{
    public function profile(){
        return view('/admin.profile',[
            'title' => 'Profile'
        ]);
    }
}