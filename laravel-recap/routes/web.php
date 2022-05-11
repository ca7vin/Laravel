<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Service;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('back/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Client
Route::resource('/back/clients', ClientController::class);

// Service
Route::resource('/back/services', ServiceController::class);

// Banner
Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
// Role
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/{id}/read', [RoleController::class, 'read'])->name('role.read');
// User
Route::resource('/back/users', UserController::class);
// MAIL
Route::post('/contact-form', [NewsletterController::class, 'storeContactForm'])->name('contact-form.store');