<?php

use App\Http\Controllers\AddContact;
use App\Http\Controllers\addprojetController;
use App\Http\Controllers\addTacheController;
use App\Http\Controllers\collaborateurController;
use App\Http\Controllers\delete;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listProjetController;
use App\Http\Controllers\projetController;
use App\Http\Controllers\reunionController;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\tacherController;
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
Route::fallback(function() {
        return view('404');
});
Route::middleware(['auth','chef_projet'])->group(function () {
    // Routes projet                                                                                                                                                                                                                           
    Route::get('/addProjet',[projetcontroller::class,"create"])->name('addprojet');
    Route::post('/addProjet',[projetcontroller::class,"store"]);
    Route::get('/listeProjet',[projetcontroller::class,"index"])->name('projet.index');
    Route::delete('/projet/{id_projet}',[listProjetController::class,"destroy"])->name('projet.destroy');
    // Route::delete('/projet/update/{id_projet}',[listProjetController::class,"edit"])->name('projet.edit');
    Route::delete('/projet/update/{id_projet}',[listProjetController::class,"update"])->name('projets.update');
    Route::get('/projet/détails',[projetcontroller::class,"more"])->name('projets.more');

    // Routes projet
      Route::resource('projets',projetController::class);
    // Routes taches
    Route::resource('taches',tacheController::class);
    Route::get('/addtache',[tacheController::class,"create"])->name('taches.crete');
    Route::post('/addtache',[tacheController::class,"store"]);
    Route::get('/listetache',[tacheController::class,"index"])->name('taches.index');
    Route::delete('/tache/{id_reunions}',[tacheController::class,"destroy"])->name('tache.destroy');
    Route::get('/tache/détails',[tacheController::class,"more"])->name('tache.more');
    Route::delete('/tache/update/{id_tache}',[tacheController::class,"update"])->name('tache.update');

    //  Routes Réunion 
    Route::resource('reunions',reunionController::class);
    Route::get('/addreunion',[reunionController::class,"create"])->name('reunions.create');
    Route::post('/addreunion',[reunionController::class,"store"]);
    Route::get('/listereunion',[reunionController::class,"index"])->name('reunions.index');
    Route::delete('/reunion/{id_reunion}',[reunionController::class,"destroy"])->name('reunion.destroy');
    Route::get('/reunion/détails',[reunionController::class,"more"])->name('reunion.more');
    Route::delete('/reunion/update/{id_reunion}',[reunionController::class,"update"])->name('reunions.update');

    // Routes Collaborateur
    Route::resource('collabs',collaborateurController::class);
    Route::get('/addcollabORATEUR ',[collaborateurController::class,"create"])->name('collaborateurs.create');
    Route::post('/addcollaborateur',[reunionController::class,"store"]);
    Route::get('/listecollaboeateur',[collaborateurController::class,"index"])->name('collaborateurs.index');
    Route::delete('collabs/{id}',[collaborateurController::class,"destroy"])->name('collaborateur.destroy');
    Route::get('/collabs/détails',[collaborateurController::class,"more"])->name('collaborateur.more');


    
});
       // Route Acceuil
Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified','chef_projet'])->get('/redirects', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\RoleController@index')->name('redirect');





