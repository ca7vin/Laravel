<?php

use App\Models\Article;
use App\Models\Photo;
use App\Models\Eleve;
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
    // dd(Photo::all());
    // $photo = Photo::where('name', 'amigo')->first();
    // dd($photo->name);
    // dd(Article::all());
    $eleve = Eleve::find(1);
    dd($eleve->nom, $eleve->prenom);
    return view('welcome');
});
