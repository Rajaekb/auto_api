<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //

    protected $fillable = [
       
            'neuf',
            'origine',
            'dedouanement',
            'marque_id',       
            'modele_id',  
            'finition',
            'année',
            'mois',
            'kilometrage',
            'matricule',
            'edition_special',
            'type_vehicule',
           'images',
            'nbr_portes',
            'nbr_sieges',
            'carburant',
            'transmission',
            'cylindree',
            'p_fiscal',
            'p_chevaux',
            'motorisation',
            'consomation',
            'frais_vignette',
            'en_etat_de_marche',
          'date_de_vente',
            'ville_de_vente',
            'couleurs_exterieure',
            'design_interieur',
            'couleurs_interieur',     
            'metalisee',
           'systemes_assistance',
            'airbag',     
            'type_de_phare',     
            'faisceau_complet',   
            'lumiere_allumees',   
            'eclairage_adaptatif',   
            'protection_anti_vol',
            'control_climat',
            'capteur_stationnement',     
            'assistance_stationnement_acoustique',     
            'assistance_stationnement_visuel',     
            'siege_chauffants_electriques',     
            'siege_reglables_electriques',     
           'autres_caracteristiques',     
           'autre_equipement_confort',
            'multimedia',
            'manipulation_controle',
           'connectivite_et_interfaces',
            'affichage_du_cockpit',
            'pneus',
            'service_de_depannage',
            'jantes',
            'particularite',
            'attelage_remorque',
            'historique_vehicule',
            'tva',
            'lien_youtube',
            'titre_vehicule',
           'description_vehicule',
            'prix_vehicule',
            'prix_fixe',
   
   
   
   
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function marque()
    {
        return $this->belongsTo('App\Marque');
    }
    public function modele()
    {
        return $this->belongsTo('App\Modele');
    }
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
}
