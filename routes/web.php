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

Route::get('/',[homeController::class,"index"])->name('Homepage');
Route::post('/addContact',[homeController::class,"store"])->name('addMessage');
Route::get('/addProjet',[addprojetController::class,"index"])->name('addProjet');
Route::get('/listeProjet',[listProjetController::class,"index"])->name('listeProjet');
Route::get('/addTache',[addTacheController::class,"index"])->name('addTache');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('chef_projet.dashboard');
})->name('dashboard');







