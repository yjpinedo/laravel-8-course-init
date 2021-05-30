<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Daniela Rosado',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat possimus harum consequuntur libero sunt illum incidunt in natus, aliquam perspiciatis quis eum error inventore magnam praesentium aliquid ea eveniet unde?',
        ];
        Mail::to('admin@mail.com')->queue(new TestMail($details));
        return 'Send email';
    }
}
