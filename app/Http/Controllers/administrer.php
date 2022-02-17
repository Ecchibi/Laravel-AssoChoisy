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
        $idArticles = $pdo->getIdArticle($id) ;
        $lesTitres= $pdo->getTitreActivites($id); 
        $desArticles  = $pdo->getlesarticlesParAct($id);
        $banImage = $pdo->getImageBanniere($id);
        $articleImage = $pdo-> getImageArticle( $idArticles['id'],$id);
        $titreArticle = $pdo-> getTitreArticles($id);

        return view('vu_articleMODIF')
                ->with('lesTitres',$lesTitres)
                ->with('desArticles',$desArticles)
                ->with('articleImage',$articleImage)
                ->with('titreArticle',$titreArticle)
                ->with('banImage',$banImage)
                ->with('id',$id)  //faut recuperer l'id pour vu_articleMODIF
                ->with('pdo',$pdo); 
    } 


    function modifier($id){ 
            $pdo=new PdoAssoChoisy();
            $article = $pdo->getArticle($id);
            
            $texte = $article['texte'];
            return view('vu_modifier')
            ->with('article',$article)
            ->with('texte',$texte)
            ->with('id',$id)
            ->with('pdo',$pdo); 
    
        }      

    function enregModification(Request $request){//le case cest la valeur attribuer a Action=..
                $pdo=new PdoAssoChoisy();
                $texte = $request['texte'];
                $id= $request['id'];  
                $res = $pdo->modifierArticle($id,$texte); 
                    
                if($res != 0){
                    $message = "Article mis à jour";
                    return view('vu_accueilAdmin')
                      
                        ->with('texte',$texte)
                        ->with('id',$id)
                        ->with('res',$res )
                        ->with('message',$message ) 
                        ->with('pdo',$pdo);
                }
                else{
                    $message = "Veuillez réessayer plus tard";
                    return view('vu_modifier')
                        ->with('texte',$texte)
                        ->with('id',$id)
                        ->with('message',$message ) 
                        ->with('pdo',$pdo);            
        }

    }   

}

