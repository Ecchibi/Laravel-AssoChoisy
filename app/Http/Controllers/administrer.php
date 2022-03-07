<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\models\PdoAssoChoisy;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class administrer extends Controller
{
    function connexion(){        

        return view('vu_connexion') 
        ->with('erreurs',null)
        ->with('Success',null);  // on doit initialiser l'erreur
 
            
    }


    function connecter(Request $request){        
      
            // $gestionnaire = session('gestionnaire');
            $login = $request['login'];
            $mdp = $request['mdp']; 
            $pdo=new PdoAssoChoisy();
            $user= $pdo -> getUser($login,$mdp);
            $listeReservation = Reservation::all();
            // dd($listeReservation);
            // dump($listeReservation);
            if(is_array($user))
            {
               
                session(['gestionnaire' => $user]);//⚠️créer gestionnaire
                return view('vu_accueilAdmin')
                
                // ->with('gestionnaire',$gestionnaire)
                ->with('listeReservation',$listeReservation)
                ->with('login',$login)
                ->with('mdp',$mdp)
                ->with('gestionnaire',session('gestionnaire'))//⚠️on retourne gestionnaire
                ->with('erreurs',null)
                ->with('Success',null)
                ->with('user',$user);
            }
        else{
            $erreurs[] = "Login ou mot de passe incorrect(s)";
            return view('vu_connexion')
                ->with('erreurs',$erreurs);
        }
    
    }

    function accueilAdmin(){ 
    if(session('gestionnaire') != null){
        $pdo=new PdoAssoChoisy();
        $listeReservation = Reservation::all();
        
                return view('vu_accueilAdmin',[
                    'listeReservation'=>$listeReservation // on doit return un tableau sinon marche
                ])
            
                ->with('pdo',$pdo)  
                ->with('erreurs',null)
                ->with('Success',null);  // on doit initialiser l'erreur

    }
    else{
        $erreurs[] = "Login ou mot de passe incorrect(s)";
        return view('vu_connexion')
            ->with('erreurs',$erreurs);
    }

  }
    function activiteUpdate($id){   
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');   //⚠️ gestionnaire  
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
                    ->with('gestionnaire', $gestionnaire)
                 
                    ->with('Success',null)  // on doit initialiser l'erreur
                    ->with('id',$id)  //faut recuperer l'id pour vu_articleMODIF
                    ->with('pdo',$pdo); 
        }    
        else{
            $erreurs[] = 'Veuillez reessayer';
            
            return view('msgerreurs')
                    ->with('erreurs',null);
                    
                  
            }
    }
     


    function modifier($id){ 
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');     
            $pdo=new PdoAssoChoisy();
            $article = $pdo->getArticle($id);
            $texte = $article['texte'];

            return view('vu_modifier')
                ->with('article',$article)
                ->with('texte',$texte)
                ->with('id',$id)
                ->with('gestionnaire', $gestionnaire)
                ->with('pdo',$pdo); 
        }
        else{     

            return view('vu_modifier');    
        }
    }      

    function enregModification(Request $request){//le case cest la valeur attribuer a Action=..
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');     
                $pdo=new PdoAssoChoisy();
                $texte = $request['texte'];
                $id= $request['id'];  
                $res = $pdo->modifierArticle($id,$texte); 
               
                if($res != 0){
                    $Success[] = "Article mis à jour";
                    return view('vu_accueilAdmin')
                     
                        ->with('texte',$texte)
                        ->with('id',$id)
                        ->with('res',$res )
                        ->with('Success',$Success)
                        ->with('gestionnaire', $gestionnaire) 
                        ->with('pdo',$pdo);
                }
                else{
                    $Success[] = "Veuillez réessayer";
                    return view('vu_accueilAdmin')
                        ->with('texte',$texte)
                        ->with('id',$id)
                        ->with('Success',$Success)
                        ->with('pdo',$pdo);            
            }
        }
    }   


    function ajouter(Request $request){ 
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');     
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
                ->with('gestionnaire', $gestionnaire)
                ->with('pdo',$pdo); 
    }

  }   

    function enregAjouter(Request $request){ 
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');     
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
                $Success[] ="Article Ajouter";
            }
            else{
                     $Success[] ="Erreur lors de l'ajout";
                }
        }
            $articleAdd = $pdo->ajouterArticle($titreArticle, $texte2, $idActivite,$nomImage); 


      
        $Success[] ="Article Ajouter";

        return view('vu_accueilAdmin')
                ->with('Success',$Success)
                ->with('articleAdd',$articleAdd)
                ->with('idActivitesLibeller', $idActivitesLibeller)
                ->with('titreArticle',$titreArticle)
                ->with('texte', $texte)
                ->with('idActivite', $idActivite)
                ->with('gestionnaire', $gestionnaire)
                ->with('pdo',$pdo); 

      }
      
        else{
                $Success[] ="erreur";
                return view('vu_ajouter')
                ->with('Success',$Success);
        }
    }


    function supprimer($id){ 
        if(session('gestionnaire') != null){
            $gestionnaire = session('gestionnaire');
            $pdo=new PdoAssoChoisy();                                      
    
            $suppArticle = $pdo-> supprimerArticle($id);
            
                                              
            if($suppArticle != 0){

                $Success[] = 'Article Supprimer';
                
                return view('vu_accueilAdmin')
                    ->with('Success',$Success)
                    ->with('suppArticle ', $suppArticle )
                    ->with('pdo',$pdo) 
                    ->with('gestionnaire', $gestionnaire);
            }
            else{
                
                $erreurs[] = "Veuillez réessayer";

                return view('vu_accueilAdmin')
                    ->with('erreurs', $erreurs )
                    ->with('gestionnaire', $gestionnaire)
                    ->with('pdo',$pdo);            
            }   
        
        }
    }   



    
    function deconnecter(){
        session(['gestionnaire' => null]);
            return redirect()->route('chemin_connexion');
                     
    }
    


}