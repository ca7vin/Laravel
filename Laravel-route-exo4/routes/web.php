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
    return view('welcome');
});

Route::get('/pages/contact/{nom}/{prenom}/{number}', function ($nom, $prenom, $number) {
    return view ('pages/contact', compact('nom', 'prenom', 'number'));
});

Route::get('/pages/about/{fruit}', function ($fruit) {
    return view ('pages/about', compact('fruit'));
});

