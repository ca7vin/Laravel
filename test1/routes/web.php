<?php

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
    return "Hello World";
});
Route::get('/coucou', function () {
    return "Coucou Calvoute";
});

Route::get('/{user}', function ($user) {
    return $user;
});

Route::get('/{nom}/{prenom}/{age}', function ($nom, $prenom, $age) {
    return "Bonjour, Mr. " . $nom . " " . $prenom . " vous avez " . $age . "ans";
});