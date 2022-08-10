<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('/signup-page.index',[
            'title' => 'Sign Up'
        ]);
    }
}