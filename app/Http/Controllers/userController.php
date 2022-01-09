<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\reaction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



 class userController extends Controller
{
    public function save(Request $request){
 $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
         ]);
        $user =new User;
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->birthday =  $request->input('birthday');
        $user->aboutMe =  "none";
        $user->admin = false;
        $user->img="profile.jpg";
        $user->save();
       return back()->with('success', 'Account is succesfully registerd');

    }
    public function get(Request $request){

      $users= User::all();
        $news= News::all();
    return view('welcome.welcome', ['users' => $users], ['news' => $news]);

    }

 public function show(Request $request){

      $users= User::all();
    return view('adminPromoteDemote.adminPromote', ['users' => $users]);

    }

     public function showProfile(User $user){

     
    return view('profile.otherUserProfile', ['user' => $user]);

    }

     public function profile(User $user){

     
    return view('profile.profile');

    }
       public function getProfileEdit(User $user){

     
    return view('profile.profileEdit');

    }

        public function getAboutMe(User $user){

     
    return view('aboutMe.aboutMe');

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
    $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'birthday' => 'required',
            'aboutMe' => 'required'
         ]);
      
     $user->name = $request->input('name');
        $user->username = $request->input('username');
       $user->birthday =  $request->input('birthday');
           $user->aboutMe =  $request->input('aboutMe');
          $user->save();
           if(request('photo')==null){
               
            }
            else if ($user->img == "profile.jpg"
            ){
              
         
       $fileName = date('mdYHis') .uniqid(). '.' . $request->file('photo')->extension(); 
        $request->file('photo')->storeAs('public/profile', $fileName);
        
        $user->img=$fileName;
          $user->save();
            }else{
                   Storage::delete("public/profile/$user->img");
       $fileName = date('mdYHis') .uniqid(). '.' . $request->file('photo')->extension(); 
        $request->file('photo')->storeAs('public/profile', $fileName);
       
          $user->img=$fileName;
          $user->save();
            }
          
            
          reaction::where('user_id','=',$user->id)->update(['name'=>$user->username]);
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
