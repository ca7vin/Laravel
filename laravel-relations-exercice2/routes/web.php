<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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
// User
Route::get('/back/users', [UserController::class, 'index'])->name('user.index');
Route::get('/back/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/back/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/back/users/{id}/read', [UserController::class, 'read'])->name('user.read');
Route::get('/back/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/back/users/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::post('/back/users/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
// Profile
Route::get('/back/profiles', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/back/profiles/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/back/profiles/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/back/profiles/{id}/read', [ProfileController::class, 'read'])->name('profile.read');
Route::get('/back/profiles/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/back/profiles/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/back/profiles/{id}/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
