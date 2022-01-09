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
        $contact->isReply=false;
        
        $contact->save();
            
        return back()->with('success','We have recieved it');
       

    }
    public function get(Contact $contact){
       

    return view('adminInbox.adminReplyContact', ['contact' => $contact]);

    }
    public function show(Request $request){

      $forms= Contact::all();
    return view('adminInbox.adminInboxContact', ['forms' => $forms]);

    }
        
 public function getContactField(Request $request){


    return view('userContact.contact');

    }
    
}
