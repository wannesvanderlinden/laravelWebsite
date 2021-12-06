<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\reaction;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
public function save(Request $request){

    $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'photo' => 'required'
         ]);
    
        $news =new News;
      
        $news->title = $request->input('title');
        $news->content = $request->input('content');
     
        //to do
        $fileName = date('mdYHis') .uniqid(). '.' . $request->file('photo')->extension(); 

       
        $request->file('photo')->storeAs('public/news', $fileName);
        $news->img=$fileName;
        $news->save();
        
          
       return back()->with('success', 'News has been created');

    }
    public function update(Request $request,News $news){

    $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            
         ]);
    
        $news->update([
            'title'=> request('title'),
            'content'=>request('content'),
          

            
        ]);
     
       if(request('photo')==null){
              
            }
            else{
              
          Storage::delete("public/news/$news->img");
       $fileName = date('mdYHis') .uniqid(). '.' . $request->file('photo')->extension(); 
        $request->file('photo')->storeAs('public/news', $fileName);
               $news->update([
            'img'=> $fileName,
            
        ]);
            }
        
        
       return back()->with('success', 'News has been updated');

    }

    public function get(Request $request){

      $news= News::all();
    return view('welcome', ['news' => $news]);

    }
     public function getEdit(Request $request){

     
    return view('editNews');

    }
    public function show(Request $request){

      $news= News::all();
    return view('editNews', ['news' => $news]);

    }
    
    public function edit(News $news){
   
      
    return view('newsEditSave', ['new' => $news]);

    }

       public function delete(News $news){
          reaction::where('news_id','=',$news->id)->delete();
          News::find($news->id)->delete();
          Storage::delete("public/news/$news->img");
       return redirect('/news/editNews')->with('success', 'News has been deleted');
    

    }

      public function getNewsCreator(Request $request){

       return view('newsCreator');

    }
}
