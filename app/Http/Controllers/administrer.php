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
      
            $gestionnaire = session('gestionnaire');
            $login = $request['login'];
            $mdp = $request['mdp']; 
            $pdo=new PdoAssoChoisy();
            $user=$pdo->getUser($login,$mdp);

            if($user!=false)
            {
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
