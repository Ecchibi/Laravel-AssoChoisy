<?php

namespace App\Http\Controllers;
use App\models\PdoAssoChoisy;
use Illuminate\Http\Request;
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
}