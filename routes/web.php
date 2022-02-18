<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ArticleController;


Route::resource('articles',ArticleController::class);
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

Route::get('/',[ // pareil que acceuil 
    'as'=>'chemin_accueil',
    'uses'=>'App\Http\Controllers\pages@accueil'  

]);




/*--------------------------------AJOUTER USERS------------------------------------------*/


Route::get('accueil',[
    'as'=>'chemin_accueil',
    'uses'=>'App\Http\Controllers\pages@accueil'  //faut mettre tout le chemin
]);

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

Route::post('ajoutReservation',[
    'as'=>'chemin_ajoutReservation',
    'uses'=>'App\Http\Controllers\pages@ajoutReservation'
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

Route::get('activiteUpdate/{id}',[
    'as'=>'chemin_activiteUpdate',
    'uses'=>'App\Http\Controllers\administrer@activiteUpdate'  //faut mettre tout le chemin
]);

Route::get('modifier/{id}',[
    'as'=>'chemin_modifier',
    'uses'=>'App\Http\Controllers\administrer@modifier'  //faut mettre tout le chemin
]);


Route::post('enregModification',[
    'as'=>'chemin_enregModification',
    'uses'=>'App\Http\Controllers\administrer@enregModification'
]);
