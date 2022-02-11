<?php

use Illuminate\Support\Facades\Route;

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
    return view('squelette\app');
});


/*--------------------------------AJOUTER USERS------------------------------------------*/

//Route::get(''accueil'',[
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


// Route::get('apropos',[
//     'as'=>'chemin_activites',
//     'uses'=>'c_pages@Méthodes'
// ]);

//Route::get('reservation',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);

//Route::get('contact',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);


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

//Route::get('connexion',[
//     'as'=>'chemin_gestionFrais',
//     'uses'=>'gererFraisController@saisirFrais'
// ]);

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
