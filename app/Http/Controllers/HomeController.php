<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
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
    //footer contact us form
    public function contactUs(Request $request)
    {

        Mail::send('email.footermail', [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
        ], function ($mail) use ($request) {
            $mail->from(env('MAIL_FROM_ADDRESS', $request->name));
            $mail->to('kundan@thefurniturelifestyle.com')->subject('Message from footer form');
        });


        $name =  $request->name;
        $email =  $request->email;
        $message =  $request->msg;

        $s = new Contactus;
        $s->name = $name;
        $s->email = $email;
        $s->message = $message;
        $s->save();
        return back()->with('sent', 'your message has been sent successfully!')->withFragment('form-section');
    }
    //welcome page and contact page quotaion form
    public function  sendEmail(Request $request)
    {


        Mail::send('email.contactmail', [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ], function ($mail) use ($request) {
            $mail->from(env('MAIL_FROM_ADDRESS', $request->name));
            $mail->to('kundan@thefurniturelifestyle.com')->subject('contact us message');
        });
        return back()->with('message_sent', 'your message has been sent successfully!')->withFragment('contact-form');
    }
}
