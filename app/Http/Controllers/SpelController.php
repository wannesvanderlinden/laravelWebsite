<?php

namespace App\Http\Controllers;

use App\Models\Spel;
use Illuminate\Http\Request;

class SpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $spellen= Spel::all();
          
    return view('spellenForum.spellenForum', ['spellen' => $spellen]);
    }
    
    public function creator()
    {
          $spellen= Spel::all();
          
    return view('spellenForum.spellenCreator', ['spellen' => $spellen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'explenation' => 'required',
            
         ]);
        $spel = new Spel();
        $spel->title =$request->title;
          $spel->explenation =$request->explenation;

         $spel->save();
          if($request->plusd !== null){
              $spel->Leeftijdsgroepen()->attach($request->plusd);
              
             
          }
          if($request->kleuters !==null){
                  $spel->Leeftijdsgroepen()->attach($request->kleuters);
              }
          if($request->GrootPlein!==null){
                  $spel->Leeftijdsgroepen()->attach($request->GrootPlein);
              }
          
          return back()->with('success', 'Has been created');
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
     * @param  \App\Models\Spel  $spel
     * @return \Illuminate\Http\Response
     */
    public function show(Spel $spel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spel  $spel
     * @return \Illuminate\Http\Response
     */
    public function edit(Spel $spel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spel  $spel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spel $spel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spel  $spel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spel $spel)
    {
        
    }
}
