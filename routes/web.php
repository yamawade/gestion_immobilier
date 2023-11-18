<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\DashboardUserController;

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


/*routes pour les biens*/
Route::get('/biens',[BienController::class,'index'])->name('biens.index');
Route::get('/ajoutBien',[BienController::class,'create'])->name('biens.create');
Route::post('/ajoutBien-traitement',[BienController::class,'store'])->name('biens.store');
Route::get('/biens/{id}/detail',[BienController::class,'show'])->name('biens.show');
Route::get('/admin',[BienController::class,'index_admin'])->name('biens.index_admin');
Route::get('/detail-bien/{id}',[BienController::class,'show_admin'])->name('biens.show_admin');