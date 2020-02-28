<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class EnquiryFormController extends Controller
{
    
      public function create(){
        return view('emails.contact-message');
    }

    public function store(Request $request){
        
        Mail::send("emails.contact-message",[
            'msg'  => $request->mobile,
            
        ], function ($mail) use($request) {
            $mail->from($request->email2, $request->name2);

            $mail->to('taxpartners@example.com');
        });
       
        return redirect(url()->previous())->with('flash_message', 'Thankyou for your message. ');
    }
}
