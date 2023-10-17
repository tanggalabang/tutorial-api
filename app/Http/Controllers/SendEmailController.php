<?php

namespace App\Http\Controllers;

use App\Mail\TestSendingEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {

        Mail::to('bambang@gmail.com')->send(new TestSendingEmail());
    }
}
