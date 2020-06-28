<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('neuf')->nullable();
            $table->string('origine')->nullable();
            $table->string('dedouanement')->nullable();
            $table->foreignId('marque_id')->constrained();           
            $table->foreignId('modele_id')->constrained();   
            $table->string('finition')->nullable();
            $table->string('année')->nullable();
            $table->string('mois')->nullable();
            $table->integer('kilometrage')->nullable();
            $table->string('matricule')->nullable();
            $table->string('edition_special')->nullable();
            $table->string('type_vehicule')->nullable();
            $table->longText('images')->nullable();
            $table->integer('nbr_portes')->nullable();
            $table->integer('nbr_sieges')->nullable();
            $table->string('carburant')->nullable();
            $table->string('transmission')->nullable();
            $table->string('cylindree')->nullable();
            $table->integer('p_fiscal')->nullable();
            $table->integer('p_chevaux')->nullable();
            $table->integer('motorisation')->nullable();
            $table->integer('consomation')->nullable();
            $table->integer('frais_vignette')->nullable();
            $table->string('en_etat_de_marche')->nullable();;
            $table->date('date_de_vente')->nullable();
            $table->string('ville_de_vente')->nullable();;
            $table->string('couleurs_exterieure')->nullable();
            $table->string('design_interieur')->nullable();
            $table->string('couleurs_interieur')->nullable();     
            $table->string('metalisee')->nullable();
            $table->longText('systemes_assistance')->nullable();
            $table->string('airbag')->nullable();     
            $table->string('type_de_phare')->nullable();     
            $table->string('faisceau_complet')->nullable();   
            $table->string('lumiere_allumees')->nullable();   
            $table->string('eclairage_adaptatif')->nullable();   
            $table->string('protection_anti_vol')->nullable();
            $table->string('control_climat')->nullable();
            $table->string('capteur_stationnement')->nullable();     
            $table->string('assistance_stationnement_acoustique')->nullable();     
            $table->string('assistance_stationnement_visuel')->nullable();     
            $table->string('siege_chauffants_electriques')->nullable();     
            $table->string('siege_reglables_electriques')->nullable();     
            $table->longText('autres_caracteristiques')->nullable();     
            $table->longText('autre_equipement_confort')->nullable();
            $table->string('multimedia')->nullable();
            $table->string('manipulation_controle')->nullable();
            $table->longText('connectivite_et_interfaces')->nullable();
            $table->string('affichage_du_cockpit')->nullable();
            $table->string('pneus')->nullable();
            $table->string('service_de_depannage')->nullable();
            $table->string('jantes')->nullable();
            $table->string('particularite')->nullable();
            $table->string('attelage_remorque')->nullable();
            $table->string('historique_vehicule')->nullable();
            $table->string('tva')->nullable();
            $table->string('lien_youtube')->nullable();
            $table->string('titre_vehicule')->nullable();
            $table->text('description_vehicule')->nullable();
            $table->integer('prix_vehicule')->nullable();
            $table->string('prix_fixe')->nullable();
            $table->foreignId('user_id')->constrained();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
