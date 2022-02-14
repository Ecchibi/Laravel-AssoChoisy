<?php

namespace App\Http\Controllers;
use App\models\PdoAssoChoisy;
use Illuminate\Http\Request;

class pages extends Controller
{
    // function accueil(){       
        
        
    //     return view('banniere')
    //     ->with('visiteur',$visiteur);
        
    // }
    
    function jardin(){        
        
    
        // PdoAssoChoisy::getTitreActivites(1);
        
        return view('vu_activites');
        // ->with('visiteur',$visiteur);
    
    } 
    function contact(){        
        
    
       
        
        return view('vu_contact');
        // ->with('visiteur',$visiteur);
    
    }
}