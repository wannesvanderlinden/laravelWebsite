<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $user->admin = false;
        $user->save();
       return back()->with('success', 'Account is succesfully registerd');

    }
    public function get(Request $request){

      $users= User::all();
    return view('welcome', ['users' => $users]);

    }
    
}
