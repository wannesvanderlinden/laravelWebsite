<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $userInLog = $request->only('email', 'password');

        if (Auth::attempt($userInLog)) {
           // Auth::login($user, true);
            // Authentication passed...
            return redirect()->intended('welcome');
        }
        else {
            
             return redirect()->intended('login');
        }
    }
}