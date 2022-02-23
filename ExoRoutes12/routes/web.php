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

Route::get('/about', function () {
    return view('about');
});
Route::get('/welcome', function () {
    return view('welcome');
});

// EXO 1
Route::get('/Bonjour', function () {
    return "Bonjour chers utilisateurs";
});
// EXO 2
Route::get('/{user}', function ($user) {
    return "$user, bienvenue sur mon site";
});
// EXO 3
Route::get('/bonjour{id}', function ($id) {
    return "Bonjour ${id}";
});


