<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\CooperativeController;
use App\Http\Controllers\OutilsinfoController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\PersonnephysiqueController;
use App\Http\Controllers\PersonnemoralController;
use App\Http\Controllers\RessortissantController;
use App\Http\Controllers\SuiviclientController;
use App\Http\Controllers\StatistiqueController;
use Illuminate\Support\Facades\Auth;

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



Route::get('/associations', [AssociationController::class,'index']);
Route::get('/associations/create', [AssociationController::class,'create']);
Route::post('/associations/store', [AssociationController::class,'store']);
Route::get('/associations/{id}/edit', [AssociationController::class,'edit']);
Route::put('/associations/{id}/update', [AssociationController::class,'update']);
Route::get('/associations/{id}', [AssociationController::class,'show']);
Route::delete('/associations/{id}', [AssociationController::class,'destroy']);
Route::get('/associations/pdf/association',[AssociationController::class,'pdf']);


Route::get('/',[CooperativeController::class,'admin']);
Route::get('/cooperatives', [CooperativeController::class,'index']);
Route::get('/cooperatives/create', [CooperativeController::class,'create']);
Route::post('/cooperatives/store', [CooperativeController::class,'store']);
Route::get('/cooperatives/pdf/cooperative',[CooperativeController::class,'pdf']);
Route::get('/cooperatives/search/{id}', [CooperativeController::class,'type']);
Route::get('/cooperatives/{id}/edit', [CooperativeController::class,'edit']);
Route::get('/cooperatives/admin',[CooperativeController::class,'admin']);
Route::put('/cooperatives/{id}/update', [CooperativeController::class,'update']);
Route::get('/cooperatives/{id}', [CooperativeController::class,'show']);
Route::delete('/cooperatives/{id}', [CooperativeController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/outilsinfos', [OutilsinfoController::class,'index']);
Route::get('/outilsinfos/create', [OutilsinfoController::class,'create']);
Route::post('/outilsinfos/store', [OutilsinfoController::class,'store']);
Route::get('/outilsinfos/pdf/outilsinfo', [OutilsinfoController::class,'pdf']);
Route::get('/outilsinfos/{id}/edit', [OutilsinfoController::class,'edit']);
Route::put('/outilsinfos/{id}/update', [OutilsinfoController::class,'update']);
Route::get('/outilsinfos/{id}', [OutilsinfoController::class,'show']);
Route::delete('/outilsinfos/{id}', [OutilsinfoController::class,'destroy']);


Route::get('/acceuils', [AcceuilController::class,'index']);
Route::get('/acceuils/create', [AcceuilController::class,'create']);
Route::post('/acceuils/store', [AcceuilController::class,'store']);
Route::get('/acceuils/pdf/acceuil',[AcceuilController::class,'pdf']);
Route::get('/acceuils/{id}/edit', [AcceuilController::class,'edit']);
Route::put('/acceuils/{id}/update', [AcceuilController::class,'update']);
Route::get('/acceuils/{id}', [AcceuilController::class,'show']);
Route::delete('/acceuils/{id}', [AcceuilController::class,'destroy']);



Route::get('/personnephysiques', [PersonnephysiqueController::class,'index']);
Route::get('/personnephysiques/create', [PersonnephysiqueController::class,'create']);
Route::post('/personnephysiques/store', [PersonnephysiqueController::class,'store']);
Route::get('/personnephysiques/{id}/edit', [PersonnephysiqueController::class,'edit']);
Route::put('/personnephysiques/{id}/update', [PersonnephysiqueController::class,'update']);
Route::get('/personnephysiques/{id}', [PersonnephysiqueController::class,'show']);
Route::delete('/personnephysiques/{id}', [PersonnephysiqueController::class,'destroy']);
Route::get('/personnephysiques/pdf/personnephysique',[PersonnephysiqueController::class,'pdf']);


Route::get('/suiviclients', [Suiviclientcontroller::class,'index']);
Route::get('/suiviclients/create', [Suiviclientcontroller::class,'create']);
Route::post('/suiviclients/store', [Suiviclientcontroller::class,'store']);
Route::get('/suiviclients/pdf/suiviclient', [Suiviclientcontroller::class,'pdf']);
Route::get('/suiviclients/{id}/edit', [Suiviclientcontroller::class,'edit']);
Route::put('/suiviclients/{id}/update', [Suiviclientcontroller::class,'update']);
Route::get('/suiviclients/{id}', [Suiviclientcontroller::class,'show']);
Route::delete('/suiviclients/{id}', [Suiviclientcontroller::class,'destroy']);

Route::get('/personnemorals', [PersonnemoralController::class,'index']);
Route::get('/personnemorals/create', [PersonnemoralController::class,'create']);
Route::post('/personnemorals/store', [PersonnemoralController::class,'store']);
Route::get('/personnemorals/pdf/personnemoral', [PersonnemoralController::class,'pdf']);
Route::get('/personnemorals/{id}/edit', [PersonnemoralController::class,'edit']);
Route::put('/personnemorals/{id}/update', [PersonnemoralController::class,'update']);
Route::get('/personnemorals/{id}', [PersonnemoralController::class,'show']);
Route::delete('/personnemorals/{id}', [PersonnemoralController::class,'destroy']);


Route::get('/ressortissants', [RessortissantController::class,'index']);
Route::get('/ressortissants/create', [RessortissantController::class,'create']);
Route::post('/ressortissants/store', [RessortissantController::class,'store']);
Route::get('/ressortissants/pdf/ressortissant', [RessortissantController::class,'pdf']);
Route::get('/ressortissants/{id}/edit', [RessortissantController::class,'edit']);
Route::put('/ressortissants/{id}/update', [RessortissantController::class,'update']);
Route::get('/ressortissants/{id}', [RessortissantController::class,'show']);
Route::delete('/ressortissants/{id}', [RessortissantController::class,'destroy']);

Route::get('/statistiques', [StatistiqueController::class,'index']);
Route::get('/statistiques/create', [StatistiqueController::class,'create']);
Route::post('/statistiques/store', [StatistiqueController::class,'store']);
Route::get('/statistiques/pdf/acceuil',[StatistiqueController::class,'pdf']);
Route::get('/statistiques/{id}/edit', [StatistiqueController::class,'edit']);
Route::put('/statistiques/{id}/update', [StatistiqueController::class,'update']);
Route::get('/statistiques/{id}', [StatistiqueController::class,'show']);
Route::delete('/statistiques/{id}', [StatistiqueController::class,'destroy']);


