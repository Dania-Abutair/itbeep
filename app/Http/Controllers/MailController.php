<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendEmail(){
   $details = [
       'title' => 'Mail from Dania',
       'body'  => 'test'
   ];

     Mail::to("dania.t.abutair@gmail.com")->send(new TestMail($details));
     return "Email Sent";
    }
    
}
