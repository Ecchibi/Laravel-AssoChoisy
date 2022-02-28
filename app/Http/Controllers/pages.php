<?php

namespace App\Http\Controllers;
use App\Models\PdoAssoChoisy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class pages extends Controller
{
    
    // function accueil(){       

    //     return view('banniere')
    //     ->with('visiteur',$visiteur);
        
    // }

    
    function activite($id){        
        $pdo=new PdoAssoChoisy();
        $idArticles = $pdo->getIdArticle($id) ;
        $banImage = $pdo->getImageBanniere($id);    
        $lesTitres= $pdo->getTitreActivites($id); 
        $desArticles  = $pdo->getlesarticlesParAct($id);
        $articleImage = $pdo-> getImageArticle( $idArticles['id'],$id);
        $titreArticle = $pdo-> getTitreArticles($id);
        return view('vu_activites')
                ->with('lesTitres',$lesTitres)
                ->with('desArticles',$desArticles)
                ->with('banImage',$banImage)
                ->with('articleImage',$articleImage)
                ->with('titreArticle',$titreArticle)
                ->with('id',$id)
                ->with('pdo',$pdo); 

    } 

    function accueil(){
        $pdo=new PdoAssoChoisy();
        $articleRecent = $pdo->getarticleRecent();
        $TitreArticleRecent = $pdo->getTitreArticleRecent();
        return view('index')
            ->with('pdo',$pdo)
            ->with('TitreArticleRecent',$TitreArticleRecent)
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


    function ajoutReservation(Request $request){        
        $pdo=new PdoAssoChoisy();
        $datereserv = $request['datereserv'];
        $nomreserv = $request['nomreserv']; 
        $prenomreserv = $request['prenomreserv']; 
        $organismereserv = $request['organismereserv']; 
        $telreserv = $request['telreserv']; 
        $emailreserv = $request['mailreserv']; 
        $lieureserv= $request['lieureserv'];      
        $req= $pdo->ajouterReservation($nomreserv, $prenomreserv, $datereserv, $emailreserv,$telreserv,	 $lieureserv, $organismereserv);
        

        if($req!=false)
        {
            return view('vu_reservation')
                    ->with('datereserv ',$datereserv)
                    ->with('nomreserv ',$nomreserv )
                    ->with('prenomreserv',$prenomreserv)
                    ->with('organismereserv',$organismereserv)
                    ->with('telreserv',$telreserv)
                    ->with('emailreserv',$emailreserv)
                    
                    ->with('req',$req) 
                    ->with('pdo',$pdo); 
        }
        else{
          
            $message = ' Veuillez reessayer';
            
            return view('vu_message')
                    ->with('message',$message);
                  
            }

    }

    function adherer(){
        return view('vu_adhesion');
    }
    
            //JE VEUX TELECHARGER LE PDF !!!!! T-T
    function uplaodFichier(){
        
            
    if(isset($_FILES['pdf_File']) && $_FILES['pdf_File']['error']===UPLOAD_ERR_OK )
    //pas besoin de request $_FILES recupere direct le champ name du form 
    // dd($_FILES['pdf_File']);
    {
        $leNomduFichier=$_FILES['pdf_File']['name'];//on specifie le ['nom']  du fichier upload 

    if(move_uploaded_file($_FILES['pdf_File']['tmp_name'],"C:/wamp64/www/AssoChoisyLaravel/public/Formulaire_dhadesion/$leNomduFichier"))                      // ↑tmp_name est un champ qui est créer par $_FILES['pdf_File'] pour stocké le fichier dans un fichier TeMPorraire avant de l'upload
        {                                     
            $message='Fichier bien envoyé';
        }
        else{
                $message="Erreur lors de l'envoi";
            }
    }
        
        // return Storage::download( $path, $pdf_data, $headers );
        // return Storage::disk('public')->download($file->path);
        return view('vu_message')
                ->with('message',$message);
                // ->with('path',$path)
                // ->with('pdf_data',$pdf_data)
                // ->with('req',$req)
    }

}