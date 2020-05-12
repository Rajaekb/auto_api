<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonce=Annonce::all();
        return $annonce;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annonce = new Annonce();
        $annonce->title=$request->title;
        $annonce->description=$request->description;
        $annonce->type=$request->type;
        $annonce->active=$request->active;
        $annonce->user_id=$request->user_id;
        $annonce->nombre_de_vue=$request->nombre_de_vue;
        $annonce->save();
        return $annonce;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Annonce::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $annonce = Annonce::find($id);
        $annonce->title=$request->title;
        $annonce->description=$request->description;
        $annonce->type=$request->type;
        $annonce->active=$request->active;
        $annonce->user_id=$request->user_id;
        $annonce->nombre_de_vue=$request->nombre_de_vue;
        $annonce->save();
        return $annonce;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::find($id);
        $annonce->delete();
        return response()->json([]);
    }

}