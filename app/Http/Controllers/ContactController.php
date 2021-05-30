<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendEmailByGmail(Request $request)
    {
        $detailts = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('pinedo.yeimer@gmail.com')->send(new ContactMail($detailts));
        return back()->with('status', 'El correo fue enviando con éxito!');
    }
}
