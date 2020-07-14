<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create(){
        return view('contact');
    }

    public function store(Request $request){
        // storing form data in to contacts table
        $contact_data = new Contact;
        $contact_data->Name = $request->input('name');
        $contact_data->Email = $request->input('email');
        $contact_data->Subject = $request->input('subject');
        $contact_data->Message = $request->input('message');
        
        $contact_data->save();

        // sending mail using form data
        Mail::send("emails.contact-message",[
            'msg'  => $request->message
        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);

            $mail->to('rk235216@gmail.com')->subject($request->subject);
        });
        $request->session()->flash('status_contact', 'Thank you for your message');
        return redirect()->back();
    }
}
