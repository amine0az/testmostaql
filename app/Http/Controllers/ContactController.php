<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\TheContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
        
    }
    public function mail(ContactRequest $request)
    {
        Mail::to($request->input('email@exemple.com'))->send(new TheContactRequest($request));
        return back()->with('status', 'done');
    }
}
