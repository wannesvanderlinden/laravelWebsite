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

        if (Auth::attempt($userInLog,$request->input('remember-me'))){
           // Auth::login($user, true);
            // Authentication passed...
            $request->session()->regenerate();

            return redirect()->intended('');
        }
        else {
            
             return back()->withErrors([
                 'email' => 'The credentials does not match our records',
             ]);
        }
    }
}