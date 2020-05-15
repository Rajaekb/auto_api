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
        $annonce->neuf=$request->neuf;
        $annonce->origine=$request->origine;
        $annonce->dedouanement=$request->dedouanement;
        $annonce->marque=$request->marque;
        $annonce->modele=$request->modele;
        $annonce->finition=$request->finition;
        $annonce->année=$request->année;
        $annonce->mois=$request->mois;
        $annonce->kilometrage=$request->kilometrage;
        $annonce->matricule=$request->matricule;
        $annonce->edition_special=$request->edition_special;
        $annonce->type_vehicule=$request->type_vehicule;
        $annonce->nbr_portes=$request->nbr_portes;
        $annonce->nbr_sieges=$request->nbr_sieges;
        $annonce->carburant=$request->carburant;
        $annonce->transmission=$request->transmission;
        $annonce->cylindree=$request->cylindree;
        $annonce->p_fiscal=$request->p_fiscal;
        $annonce->p_chevaux=$request->p_chevaux;
        $annonce->motorisation=$request->motorisation;
        $annonce->consomation=$request->consomation;
        $annonce->frais_vignette=$request->frais_vignette;


        $annonce->user_id=$request->user_id;
       
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
        $annonce->neuf=$request->neuf;
        $annonce->origine=$request->origine;
        $annonce->dedouanement=$request->dedouanement;
        $annonce->marque=$request->marque;
        $annonce->modele=$request->modele;
        $annonce->finition=$request->finition;
        $annonce->année=$request->année;
        $annonce->mois=$request->mois;
        $annonce->kilometrage=$request->kilometrage;
        $annonce->matricule=$request->matricule;
        $annonce->edition_special=$request->edition_special;
        $annonce->type_vehicule=$request->type_vehicule;
        $annonce->nbr_portes=$request->nbr_portes;
        $annonce->nbr_sieges=$request->nbr_sieges;
        $annonce->carburant=$request->carburant;
        $annonce->transmission=$request->transmission;
        $annonce->cylindree=$request->cylindree;
        $annonce->p_fiscal=$request->p_fiscal;
        $annonce->p_chevaux=$request->p_chevaux;
        $annonce->motorisation=$request->motorisation;
        $annonce->consomation=$request->consomation;
        $annonce->frais_vignette=$request->frais_vignette;


        $annonce->user_id=$request->user_id;
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