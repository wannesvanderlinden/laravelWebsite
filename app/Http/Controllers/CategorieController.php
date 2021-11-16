<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\questions;

class CategorieController extends Controller
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
        //
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
            'name' => 'required',
            'summary' => 'required',
            
         ]);
        $categorie =new categorie;
        $categorie->name = $request->input('name');
        $categorie->summary = $request->input('summary');
        $categorie->save();
       return back()->with('success', 'Categorie is succesfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categorie)
    {
        return view('categorieEdit',['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorie $categorie)
    {
        $categorie->update([
            'name'=> request('name'),
            'summary'=>request('summary'),
            
        ]);
        return redirect('/FAQ/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie $categorie)
    {
        categorie::find($categorie->id)->delete();
        questions::where('categorie_id','=',$categorie->id)->delete();
        return redirect('/FAQ/edit');

    }

    public function get(Request $request){

      $categories= categorie::all();
    return view('faqEdit', ['categories' => $categories]);

    }

   
}
