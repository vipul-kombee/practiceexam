<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEMail;
class MailController extends Controller
{
    //
    function sendEmail()
    {
        // $to_name = 'TO_NAME';
        // $to_email = 'TO_EMAIL';
        // $data = array('name'=>"Sam Jose", "body" => "Test mail");

        // Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //             ->subject('Artisans Web Testing Mail');
        //     $message->from('FROM_EMAIL','Artisans Web');
        // });
        echo "Email Sent. Check your inbox.";
        $to="devangrjoshi2003@gmail.com";
        $msg="Test email by app";
        $subject="Test email";
        Mail::to($to)->send(new WelcomeEMail($msg,$subject));

    }
    
}
