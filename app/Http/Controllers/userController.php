<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

 class userController extends Controller
{
    public function save(Request $request){
 $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
         ]);
        $user =new User;
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->birthday =  $request->input('birthday');
        $user->aboutMe =  "none";
        $user->admin = false;
        $user->save();
       return back()->with('success', 'Account is succesfully registerd');

    }
    public function get(Request $request){

      $users= User::all();
    return view('welcome', ['users' => $users]);

    }
     public function saveChanges(Request $request){
       
      $user= User::find(Auth::user()->id);
     $user->name = $request->input('name');
        $user->username = $request->input('username');
       $user->birthday =  $request->input('birthday');
           $user->aboutMe =  $request->input('aboutMe');
           $user->save();
    return  redirect()->intended('/profile')->with('success', 'Account is been updated');

    }
    
}
