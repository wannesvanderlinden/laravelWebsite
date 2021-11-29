<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\contactMailMelding;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;


class MailController extends Controller
{
        public function sendEmail(Request $request,Contact $contact) {
              $this->validate($request,[
            'message' => 'required',
            'name' => 'required',
            
        ]);
        $email = $contact->email;
       
       
     $mailData = [
            'title' => 'Repley Contact form',
            'content' => $request->message,
            'name'=>$request->name,
        ];
    
        Mail::to($email)->send(new contactMailMelding($mailData));
        $contact->update([
            'isReply'=> true,
          
          

            
        ]);
   
        return redirect()->intended('/');
    }
}
