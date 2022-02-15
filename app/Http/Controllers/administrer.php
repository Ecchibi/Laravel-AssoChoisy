<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administrer extends Controller
{
    function administrer(){        
     
        // PdoAssoChoisy::getTitreActivites(1);
        
        return view('vu_activites');
        // ->with('visiteur',$visiteur); 
    }
}
