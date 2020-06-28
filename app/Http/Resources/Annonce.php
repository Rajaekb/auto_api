<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Annonce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

     
            return [
            'id'=>$this->id,
            'neuf'=>$this->neuf,
            'origine'=>$this->origine,
            'dedouanement'=>$this->dedouanement,
            'marque'=>$this->marque->libellé,
            'modele'=>$this->modele->libellé,
            'finition'=>$this->finition,
            'année'=>$this->année,
            'mois'=>$this->mois,
            'kilometrage'=>$this->kilometrage,
            'matricule'=>$this->matricule,
            'edition_special'=>$this->edition_special,
            'type_vehicule'=>$this->type_vehicule,
             
            'images'=>$this->images,
            'image_url'=>url('storage/'),
            'nbr_portes'=>$this->nbr_portes,
            'nbr_sieges'=>$this->nbr_sieges,
            'carburant'=>$this->carburant,
            'transmission'=>$this->transmission,
            'cylindree'=>$this->cylindree,
            'p_fiscal'=>$this->p_fiscal,
            'p_chevaux'=>$this->p_chevaux,
            'motorisation'=>$this->motorisation,
            'consomation'=>$this->consomation,
            'frais_vignette'=>$this->frais_vignette,
            'en_etat_de_marche'=>$this->en_etat_de_marche,
            'date_de_vente'=>$this->date_de_vente,
            'ville_de_vente'=>$this->ville_de_vente,
            'couleurs_exterieure'=>$this->couleurs_exterieure,
            'design_interieur'=>$this->design_interieur,
            'couleurs_interieur'=>$this->couleurs_interieur,
            'metalisee'=>$this->metalisee,
            'systemes_assistance'=>$this->systemes_assistance,
            'metalisee'=>$this->metalisee,
            'airbag'=>$this->airbag,
            'type_de_phare'=>$this->type_de_phare,
            'faisceau_complet'=>$this->faisceau_complet,
            'lumiere_allumees'=>$this->lumiere_allumees,
            'eclairage_adaptatif'=>$this->eclairage_adaptatif,
            'protection_anti_vol'=>$this->protection_anti_vol,
            'control_climat'=>$this->control_climat,
            'capteur_stationnement'=>$this->capteur_stationnement,
            'assistance_stationnement_acoustique'=>$this->assistance_stationnement_acoustique,
            'assistance_stationnement_visuel'=>$this->assistance_stationnement_visuel,
            'siege_chauffants_electriques'=>$this->siege_chauffants_electriques,
            'siege_reglables_electriques'=>$this->siege_reglables_electriques,
            'autres_caracteristiques'=>$this->autres_caracteristiques,
            'autre_equipement_confort'=>$this->autre_equipement_confort,
            'multimedia'=>$this->multimedia,
            'manipulation_controle'=>$this->manipulation_controle,
            'connectivite_et_interfaces'=>$this->connectivite_et_interfaces,
            'affichage_du_cockpit'=>$this->affichage_du_cockpit,
            'pneus'=>$this->pneus,
            'service_de_depannage'=>$this->service_de_depannage,
            'particularite'=>$this->particularite,
            'attelage_remorque'=>$this->attelage_remorque,
            'historique_vehicule'=>$this->historique_vehicule,
            'tva'=>$this->tva,
            'lien_youtube'=>$this->lien_youtube,
            'titre_vehicule'=>$this->titre_vehicule,
            'description_vehicule'=>$this->description_vehicule,
            'prix_vehicule'=>$this->prix_vehicule,
            'prix_fixe'=>$this->prix_fixe,
            'created_at'=>$this->created_at,
            'user'=>$this->user
        ];
    }
}
