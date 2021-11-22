<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Auth;

 class ContactController extends Controller
{
    public function save(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact =new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        
        $contact->save();
            
        return back()->with('success','We have recieved it');
       

    }
    public function get(Contact $contact){
       

    return view('adminReplyContact', ['contact' => $contact]);

    }
    public function show(Request $request){

      $forms= Contact::all();
    return view('adminInboxContact', ['forms' => $forms]);

    }
    
}
