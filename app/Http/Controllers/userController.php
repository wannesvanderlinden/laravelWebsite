<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

 class userController extends Controller
{
    public function save(Request $request){

        $user =new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->admin = false;
        $user->save();
        return view('welcome');

    }
    public function get(Request $request){

      $users= User::all();
    return view('welcome', ['users' => $users]);

    }
    
}
