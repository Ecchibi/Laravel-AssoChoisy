<?php

namespace App\Http\Controllers;
use App\models\PdoAssoChoisy;
use Illuminate\Http\Request;

class administrer extends Controller
{
    function connexion(){        

        return view('vu_connexion');      
    }


    function connecter(Request $request){        
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $login = $request['login'];
            $mdp = $request['mdp']; 
            $user = PdoAssoChoisy::getUser($login,$mdp);
            

        return view('vu_accueilAdmin')
            ->with('gestionnaire',$gestionnaire)
            ->with('login',$login)
            ->with('mdp',$mdp)
            ->with('user',$user);
            
    }
    else{
        return view('vu_connexion');
    }
}
}
