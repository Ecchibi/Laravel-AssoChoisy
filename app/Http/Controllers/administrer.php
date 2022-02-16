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
  
    function activiteUpdate($id){        
        $pdo=new PdoAssoChoisy();
        $lesTitres= $pdo->getTitreActivites($id); 
        $desArticles  = $pdo->getlesarticlesParAct($id);
        return view('vu_articleMODIF')
                ->with('lesTitres',$lesTitres)
                ->with('desArticles',$desArticles)
                ->with('pdo',$pdo); 
    } 


    function modifier($id){ 
            $pdo=new PdoAssoChoisy();
            $article = $pdo->getArticle($id);
            $texte = $article['texte'];

            return view('vu_modifier')
            ->with('article',$article)
            ->with('texte',$texte)
            ->with('pdo',$pdo); 
    
        }      

//     function enregModification(){//le case cest la valeur attribuer a Action=..
//                 $pdo=new PdoAssoChoisy();
//                 $texte = $_REQUEST['texte'];
//                 $id= $_REQUEST['id'];   
                  
//                 $res = $pdo->modifierArticle($id,$texte); 
                    
//                 if($res != 0)
//                         $message = "Article mis à jour";
//                 else
//                         $message = "Veuillez réessayer plus tard";
//                 include("M-V-C/Views/vu_message.php");                  
                     
//         }
}



