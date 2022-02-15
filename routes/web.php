<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('index');
});

Route::get('accueil', function () {
    
    return view('index');
});


/*--------------------------------AJOUTER USERS------------------------------------------*/


//reussir multiple view ou alors le faire dans le controlleur
// Route::get('accueil',[
//     'as' => 'chemin_accueil',
//     'uses' => 'connexionController@articlerecent'
// ]);

//     Route::get('/oui', function () {
//         return view('vu_banniere');     
//     });

//     Route::get('article', function () {
//         return view('vu_articleVideo');
//     });



Route::get('activite/{id}',[
    'as'=>'chemin_activite',
    'uses'=>'App\Http\Controllers\pages@activite'  //faut mettre tout le chemin
]);



Route::get('apropos',[
    'as'=>'chemin_apropos',
    'uses'=>'App\Http\Controllers\pages@apropos'
]);

Route::get('reservation',[
    'as'=>'chemin_reservation',
    'uses'=>'App\Http\Controllers\pages@reservation'
]);

Route::get('contact',[
    'as'=>'chemin_contact',
    'uses'=>'App\Http\Controllers\pages@contact'
]);


// Route::get('interAsso',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);

// Route::get('adhesion',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);

// Route::get('quelquechose/{id}',[ 
//         'as'=>'chemin_quelquechose',
//         'uses'=>'quelquechoseController@quelquechosetruc'
// ]);


/*--------------------------------AJOUTER ADMINISTRER------------------------------------------*/

Route::get('connexion',[
    'as'=>'chemin_connexion',
    'uses'=>'App\Http\Controllers\administrer@connexion'
]);

Route::post('controler',[
    'as'=>'chemin_connecter',
    'uses'=>'App\Http\Controllers\administrer@connecter'
]);

//Route::get('controler',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);


// Route::get('jardin',[
//     'as'=>'chemin_activites',
//     'uses'=>'c_pages@Méthodes'
// ]);

// Route::get('astronomie',[
//     'as'=>'chemin_activites',
//     'uses'=>'c_pages@Méthodes'
// ]);

// Route::get('animations',[
//     'as'=>'chemin_activites',
//     'uses'=>'c_pages@Méthodes'
// ]);


//Route::get('modifier',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);

//Route::get('enregModification',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);
