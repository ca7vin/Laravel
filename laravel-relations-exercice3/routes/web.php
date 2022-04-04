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
    $joueurs = Joueur::inRandomOrder()->get();
    $twoTeam = [];
    foreach ($equipes as $equipe) {
        if ($equipe->joueurs->count() >= $equipe -> effectif) {
            array_push($twoTeam, $equipe);
        }
    }
    $twoTeam = array_slice($twoTeam, 0, 2);
    // 
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




Route::resource('equipes', EquipeController::class);
Route::resource('joueurs', JoueurController::class);
