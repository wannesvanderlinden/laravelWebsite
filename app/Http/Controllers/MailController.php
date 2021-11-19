<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\contactMailMelding;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
        public function sendEmail(Request $request) {
        $email = $request->email;
        $user =User::where('email','=',$request->email)->get();
        
       if($user !== null ){
     $mailData = [
            'title' => 'Password Forgot',
            'content' => 'Youre password is: '+$user->password,
        ];
       }
       else
       {
$mailData = [
            'title' => 'Password Forgot',
            'content' => 'We did not find a account on youre name',
        ];
       }
       
  
        Mail::to($email)->send(new contactMailMelding($mailData));
   
        return redirect()->intended('/');
    }
}
