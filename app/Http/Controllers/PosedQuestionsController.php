<?php

namespace App\Http\Controllers;

use App\Models\posedQuestions;
use App\Models\categorie;
use Illuminate\Http\Request;

class PosedQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= categorie::all();
        $questions= posedQuestions::all();
        return view('adminPosedQuestions.posedQuestions', ['questions' => $questions], ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $this->validate($request, [
            'question' => 'required',
            
         ]);
        $posedQuestion =new posedQuestions;
         $posedQuestion->question = $request->input('question');
     
         $posedQuestion->save();
       return back()->with('success', 'Question has been posed');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posedQuestions  $posedQuestions
     * @return \Illuminate\Http\Response
     */
    public function show(posedQuestions $posedQuestions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posedQuestions  $posedQuestions
     * @return \Illuminate\Http\Response
     */
    public function edit(posedQuestions $posedQuestions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posedQuestions  $posedQuestions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posedQuestions $posedQuestions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posedQuestions  $posedQuestions
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        
           posedQuestions::where('id','=',$id)->delete();
              
               return back()->with('success', 'Succesfull deleted');
    }
}
