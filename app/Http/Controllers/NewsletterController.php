<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter; //on doit rajouter le as sinon il ne la reconnait pas

class NewsletterController extends Controller
{

    public function store(Request $request)
    {

        if (!Newsletter::isSubscribed($request->user_email) || Newsletter::isSubscribed($request->user_email) ) 
        {
            $request->validate([
                'user_email'=>'required|email|max:255',
                'nom'=>'required|max:25',
                'prenom'=>'required|max:25'
            ]);

            Newsletter::subscribeOrUpdate($request->input('user_email'), ['LNAME'=>$request->input('nom'),'FNAME'=>$request->input('prenom')]); 
            // ou subscribe Pending
            //FNAME et LNAME sinon ne marche pas

            return redirect()->back()->with('success', "Merci d'avoir souscrie à notre NewsLetter");
        }
        else{
            return redirect()->back()->with('failure', 'Veuillez réessayer');
        }
        
          
    }
}
