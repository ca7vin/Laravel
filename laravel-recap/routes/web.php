<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
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

Route::get('/', function () {
    $clients = Client::all();
    $services = Service::all();
    $banner = Banner::all();
    return view('front/pages/welcome', compact('clients', 'services', 'banner'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Client
// Route::get('/back/clients', [ClientController::class, 'index'])->name('client.index');
// Route::get('/back/clients/create', [ClientController::class, 'create'])->name('client.create');
// Route::post('/back/clients/store', [ClientController::class, 'store'])->name('client.store');
// Route::get('/back/clients/{id}/read', [ClientController::class, 'read'])->name('client.read');
// Route::get('/back/clients/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
// Route::post('/back/clients/{id}/update', [ClientController::class, 'update'])->name('client.update');
// Route::post('/back/clients/{id}/delete', [ClientController::class, 'destroy'])->name('client.destroy');

Route::resource('/back/clients', ClientController::class);

// Service
// Route::get('/back/services', [ServiceController::class, 'index'])->name('service.index');
// Route::get('/back/services/create', [ServiceController::class, 'create'])->name('service.create');
// Route::post('/back/services/store', [ServiceController::class, 'store'])->name('service.store');
// Route::get('/back/services/{id}/read', [ServiceController::class, 'read'])->name('service.read');
// Route::get('/back/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
// Route::post('/back/services/{id}/update', [ServiceController::class, 'update'])->name('service.update');
// Route::post('/back/services/{id}/delete', [ServiceController::class, 'destroy'])->name('service.destroy');

Route::resource('/back/services', ServiceController::class);

// Banner
Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
