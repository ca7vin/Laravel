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


Route::get('/pages/coding', function () {
    // TABLEAU EXO 6
    $eleves = ["Calvin", "Marcyl", "Adil", "Aleks", "Jade", "Louis", "Imane", "Amanda", "Ines", "Elliot", "Samy", "Nico", "Momo", "Elias"];
    // OBJET EXO 6
    $personne = [
        'nom' => 'Adnan',
        "prenom" => "Marcyl",
        "age" => 25,
        "commune" => "Schaerbeek"
    ];
    $personne2 = [
        'nom' => 'Roberto',
        "prenom" => "Jean",
        "age" => 19,
        "commune" => "Schaerbeek"
    ];
    $personne3 = [
        'nom' => 'Ramolo',
        "prenom" => "Pablo",
        "age" => 17,
        "commune" => "Schaerbeek"
    ];
    $personne4 = [
        'nom' => 'Pitou',
        "prenom" => "Jean",
        "age" => 9,
        "commune" => "Schaerbeek"
    ];
    $personne5 = [
        'nom' => 'Problemo',
        "prenom" => "Tango",
        "age" => 17,
        "commune" => "Schaerbeek"
    ];
    $personneObjet = (object) $personne;
    $personneObjet2 = (object) $personne2;
    $personneObjet3 = (object) $personne3;
    $personneObjet4 = (object) $personne4;
    $personneObjet5 = (object) $personne5;

    $personnes= [$personneObjet, $personneObjet2, $personneObjet3, $personneObjet4, $personneObjet5];


    return view ('pages/coding', compact('eleves', 'personneObjet', 'personnes'));
});