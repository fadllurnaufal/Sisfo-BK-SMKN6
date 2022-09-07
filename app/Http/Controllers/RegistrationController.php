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

    public function save(Request $request){
        $validatedData = $request -> validate([
            'username' => 'required|max:24|unique:users|min:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/');
    }
}