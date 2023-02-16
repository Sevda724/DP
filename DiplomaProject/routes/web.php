<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



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
    return view('index');
});

Route::get('/lakes-locations', function () {
    return view('lakes');
});

Route::get('/production', function () {
    return view('production');
});

Route::get('/dubbing-subtitling', function () {
    return view('dd');
});

Route::get('/budget', function () {
    return view('budget');
});

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/actors', function () {
    return view('actors');
});

Route::get('/arid-locations', function () {
    return view('arid');
});

Route::get('/soviet-locations', function () {
    return view('soviet');
});

Route::get('/historical-locations', function () {
    return view('hist');
});

Route::get('/mountain-locations', function () {
    return view('mount');
});

Route::get('/modern-locations', function () {
    return view('modern');
});


Route::get('/contact-form', [App\Http\Controllers\ContactFormController::class, 'contactForm'])->name('contact-form');

Route::post('/contact-form', [App\Http\Controllers\ContactFormController::class, 'storeContactForm'])->name('contact-form.store');





