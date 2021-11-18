<?php

namespace App\Http\Controllers;

use App\Models\questions;
use App\Models\categorie;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categorie::all();
        return view('questionAdd',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'answer' => 'required',
            'categories' => 'required'
         ]);
        $question =new questions;
        $question->title = $request->input('title');
        $question->answer = $request->input('answer');
        $question->categorie_id = $request->input('categories');
        
        $question->save();
       return back()->with('success', 'Account is succesfully registerd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
         $questions = $categorie->questions;
    

         return view('questionEdit',['questions' => $questions]);
    }
    public function showForUser(categorie $categorie)
    {
         $questions = $categorie->questions;
    

         return view('faqQuestions',['questions' => $questions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(questions  $questions)
    {
        $categories =categorie::all();

          return view('questionEditSave',['question' => $questions],['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, questions $questions)
    {
        $questions->update([
            'title'=> request('title'),
            'answer'=>request('answer'),
            'categorie_id'=>request('categories'),

            
        ]);
        return redirect('/FAQ/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(questions $questions)
    {
         questions::find($questions->id)->delete();
    
       return back()->with('success', 'Account is succesfully registerd');
    }




}
