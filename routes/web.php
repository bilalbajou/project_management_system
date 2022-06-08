<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\projetController;
use App\Http\Controllers\reunionController;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\tacherController;
use App\Http\Controllers\userController;
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
Route::middleware(['auth'])->group(function () {
                                                                                                                                                                                                                             
   
    // Routes projet
      Route::resource('projets',projetController::class);
      route::get('/projets/détails/{id}',[projetController::class,'show'])->name("projets.show");

    // Routes taches
    Route::resource('taches',tacheController::class);
    
    //  Routes Réunion 
    Route::resource('reunions',reunionController::class);
    
    // Routes Collaborateur
    Route::resource('collabs',collaborateurController::class);
   

});
Route::middleware(['auth','Webmaster'])->group(function () {
      
     Route::get('/utilisateurs',[userController::class,'index'])->name('utilisateurs.index');
     Route::put('/utilisateurs/activer/{id}',[userController::class,'activer'])->name('utilisateurs.activer');
     Route::put('/utilisateurs/désactiver/{id}',[userController::class,'desactiver'])->name('utilisateurs.désactiver');
});
       // Route Acceuil
Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');

Route::middleware(['auth:sanctum', 'verified','chef_projet'])->get('/redirects', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');

Route::get('redirects','App\Http\Controllers\RoleController@index')->name('redirect');
Route::middleware(['auth'])->group(function () {
//collaborateur
Route::resource('col_listeprojet',col_listeprojetcontrolleur::class);
Route::resource('col_listetache',col_listetachecontrolleur::class);
Route::resource('col_listereunion',col_listereunioncontrolleur::class);
// route::get('/col_listetache/{id}',[projetController::class,'edit']);
route::get('/col_listetache/listetache/modif_etat/{id}',[col_listetacheControlleur::class,'edit'])->name("col_listetache.edit");
route::post('/col_listetache/listetache/modif_etat/{id}',[col_listetacheControlleur::class,'update'])->name("col_listetache.update");

});



