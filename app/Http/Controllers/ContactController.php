<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact_email(Request $request){
        Validator::make($request->all(),[
            'name' => 'required|min:4',
            'email' => 'required|email',
            'message' => 'required|min:4'
        ])->validate();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        $mailTo = env('MAIL_FROM_ADDRESS');

        Mail::to($mailTo)->send(new ContactEmail($data));

        return back()->with('message', 'Your Message has been send successfully!');
    }
}
