<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscriptiontRequest;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

class SampleController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function store(SubscriptiontRequest $request)
    {
        dd($request->email, $request->description);
    }


    public function emails()
    {
        Mail::to('kodir@kelas10.com')->send(new UserRegisteredMail());
        
        return ('OK');
    }

    public function checkemails()
    {
        //cara mengecek isi email markdown cukup
        return new UserRegisteredMail();
    }
}
