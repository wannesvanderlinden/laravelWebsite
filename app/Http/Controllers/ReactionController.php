<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaction;
use Illuminate\Support\Facades\Auth;
class ReactionController extends Controller
{
      public function store(Request $request)
    {
        
        $this->validate($request, [
            'content' => 'required',
           
         ]);
        $reaction =new Reaction;
        $reaction->name = Auth::user()->username;
        $reaction->content = $request->input('content');
        $reaction->news_id = $request->input('news_id');
        
        $reaction->save();
       return back()->with('success', 'Reaction is added');
    }
}
