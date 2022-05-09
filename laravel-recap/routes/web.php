<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Models\Client;

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
    $clients = Client::all();
    return view('front/pages/welcome', compact('clients'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Client
Route::get('/back/clients', [ClientController::class, 'index'])->name('client.index');
Route::get('/back/clients/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/back/clients/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/back/clients/{id}/read', [ClientController::class, 'read'])->name('client.read');
Route::get('/back/clients/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/back/clients/{id}/update', [ClientController::class, 'update'])->name('client.update');
Route::post('/back/clients/{id}/delete', [ClientController::class, 'destroy'])->name('client.destroy');
