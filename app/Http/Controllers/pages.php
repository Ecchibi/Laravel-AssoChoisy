<?php

namespace App\Http\Controllers;
use App\Models\PdoAssoChoisy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class pages extends Controller
{

    function accueil(){
        $pdo=new PdoAssoChoisy();
        $articleRecent = $pdo->getarticleRecent();
        $TitreArticleRecent = $pdo->getTitreArticleRecent();
        return view('index')
            ->with('pdo',$pdo)
            ->with('TitreArticleRecent',$TitreArticleRecent)
            ->with('articleRecent',$articleRecent);
    }


    function activite($id){        
        $pdo=new PdoAssoChoisy();
        $banImage = $pdo->getImageBanniere($id);    
        $lesTitres= $pdo->getTitreActivites($id); 
        $desArticles  = $pdo->getlesarticlesParAct($id);
        $titreArticle = $pdo-> getTitreArticles($id);
        return view('vu_activites')
                ->with('lesTitres',$lesTitres)
                ->with('desArticles',$desArticles)
                ->with('banImage',$banImage)
                ->with('titreArticle',$titreArticle)
                ->with('id',$id)
                ->with('pdo',$pdo); 

    } 

    function article($id){
        $pdo=new PdoAssoChoisy();
        $lesTitres= $pdo->getTitreActivites($id); 
        $titreArticle = $pdo-> getTitreArticles($id);
        $articleImage = $pdo-> getImageArticle( $id );
        $article = $pdo-> getArticle($id);
    
        return view('article')
            ->with('lesTitres',$lesTitres)
            ->with('articleImage',$articleImage)
            ->with('article', $article)
            ->with('titreArticle',$titreArticle)
            ->with('id',$id)
            ->with('pdo',$pdo);
    }

    function apropos(){

        return view('vu_apropos');

    }

    function contact(){        
        
        return view('vu_contact');
        // ->with('visiteur',$visiteur);
    
    }

    
    function reservation(){        
        
        return view('vu_reservation')
        ->with('erreurs',null)
        ->with('Success',null);  // on doit initialiser l'erreur
        // ->with('visiteur',$visiteur);
    
    }

    function adherer(){
        return view('vu_adhesion')
            ->with('erreurs',null)
            ->with('Success',null);  // on doit initialiser l'erreur
        
    }
    
    //---- ON LE FAIT DANS mailController.php-----

    // function ajoutReservation(Request $request){        
    //     $pdo=new PdoAssoChoisy();
    //     $datereserv = $request['datereserv'];
    //     $nomreserv = $request['nomreserv']; 
    //     $prenomreserv = $request['prenomreserv']; 
    //     $organismereserv = $request['organismereserv']; 
    //     $telreserv = $request['telreserv']; 
    //     $emailreserv = $request['mailreserv']; 
    //     $lieureserv= $request['lieureserv'];      
    //     $req= $pdo->ajouterReservation($nomreserv, $prenomreserv, $datereserv, $emailreserv,$telreserv,	 $lieureserv, $organismereserv);
  
    
    //     if($req!=false)
    //     {
    //         $Success[] = "Envoyer Avec Succés ";

    //         return view('vu_reservation')
    //                 ->with('datereserv ',$datereserv)
    //                 ->with('nomreserv ',$nomreserv )
    //                 ->with('prenomreserv',$prenomreserv)
    //                 ->with('organismereserv',$organismereserv)
    //                 ->with('telreserv',$telreserv)
    //                 ->with('emailreserv',$emailreserv)
    //                 ->with('Success', $Success)
    //                 ->with('req',$req) 
    //                 ->with('pdo',$pdo); 
    //     }
    //     else{
          
    
    //         $erreurs[] = "Veuillez reessayer";

    //         return view('vu_reservation')
    //             ->with('erreurs',$erreurs);

                  
    //         }

    // }


            //JE VEUX TELECHARGER LE PDF !!!!! T-T
    function uplaodFichier(){
        
            
    if(isset($_FILES['pdf_File']) && $_FILES['pdf_File']['error']===UPLOAD_ERR_OK )
    //pas besoin de request $_FILES recupere direct le champ name du form 
    // dd($_FILES['pdf_File']);
    {
        $leNomduFichier=$_FILES['pdf_File']['name'];//on specifie le ['nom']  du fichier upload 

    if(move_uploaded_file($_FILES['pdf_File']['tmp_name'],"C:/wamp64/www/AssoChoisyLaravel/public/Formulaire_dhadesion/$leNomduFichier"))                      // ↑tmp_name est un champ qui est créer par $_FILES['pdf_File'] pour stocké le fichier dans un fichier TeMPorraire avant de l'upload
        {                                     
            $Success[] = "Fichier bien envoyé";
        }
        else{
                $erreurs[] ="Erreur lors de l'envoi";
                return view('vu_adhesion')
                ->with('erreurs',$erreurs);
            }
    }
        
        // return Storage::download( $path, $pdf_data, $headers );
        // return Storage::disk('public')->download($file->path);
        return view('vu_adhesion')
                ->with('Success',$Success);
                // ->with('path',$path)
                // ->with('pdf_data',$pdf_data)
                // ->with('req',$req)
    }

}