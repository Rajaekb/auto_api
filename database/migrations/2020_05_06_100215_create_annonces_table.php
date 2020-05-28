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
            $table->boolean('neuf')->nullable();
            $table->string('origine')->nullable();
            $table->string('dedouanement')->nullable();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('finition')->nullable();
            $table->string('année')->nullable();
            $table->string('mois')->nullable();
            $table->integer('kilometrage')->nullable();
            $table->string('matricule')->nullable();
            $table->boolean('edition_special')->nullable();
            $table->string('type_vehicule')->nullable();
            $table->string('image')->nullable();
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
