<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\EquipeController;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Support\Facades\DB;

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
    $equipes = Equipe::inRandomOrder()->get();
    $twoTeam = [];
    foreach ($equipes as $equipe) {
        if ($equipe->joueurs->count() >= $equipe -> effectif) {
            array_push($twoTeam, $equipe);
        }
    }
    $twoTeam = array_slice($twoTeam, 0, 2);
    // 
    $joueurs = Joueur::inRandomOrder()->get();
    $fourPlayers = [];
    foreach ($joueurs as $joueur) {
        if ($joueur->equipe_id == 5) {
            array_push($fourPlayers, $joueur);
        }
    }
    $fourPlayers = array_slice($fourPlayers, 0, 4);
    // 
    $fourWoTeam = [];
    foreach ($joueurs as $joueur) {
        if ($joueur->equipe_id != 5) {
            array_push($fourWoTeam, $joueur);
        }
    }
    $fourWoTeam = array_slice($fourWoTeam, 0, 4);
    // 
    $emptyTeam = [];
    foreach ($equipes as $equipe) {
        if ($equipe->effectif > $equipe->joueurs->count()) {
            array_push($emptyTeam, $equipe);
        }
    }
    $emptyTeam = array_slice($emptyTeam, 0, 2);
    // 
    $femaleWithTeam = [];
    foreach ($joueurs as $joueur) {
        if ($joueur->equipe_id != 5 && $joueur->genre == 'F') {
            array_push($femaleWithTeam, $joueur);
        }
    }
    $femaleWithTeam = array_slice($femaleWithTeam, 0, 5);
    // 
    $maleWithTeam = [];
    foreach ($joueurs as $joueur) {
        if ($joueur->equipe_id != 5 && $joueur->genre == 'M') {
            array_push($maleWithTeam, $joueur);
        }
    }
    $maleWithTeam = array_slice($maleWithTeam, 0, 5);
    return view('welcome', compact('twoTeam', 'fourPlayers', 'fourWoTeam', 'emptyTeam','maleWithTeam', 'femaleWithTeam', 'equipes', 'joueurs'));
})->name("welcome");
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
// Poste
Route::get('/back/postes', [PosteController::class, 'index'])->name('poste.index');
// Photo
Route::get('/back/photos', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/back/photos/{id}/read', [PhotoController::class, 'read'])->name('photo.read');
Route::post('/back/photos/{id}/delete', [PhotoController::class, 'destroy'])->name('photo.destroy');
// 
