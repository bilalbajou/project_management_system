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
    // Route::get('/addProjet',[addprojetController::class,"index"])->name('addProjet');
    // Route::post('/addProjet',[addprojetController::class,"store"]);
    // Route::get('/listeProjet',[listProjetController::class,"index"])->name('listeProjet');
    // Route::delete('/projet/{id_projet}',[listProjetController::class,"destroy"])->name('projet.destroy');
    // Route::delete('/projet/update/{id_projet}',[listProjetController::class,"edit"])->name('projet.edit');
      Route::resource('projets',projetController::class);
    // Route::delete('/projet/update/{id_projet}',[listProjetController::class,"update"])->name('projet.update');
    // Route::delete('/projet/détails/{id_projet}',[listProjetController::class,"more"])->name('projets.more');
    // Routes taches
    // Route::get('/addTache',[tacheController::class,"create"])->name('taches.create');
    // Route::post('/addTache',[tacheController::class,"store"])->name('taches.store');
    Route::resource('taches',tacheController::class);
    //  Routes Réunion 
    // Route::get('/addReunion',[reunionController::class,"create"])->name('reunions.create');
    // Route::post('/addReunion',[reunionController::class,"store"])->name("reunions.store");
    Route::resource('reunions',reunionController::class);

    // Routes Collaborateur
    // Route::get('/addCollaborateur',[collaborateurController::class,"create"])->name('collaborateurs.create');
    // Route::post('/addCollaborateur',[collaborateurController::class,"store"])->name("collaborateurs.store");
    Route::resource('collabs',collaborateurController::class);

    
});
       // Route Acceuil
Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified','chef_projet'])->get('/redirects', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\RoleController@index')->name('redirect');





