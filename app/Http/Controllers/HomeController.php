<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use Illuminate\Support\Facades\Mail;

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
    // public function contactUs(Request $request)
    // {
    //     $contactus = Contactus::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'message'=>$request->message,
    //     ]);

    //     return Redirect('/');
    // }
    public function  sendEmail(Request $request)
    {


        Mail::send('email.contactmail', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            //'message' => $request->message,
        ], function ($mail) use ($request) {
            $mail->from(env('MAIL_FROM_ADDRESS', $request->name));
            $mail->to('kundan@thefurniturelifestyle.com')->subject('contact us message');
        });
        return back()->with('message_sent', 'your message has been sent successfully!');
    }
}
