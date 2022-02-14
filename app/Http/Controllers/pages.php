<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    function accueil(){
        if( session('visiteur') != null){
        $visiteur = session('visiteur');
        
        return view('banniere')
        ->with('visiteur',$visiteur);
        }
    } 
}