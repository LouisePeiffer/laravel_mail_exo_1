<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Mail\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function store (Request $request) {
        Mail::to('louise@peiffer.com')->send(new ContactSender($request));
        return redirect()->back();
    }
}
