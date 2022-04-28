<?php

use App\Http\Controllers\TitleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\Map;
use Illuminate\Support\Facades\Auth;

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
    $title = Title::all();
    $service = Service::all();
    $testi = Testimonial::all();
    $contact = Contact::all();
    return view('welcome',compact('title','service','testi','contact'));
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/errors/403', function(){
//     return view('/errors/403');
// });

// Route::resource('back/banners',BannerController::class);
// Route::resource('back/services',ServiceController::class);
// Route::resource('back/testimonials',TestimonialController::class);
// Route::resource('back/contacts',ContactController::class);
// Route::resource('back/roles',RoleController::class);
// Route::resource('back/titles',TitleController::class);
// Route::resource('back/users',UserController::class);
// Route::resource('back/courses',CourseController::class);


Route::resource('back/banners',BannerController::class);
Route::resource('back/services',ServiceController::class);
Route::resource('back/roles',RoleController::class);
Route::resource('back/titles',TitleController::class);
Route::resource('back/users',UserController::class);
Route::resource('back/courses',CourseController::class);

// Route::middleware(['auth','AdminVerification'])->group(function () {

// });

Route::resource('back/testimonials',TestimonialController::class);
Route::resource('back/contacts',ContactController::class);

// Route::middleware(['auth','WebmasterVerification'])->group(function () {
// });