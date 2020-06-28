<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    //
    public function modeles()
    {
        return $this->hasMany('App\Modele');
    } 
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    } 
}
