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
            'email' => 'required|email|unique:users,email',
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

 public function show(Request $request){

      $users= User::all();
    return view('adminPromote', ['users' => $users]);

    }
    public function promote(User $user){
    
       
    $promote= User::find($user->id);
    $promote->admin=true;
    $promote->save();
         return  redirect()->intended('/user/promote')->with('success', 'user is been promoted');

    }
      public function demote(User $user){
    
       
    $promote= User::find($user->id);
    $promote->admin=false;
    $promote->save();
         return  redirect()->intended('/user/promote')->with('success', 'user is been demoted');

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

    
     public function sendEmail(Request $request){
       
      $user= User::find(Auth::user()->id);
     $user->name = $request->input('name');
        $user->username = $request->input('username');
       $user->birthday =  $request->input('birthday');
           $user->aboutMe =  $request->input('aboutMe');
           $user->save();
    return  redirect()->intended('/profile')->with('success', 'Account is been updated');

    }
 
    
     
    
}
