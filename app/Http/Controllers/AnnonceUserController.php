<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\User;
class AnnonceUserController extends Controller
{
    //
    public function index()
    {
        $annonce = new Annonce();
        $user = User::find($annonce->user_id);
        return $user;
    }

    public function storeUpdate(Request $request)
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
        $data=[];
                
        If($request->hasfile('images')){
            foreach($request->file('images') as $img)
            {
                $name=$img->getClientOriginalName();
                $nameToStore=time().'_'.$name;

                $img->storeAs('public/annonces_images', $nameToStore);  
                $data[] = $nameToStore;  
           }
            $annonce->images=json_encode($data);   
        }
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

       // return $annonce;
        
       $user = User::findOrNew($annonce->user_id);
       $user->nom=$request->nom;
       $user->prenom=$request->prenom;       
       $user->titre_civilité=$request->titre_civilité;
       $user->tel=$request->tel;
       $user->adresse=$request->adresse;
       $user->ville=$request->ville;
       $user->save();
        return $user;
    }

}
