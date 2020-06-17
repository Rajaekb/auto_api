<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annonce;
use Spatie\QueryBuilder\AllowedFilter;
class RechercheController extends Controller
{
    //

    public function index()
    {
        $annonce = QueryBuilder::for(Annonce::class)
            ->allowedFilters(['marque', 'model'])
            ->get();    
       
        return $annonce;
    }

}
