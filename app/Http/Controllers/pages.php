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
     
        $letitre = PdoAssoChoisy::getTitreActivites(1);       
        return view('vu_activites')//;
                ->with('titre',$letitre); 
    } 

    function astronomie(){        
     
        // PdoAssoChoisy::getTitreActivites(2);
        
        return view('vu_activites');
        // ->with('visiteur',$visiteur); 
    } 

    function animations(){
        // PdoAssoChoisy::getTitreActivites(3);
        return view('vu_activites');
    }

    function apropos(){

        return view('vu_apropos');

    }

    function contact(){        
        
        return view('vu_contact');
        // ->with('visiteur',$visiteur);
    
    }

    
    function reservation(){        
        
        return view('vu_reservation');
        // ->with('visiteur',$visiteur);
    
    }

}