<?php

namespace App\Http\Controllers;

use App\Subscribers;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $name =  $request->name;
        $email =  $request->email;

        $s = new Subscribers;
        $s->name = $name;
        $s->email = $email;
        $s->save();
        return back();
    }

    public function show(subscribers $subscribers)
    {
        //
    }

    public function edit(subscribers $subscribers)
    {
        //
    }

    public function update(Request $request, subscribers $subscribers)
    {
        //
    }

    public function destroy(subscribers $subscribers)
    {
        //
    }
}
