<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    //
    public function login(Request $request)
    {
        return "hello";
    }
    public function register_show()
    {
        return view('auth.register');
    }
}
