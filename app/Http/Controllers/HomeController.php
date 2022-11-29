<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class HomeController extends Controller
{
  
    public function index()
    {
        return view('welcome');
    }

    public function services()
    {
        return view('services');
    }
    public function contactUs(Request $request)
    {
        $contactus = Contactus::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ]);

        return Redirect('/');
    }
}
