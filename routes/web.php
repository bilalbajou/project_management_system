<?php

use App\Http\Controllers\AddContact;
use App\Http\Controllers\addprojetController;
use App\Http\Controllers\addTacheController;
use App\Http\Controllers\delete;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listProjetController;
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
    Route::get('/addProjet',[addprojetController::class,"index"])->name('addProjet');
    Route::post('/addProjet',[addprojetController::class,"store"]);
    Route::get('/listeProjet',[listProjetController::class,"index"])->name('listeProjet');
    Route::delete('/projet/{id_projet}',[listProjetController::class,"destroy"])->name('projet.destroy');
    Route::delete('/projet/update/{id_projet}',[listProjetController::class,"edit"])->name('projet.edit');
    // Route::delete('/projet/update/{id_projet}',[listProjetController::class,"update"])->name('projet.update');
    Route::get('/addTache',[addTacheController::class,"index"])->name('addTache');
    
});
Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified','chef_projet'])->get('/dashboard', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');

 

Route::get('redirects','App\Http\Controllers\RoleController@index')->name('redirect');






