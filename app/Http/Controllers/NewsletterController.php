<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter; //on doit rajouter le as sinon il ne la reconnait pas

class NewsletterController extends Controller
{

    public function store(Request $request)
    {

        if (!Newsletter::isSubscribed($request->user_email)) 
        {
            $request->validate([
                'user_email'=>'required|email'
            ]);

            Newsletter::subscribe($request->user_email); // ou subscribe Pending

            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        else{
            return redirect()->back()->with('failure', 'Sorry! You have already subscribed');
        }
        
          
    }
}
