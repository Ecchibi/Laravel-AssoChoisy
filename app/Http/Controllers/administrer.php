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
    function accueilAdmin(){ 
      
       return view('vu_accueilAdmin');

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


    function ajouter(Request $request){ 
        $pdo=new PdoAssoChoisy();                                      
           
        $titreArticle = $request['titreArticle'];
        $texte = $request['texte'];
       //mene deroulant recup les idactivite
       
        $idActivitesLibeller = $pdo->getIdActivites();                                                   
        $idActivite= $request['idActivites'];

        

        return view('vu_ajouter')
                ->with('idActivitesLibeller', $idActivitesLibeller)
                ->with('titreArticle',$titreArticle)
                ->with('texte', $texte)
                ->with('idActivite', $idActivite)

                ->with('pdo',$pdo); 

    }   

    function enregAjouter(Request $request){ 
        $pdo=new PdoAssoChoisy();                                      
        
        $titreArticle = $request['titreArticle'];    
        $idActivitesLibeller = $pdo->getIdActivites();                                                   
        $idActivite= $request['idActivites'];
        $texte = $request['texte']; 
        $nomImage = $_FILES['file']['name'];
        //$_FILES permet de recup le tableau['name'] sinon on peut pas  faire double tableau ['file']['name'];
        $texte2=addslashes($texte); //ajoute des anti slash dansune chaine (ex: si on copie un text)

       
        
        if(isset($_FILES['file']) && $_FILES['file']['error']===UPLOAD_ERR_OK )
        //pas besoin de request $_FILES recupere direct le champ name du form 
        // dd($_FILES['file']);
        {
            $leNomduFichier=$_FILES['file']['name'];//on specifie le ['nom']  du fichier upload 
    
        if(move_uploaded_file($_FILES['file']['tmp_name'],"C:/wamp64/www/AssoChoisyLaravel/public/img/IMGarticle/$leNomduFichier"))                      // ↑tmp_name est un champ qui est créer par $_FILES['file'] pour stocké le fichier dans un fichier TeMPorraire avant de l'upload
            {                                     
                $message='Fichier bien envoyé';
            }
            else{
                    $message="Erreur lors de l'envoi";
                }
        }
        $articleAdd = $pdo->ajouterArticle($titreArticle, $texte2, $idActivite,$nomImage); 



        return view('vu_ajouter')
                ->with('message',$message)
                ->with('articleAdd',$articleAdd)
                ->with('idActivitesLibeller', $idActivitesLibeller)
                ->with('titreArticle',$titreArticle)
                ->with('texte', $texte)
                ->with('idActivite', $idActivite)

                ->with('pdo',$pdo); 

    }   

    function supprimer($id){ 
        $pdo=new PdoAssoChoisy();                                      
    
        $suppArticle = $pdo-> supprimerArticle($id);
            
                                              
        if($suppArticle != 0){

            $message = 'Fichier bien envoyé';
            
            return view('vu_message')
                ->with('message',$message)
                ->with('suppArticle ', $suppArticle )
                ->with('pdo',$pdo); 
        }
        else{

            $message = "Veuillez réessayer";

            return view('vu_message')
                ->with('message',$message ) 
                ->with('pdo',$pdo);            
        }   
        

    }   



    
    function deconnecter(){
        session(['gestionnaire' => null]);
        return redirect()->route('chemin_connexion');
}
}

