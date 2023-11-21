<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*routes pour les utilisateurs */
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/connexionUser', [AuthController::class,'authenticate']);
Route::get('/dashboardUser',[DashboardUserController::class,'show'])->middleware('auth');
Route::get('/admin',[DashboardUserController::class,'index'])->middleware('auth');
Route::post('/deconnexionUser', [AuthController::class,'logout']);
Route::get('/inscription', [AuthController::class,'create']);
Route::post('/inscriptionUser', [AuthController::class,'store']);
/*routes pour les utilisateurs simple*/
Route::get('/listeUtilisateur', [AuthController::class,'index']);


/*routes pour les biens*/
Route::get('/dashboardUser',[BienController::class,'index'])->name('biens.index')->middleware('auth');
Route::get('/ajoutBien',[BienController::class,'create'])->name('biens.create')->middleware('auth');
Route::post('/ajoutBien-traitement',[BienController::class,'store'])->name('biens.store')->middleware('auth');
Route::get('/biens/{id}/detail',[BienController::class,'show'])->name('biens.show')->middleware('auth');
// Route::get('/admin',[BienController::class,'index_admin'])->name('biens.index_admin');
Route::get('/detail-bien/{id}',[BienController::class,'show_admin'])->name('biens.show_admin')->middleware('auth');
Route::get('/biens/update/{id}',[BienController::class,'edit'])->name('biens.edit')->middleware('auth');
Route::post('/biens/update-traitement/{id}',[BienController::class,'update'])->name('biens.update')->middleware('auth');
Route::get('/biens/delete/{id}',[BienController::class,'destroy'])->name('biens.destroy')->middleware('auth');

Route::post('/comment-traitement/{id}',[CommentController::class,'store']);

Route::get('/modifier-commentaire/{id}', [CommentController::class,'edit'])->name('commentaire.modifier');
Route::post('/comment-update-traitement/{id}',[CommentController::class,'update']); 
Route::get('/delete-commentaire/{id}', [CommentController::class,'delete'])->name('commentaire.supprimer');
