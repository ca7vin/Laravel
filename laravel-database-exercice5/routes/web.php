<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Models\User;
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




Route::get('/', function () {
    //     - Affichez tous les utilisateurs
    $users = User::all();
    // dd($users);
    //     - Affichez le premier utilisateur
    $firstUser = User::first();
    // dd($firstUser);
    //     - Affichez le dernier utilisateur
    $lastUser = User::orderBy('id', 'desc')->first();
    // dd($lastUser);
    //     - Affichez les utilisateurs grâce à leur nom
    $userByName = User::where('nom', 'Stiedemann') -> get();
    // dd($userByName);
    //     - Affichez l'utilisateur qui a l'id 5
    $user5 = User::find(5);
    // dd($user5);
    //     - Affichez le nombre d'utilisateurs qu'il y a dans la table
    $userCount = User::all()->count();
    // dd($userCount);
    // - Affichez deux utilisateurs qui font partie du même pays
    $userSameCountry = User::where('pays', 'Guadeloupe') ->take(2)-> get();
    // dd($userSameCountry);
    // - Affichez le premier utilisateur qui habite dans un pays spécifique
    $userFirstCountry = User::where('pays', 'Guadeloupe') -> first();
    // dd($userFirstCountry);
    return view('welcome');
});


Route::get('user', 'App\Http\Controllers\UserController@index');
Route::get('portfolio', 'App\Http\Controllers\PortfolioController@index');
Route::get('equipe', 'App\Http\Controllers\EquipeController@index');
Route::get('article', 'App\Http\Controllers\ArticleController@index');