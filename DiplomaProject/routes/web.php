<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RequestController;




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

Route::post('/setLocale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ru'])) {
        return back()->withCookie(cookie()->forever('locale', $locale));
    }
    return back();
})->name('setLocale');

Route::get('/', function () {
    return view('index');
});

//Route::get('/{language}', function ($language) {
//    App::setLocale($language);
//    return view('index');
//});

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

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/contact-form', [ContactFormController::class, 'contactForm'])->name('contact-form');

Route::post('/contact-form', [ContactFormController::class, 'storeContactForm'])->name('contact-form.store');

Route::post('/catalog/{id}/request', [RequestController::class, 'storeRequest'])->name('request.store');


Route::get('/sub', [SubscribersController::class, 'subscribe'])->name('index');

Route::post('/sub', [SubscribersController::class, 'storeSubscribers'])->name('subscribers.store');

Auth::routes();

ROute::get('/subscribers', [HomeController::class, 'subscribers'])->middleware('auth')->name('subscribers');
Route::get('/add', [HomeController::class, 'index'])->middleware('auth', 'verified', 'session');
Route::get('/addingFilm', [HomeController::class, 'add'])->middleware('auth')->name('add');
Route::post('/insert-data', [CatalogController::class, 'insert'])->name('insert-data');

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::get('/catalog', [CatalogController::class, 'catalogData'])->name('index');

Route::get('/catalog/{id}', [CatalogController::class, 'showPopUp'])->name('film.show');
