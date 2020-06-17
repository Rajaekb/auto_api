<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use App\User;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

       /* return QueryBuilder::for(Annonce::class)
                 ->allowedFilters('marque')
                 ->get();*/
                 //->toJson();
        //->paginate(20);
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
        //upload images
        $data=[];
      If($request->hasfile('images')){
        //$folder = '/storage/annonces_images/';
            foreach($request->file('images') as $img)
            {
                //$name=$img->getClientOriginalName();
                //$nameToStore=time().'_'.$name;

               // $img->storeAs('public/annonces_images', $nameToStore); 
               $path = $img->store('images', 'public');
               
              //  $data[] = $nameToStore;  
                $data[] = $path;  
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
        $annonce->en_etat_de_marche=$request->en_etat_de_marche;
        $annonce->date_de_vente=$request->date_de_vente;
        $annonce->ville_de_vente=$request->ville_de_vente;
        $annonce->couleurs_exterieure=$request->couleurs_exterieure;
        $annonce->design_interieur=$request->design_interieur;
        $annonce->couleurs_interieur=$request->couleurs_interieur;
        $annonce->metalisee=$request->metalisee;
        $annonce->systemes_assistance=json_encode($request->system_assistance);
        $annonce->metalisee=$request->metalisee;
        $annonce->airbag=$request->airbag;
        $annonce->type_de_phare=$request->type_de_phare;
        $annonce->faisceau_complet=$request->faisceau_complet;
        $annonce->lumiere_allumees=$request->lumiere_allumees;
        $annonce->eclairage_adaptatif=$request->eclairage_adaptatif;
        $annonce->protection_anti_vol=$request->protection_anti_vol;
        $annonce->control_climat=$request->control_climat;
        $annonce->capteur_stationnement=$request->capteur_stationnement;
        $annonce->assistance_stationnement_acoustique=$request->assistance_stationnement_acoustique;
        $annonce->assistance_stationnement_visuel=$request->assistance_stationnement_visuel;
        $annonce->siege_chauffants_electriques=$request->siege_chauffants_electriques;
        $annonce->siege_reglables_electriques=$request->siege_reglables_electriques;
        $annonce->autres_caracteristiques=json_encode($request->autres_caracteristiques);
        $annonce->autre_equipement_confort=json_encode($request->autre_equipement_confort);
        $annonce->multimedia=json_encode($request->multimedia);
        $annonce->manipulation_controle=json_encode($request->manipulation_controle);
        $annonce->connectivite_et_interfaces=json_encode($request->connectivite_et_interfaces);
        $annonce->affichage_du_cockpit=$request->affichage_du_cockpit;
        $annonce->pneus=json_encode($request->pneus);
        $annonce->service_de_depannage=$request->service_de_depannage;
        $annonce->particularite=json_encode($request->particularite);
        $annonce->attelage_remorque=$request->attelage_remorque;
        $annonce->historique_vehicule=$request->historique_vehicule;
        $annonce->tva=$request->tva;
        $annonce->lien_youtube=$request->lien_youtube;
        $annonce->titre_vehicule=$request->titre_vehicule;
        $annonce->description_vehicule=$request->description_vehicule;
        $annonce->prix_vehicule=$request->prix_vehicule;
        $annonce->prix_fixe=$request->prix_fixe;
     
        $annonce->user_id=$request->user_id;       
        $annonce->save();
        $user = User::find($annonce->user_id);
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;        
        $user->titre_civilité=$request->titre_civilité;
        $user->tel=$request->tel;
        $user->adresse=$request->adresse;
        $user->code_postal=$request->code_postal;
        $user->ville=$request->ville;
        $user->save();

        return $user;
       // return $annonce;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $ann=Annonce::find($id);
       return response()->json(['annonce'=>$ann]);
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
    
    public function search(Request $request)
    {
        $marque=$request->marque;
        $modele=$request->modele;
    //return Annonce::filter($request->all())->get();

        $query = Annonce::query();
        if($request->marque){
            $query->where('marque', 'LIKE', "$marque");
        }

        if($request->modele){
            $query->where('modele', 'LIKE', "$modele");
        }

        $ann=$query->get();
        return response()->json(['annonces'=>$ann]);
    }

}