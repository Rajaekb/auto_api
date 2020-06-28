<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
          
            'nom'=>$this->nom,
            'prenom'=> $this->prenom,
            'user_type'=> $this->user_type,
            'email'=>$this->email,         
            'titre_civilité'=> $this->titre_civilité,
            'nom_société'=> $this->nom_société,
            'tel'=> $this->tel,
            'tel_whatsapp'=>$this->tel_whatsapp,
            'adresse'=> $this->adresse,
            'code_postal'=> $this->code_postal,
            'ville'=>$this->ville,
    
        ];
    }
}
