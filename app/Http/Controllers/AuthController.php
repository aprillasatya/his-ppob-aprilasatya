<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        dd($request);
        // $validate = $request->validate([
        //     'email' => 'required|unique:users,email',
        //     'namadepan' => 'required',
        //     'namabelakang' => 'required',
        //     'password' => 'required',
        //     'confirm-password' => 'required|same:password'
        // ]);
    }
}
