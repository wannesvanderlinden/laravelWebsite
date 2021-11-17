<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
public function save(Request $request){

    
        $news =new News;
      
        $news->title = $request->input('title');
        $news->content = $request->input('content');

        //to do
        $fileName = $request->get('name') . '.' . $request->file('photo')->extension(); 
        $request->file('photo')->storeAs('public/news', $fileName);
        
        $news->save();
        
          
       return back()->with('success', 'News has been created');

    }

    public function get(Request $request){

      $news= News::all();
    return view('welcome', ['news' => $news]);

    }
}
