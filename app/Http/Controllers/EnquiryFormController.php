<?php

namespace App\Http\Controllers;
use App\enquire;
use Mail;
use Illuminate\Http\Request;

class EnquiryFormController extends Controller
{
    
      public function create(){
        return view('emails.contact-message');
    }

    public function store(Request $request){

         // storing form data in to contacts table
        $enquire_data = new enquire;
        $enquire_data->Name = $request->input('nametwo');
        $enquire_data->Email = $request->input('email2');
        $enquire_data->Mobile = $request->input('mobile');
        $enquire_data->ServiceGroup = $request->input('servicegrp');
        $enquire_data->ServiceType = $request->input('servicetype');
        $enquire_data->TextArea = $request->input('textarea');
        
        $enquire_data->save();

         // sending mail using form data
        Mail::send("emails.contact-message",[
            'msg'  => $request->mobile, $request->servicegrp, $request->servicetype
            
        ], function ($mail) use($request) {
            $mail->from($request->email2, $request->nametwo);

            $mail->to('taxpartners@example.com');
        });
        $request->session()->flash('status_enquire', 'Thank you for your message. We will get back to you shortly.');
        return redirect(url()->previous());
    }
}
