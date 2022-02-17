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
    
    function activite($id){        
        $pdo=new PdoAssoChoisy();
        $lesTitres= $pdo->getTitreActivites($id); 
        $desArticles  = $pdo->getlesarticlesParAct($id);
        return view('vu_activites')
                ->with('lesTitres',$lesTitres)
                ->with('desArticles',$desArticles)
                ->with('pdo',$pdo); 
    } 

    function accueil(){
        $pdo=new PdoAssoChoisy();
        $articleRecent = $pdo->getarticleRecent();
        
        return view('index')
        ->with('pdo',$pdo)
        ->with('articleRecent',$articleRecent);
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