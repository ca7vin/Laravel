<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\EquipeController;

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
    return view('welcome');
});
// Equipe
Route::get('/back/equipes', [EquipeController::class, 'index'])->name('equipe.index');
Route::get('/back/equipes/create', [EquipeController::class, 'create'])->name('equipe.create');
Route::post('/back/equipes/store', [EquipeController::class, 'store'])->name('equipe.store');
Route::get('/back/equipes/{id}/read', [EquipeController::class, 'read'])->name('equipe.read');
Route::get('/back/equipes/{id}/edit', [EquipeController::class, 'edit'])->name('equipe.edit');
Route::post('/back/equipes/{id}/update', [EquipeController::class, 'update'])->name('equipe.update');
Route::post('/back/equipes/{id}/delete', [EquipeController::class, 'destroy'])->name('equipe.destroy');
// Joueur
Route::get('/back/joueurs', [JoueurController::class, 'index'])->name('joueur.index');
Route::get('/back/joueurs/create', [JoueurController::class, 'create'])->name('joueur.create');
Route::post('/back/joueurs/store', [JoueurController::class, 'store'])->name('joueur.store');
Route::get('/back/joueurs/{id}/read', [JoueurController::class, 'read'])->name('joueur.read');
Route::get('/back/joueurs/{id}/edit', [JoueurController::class, 'edit'])->name('joueur.edit');
Route::post('/back/joueurs/{id}/update', [JoueurController::class, 'update'])->name('joueur.update');
Route::post('/back/joueurs/{id}/delete', [JoueurController::class, 'destroy'])->name('joueur.destroy');
