<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateContactForm as validateContact;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('contactenos');
    }

    public function send(validateContact $request)
    {
        $data = array(
            'name'      =>  $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'comment' => $request->input('comment'),
        );

        $mail_to = "anonymousma4@gmail.com";
        Mail::to($mail_to)->send(new SendMail($data));

        return redirect()->back()->withSuccess('Su informacion fue enviada correctamente');
    }
}
