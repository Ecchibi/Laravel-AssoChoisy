<?php

namespace App\Http\Controllers;
use App\models\PdoAssoChoisy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send(Request $request){
        //validate form 
        $request->validate([

            'datereserv'=>'required',
            'nomreserv'=>'required',
            'prenomreserv'=>'required',
            'organismereserv'=>'required',
            'telreserv'=>'required',
            'mailreserv'=>'required|email',
            'lieureserv'=>'required'

            // 'name'=>'required',
            // 'email'=>'required|Email',
            // 'subject'=>'required',
            // 'message'=>'required'
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient'=>'contact@hautes-bornes.fr',
                'fromDate'=>$request->datereserv,
                'fromName'=>$request->nomreserv,
                'prenomreserv'=>$request->prenomreserv,
                'organismereservation'=>$request->organismereserv,
                'telreserv'=>$request->telreserv,
                'fromEmail'=>$request->mailreserv,
                'lieureserv'=>$request->lieureserv
                
                // 'fromEmail'=>$request->email,
                // 'fromName'=>$request->name,
                // 'Subject'=>$request->subject,
                // 'body'=>$request->message,

            ];

            Mail::send('emails/email-template',$mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->Subject("Email:".$mail_data['fromEmail']);


            });

            $pdo=new PdoAssoChoisy();
            $datereserv = $request['datereserv'];
            $nomreserv = $request['nomreserv']; 
            $prenomreserv = $request['prenomreserv']; 
            $organismereserv = $request['organismereserv']; 
            $telreserv = $request['telreserv']; 
            $emailreserv = $request['mailreserv']; 
            $lieureserv= $request['lieureserv'];      
            $req= $pdo->ajouterReservation($nomreserv, $prenomreserv, $datereserv, $emailreserv,$telreserv,	 $lieureserv, $organismereserv);

            return redirect()->back()->with('success', 'Reservation Envoyé')
                                    ->with('datereserv ',$datereserv)
                                    ->with('nomreserv ',$nomreserv )
                                    ->with('prenomreserv',$prenomreserv)
                                    ->with('organismereserv',$organismereserv)
                                    ->with('telreserv',$telreserv)
                                    ->with('emailreserv',$emailreserv)
                                    ->with('req',$req) ;
            
        }
            
        else{
            return redirect()->back()->withInput()->with('erreur', 'Verifier votre connexion');
        }
    
            
          
}

    public function send2(Request $request){
    //validate form 
    $request->validate([

        'name'=>'required',
        'prenom'=>'required',
        'number'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required',
 
    ]);

    if($this->isOnline()){
        $mail_data = [
            'recipient'=>'contact@hautes-bornes.fr',
            'fromName'=>$request->name,
            'fromNom'=>$request->prenom,
            'fromNumber'=>$request->number,
            'fromEmail'=>$request->email,
            'fromSubject'=>$request->subject,
            'fromBody'=>$request->message,
      
            

        ];

        Mail::send('emails/email2-template',$mail_data, function($message) use ($mail_data){
            $message->to($mail_data['recipient'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    ->Subject($mail_data['fromSubject']);


        });

            return redirect()->back()->with('success', 'Envoyé');
      
      }
            
        else{
            return redirect()->back()->withInput()->with('erreur', 'Verifier votre connexion');
        }

        
      
    }
        
    




    public function isOnline($site = "https://www.youtube.com/") {
        if(@fopen($site, "r")){
            return true;
        }
        else{
            return false;
        }
    }


}
