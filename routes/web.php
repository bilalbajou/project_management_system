<?php


use App\Http\Controllers\collaborateurController;
use App\Http\Controllers\delete;
use App\Http\Controllers\homeController;
use App\Http\Controllers\listProjetController;
use App\Http\Controllers\projetController;
use App\Http\Controllers\reunionController;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\tacherController;
use App\Models\projet;
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
   
    // Routes projet
      Route::resource('projets',projetController::class);
      route::get('/projets/détails',[projetController::class,'plus'])->name("projets.plus");

    // Routes taches
    Route::resource('taches',tacheController::class);
    route::get('/taches/détails',[tacheController::class,'plus'])->name("projets.plus");
    
    //  Routes Réunion 
    Route::resource('reunions',reunionController::class);
    route::get('/reunion/détails',[reunionController::class,'plus'])->name("projets.plus");
    
    // Routes Collaborateur
    Route::resource('collabs',collaborateurController::class);
    route::get('/collaborateur/détails',[collaborateurController::class,'plus'])->name("projets.plus");
   

});
Route::middleware(['auth','chef_projet'])->group(function () {
      
  
});
       // Route Acceuil
Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified','chef_projet'])->get('/redirects', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\RoleController@index')->name('redirect');





