<?php

namespace App\Http\Controllers;
use PdoAssoChoisy;
use Illuminate\Http\Request;

class pages extends Controller
{
    // function accueil(){       
        
        
    //     return view('banniere')
    //     ->with('visiteur',$visiteur);
        
    // }
    
    function jardin(){        
        
       
        $this->PdoAssoChoisy::getTitreActivites(1);
        
        return view('vu_activites');
        // ->with('visiteur',$visiteur);
    
    } 
}