<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;
use App\Models\Banner;
use App\Models\Business;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Project;
use App\Models\Testimonial;
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
    $dataBanner = Banner::all();
    $dataBusiness = Business::all();
    $dataContact = Contact::all();
    $dataFooter = Footer::all();
    $dataHeader = Header::all();
    $dataProject = Project::all();
    $dataTestimonial = Testimonial::all();
    return view('front/welcome', compact('dataBanner', 'dataBusiness', 'dataContact', 'dataFooter', 'dataHeader', 'dataProject', 'dataTestimonial'));
});

Route::get('/back/home-back', function () {
    return view('back/home-back');
});

// BANNER
Route::get('/back/banners', "App\Http\Controllers\BannerController@index")->name("banners");
Route::post("/back/banners/{id}/delete", [BannerController::class, "destroy"])->name('banner.destroy');

Route::get('back/pages/banner/banner-edit/{id}', [BannerController::class, "edit"]);
Route::post("back/pages/banner/banner-update/{id}", [BannerController::class, "update"])->name('banner.update');

Route::get('back/pages/banner/banner-create', [BannerController::class, "create"]);
Route::post('back/pages/banner/banner-store', [BannerController::class, "store"])->name('banner.store');

// BUSINESS
Route::get('/back/business', "App\Http\Controllers\BusinessController@index")->name("business");
Route::post("/back/business/{id}/delete", [BusinessController::class, "destroy"])->name('business.destroy');

Route::get('back/pages/business/business-edit/{id}', [BusinessController::class, "edit"]);
Route::post("back/pages/business/business-update/{id}", [BusinessController::class, "update"])->name('business.update');

Route::get('back/pages/business/business-create', [BusinessController::class, "create"]);
Route::post('back/pages/business/business-store', [BusinessController::class, "store"])->name('business.store');

// CONTACT
Route::get('/back/contact', "App\Http\Controllers\ContactController@index")->name("contact");
Route::post("/back/contact/{id}/delete", [ContactController::class, "destroy"])->name('contact.destroy');

Route::get('back/pages/contact/contact-edit/{id}', [ContactController::class, "edit"]);
Route::post("back/pages/contact/contact-update/{id}", [ContactController::class, "update"])->name('contact.update');

Route::get('back/pages/contact/contact-create', [ContactController::class, "create"]);
Route::post('back/pages/contact/contact-store', [ContactController::class, "store"])->name('contact.store');

// FOOTER
Route::get('/back/footer', "App\Http\Controllers\FooterController@index")->name("footer");
Route::post("/back/footer/{id}/delete", [FooterController::class, "destroy"])->name('footer.destroy');

Route::get('/back/pages/footer/footer-edit/{id}', [FooterController::class, "edit"]);
Route::post("/back/pages/footer/footer-update/{id}", [FooterController::class, "update"])->name('footer.update');

Route::get('/back/pages/footer/footer-create', [FooterController::class, "create"]);
Route::post('/back/pages/footer/footer-store', [FooterController::class, "store"])->name('footer.store');

// HEADER
Route::get('/back/header', "App\Http\Controllers\HeaderController@index")->name("header");
Route::post("/back/header/{id}/delete", [HeaderController::class, "destroy"])->name('header.destroy');

Route::get('/back/pages/header/header-edit/{id}', [HeaderController::class, "edit"]);
Route::post("/back/pages/header/header-update/{id}", [HeaderController::class, "update"])->name('header.update');

Route::get('/back/pages/header/header-create', [HeaderController::class, "create"]);
Route::post('/back/pages/header/header-store', [HeaderController::class, "store"])->name('header.store');

// PROJECT
Route::get('/back/project', "App\Http\Controllers\ProjectController@index")->name("project");
Route::post("/back/project/{id}/delete", [ProjectController::class, "destroy"])->name('project.destroy');

Route::get('/back/pages/project/project-edit/{id}', [ProjectController::class, "edit"]);
Route::post("/back/pages/project/project-update/{id}", [ProjectController::class, "update"])->name('project.update');

Route::get('/back/pages/project/project-create', [ProjectController::class, "create"]);
Route::post('/back/pages/project/project-store', [ProjectController::class, "store"])->name('project.store');

// TESTIMONIAL
Route::get('/back/testimonial', "App\Http\Controllers\TestimonialController@index")->name("testimonial");
Route::post("/back/testimonial/{id}/delete", [TestimonialController::class, "destroy"])->name('testimonial.destroy');

Route::get('/back/pages/testimonial/testimonial-edit/{id}', [TestimonialController::class, "edit"]);
Route::post("/back/pages/testimonial/testimonial-update/{id}", [TestimonialController::class, "update"])->name('testimonial.update');

Route::get('/back/pages/testimonial/testimonial-create', [TestimonialController::class, "create"]);
Route::post('/back/pages/testimonial/testimonial-store', [TestimonialController::class, "store"])->name('testimonial.store');
