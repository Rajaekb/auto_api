<?php

namespace App\Http\Controllers;
use App\Marque;
use App\Modele;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $md= Modele::all();
        return response()->json($md);
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
        //
        $md = new Modele();
        $md->libellé=$request->libellé;
        $md->marque_id=$request->marque_id;
        $md->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function show(Modele $modele)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function edit(Modele $modele)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modele $modele)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modele $modele)
    {
        //
    }

    public function showByMarque($id)
    {
        //
        $md = Marque::find($id)->modeles;
        return response()->json($md);
    }
}
