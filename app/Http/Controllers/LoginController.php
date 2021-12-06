<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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



 public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
         return redirect('/');
    }
    
 public function get(Request $request){


    return view('login');

    }
     public function getRegristration(Request $request){


    
    return view('regristation');

    }
     public function getPasswordReset(Request $request){
return view('forgot-password');

    }
     public function sendPasswordReset(Request $request){
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);

    }
     public function getResetWithToken($token) {
    return view('resetPassword', ['token' => $token]);
}
 public function resetPasswordSave(Request $request){


    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login.get')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);

    }

}