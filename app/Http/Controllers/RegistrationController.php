<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index(){
        return view('/auth.registration',[
            'title' => 'Sign Up'
        ]);
    }
}