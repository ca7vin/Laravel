<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required|email', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        Mail::send('emails.newsletter', array( 
            'email' => $input['email'], 
        ), function($message) use ($request){ 
            $message->to($request->email, 'Admin'); 
            $message->from('ca7vin@gmail.com');
        }); 
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
