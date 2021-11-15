<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
public function save(Request $request){

    

    }

    public function get(Request $request){

      $news= News::all();
    return view('welcome', ['news' => $news]);

    }
}
