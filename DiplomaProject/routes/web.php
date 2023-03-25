<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RequestController;


Route::post('/setLocale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ru'])) {
        return back()->withCookie(cookie()->forever('locale', $locale));
    }
    return back();
})->name('setLocale');

Route::get('/', function () {
    return view('index');
}) ->name('indexpage');;

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

//Route::get('/catalog', function () {
//    return view('catalog');
//});

Route::get('/contact-form', [ContactFormController::class, 'contactForm'])->name('contact-form');

Route::post('/contact-form', [ContactFormController::class, 'storeContactForm'])->name('contact-form.store');

Route::post('/catalog/{id}/request', [RequestController::class, 'storeRequest'])->name('request.store');


Route::get('/sub', [SubscribersController::class, 'subscribe'])->name('index');

Route::post('/sub', [SubscribersController::class, 'storeSubscribers'])->name('subscribers.store');

Auth::routes();



Route::get('/catalog', [CatalogController::class, 'catalogData'])->name('catalogData.get');
Route::delete('/subscribers/{subscriber}', [SubscribersController::class, 'destroy'])->name('subscribers.destroy');

Route::get('/catalog', [CatalogController::class, 'catalogData'])->name('catalogData.get');

Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('film.show');

ROute::get('/subscribers', [SubscribersController::class, 'index'])->middleware('auth')->name('subscribers');

Route::get('/add', [HomeController::class, 'index'])->middleware('auth', 'verified', 'session');
Route::get('/insertFilm', [HomeController::class, 'add'])->middleware('auth')->name('add');
Route::post('/insert-data', [CatalogController::class, 'insert'])->name('insert-data');

Route::get('/home', [HomeController::class, 'index'])->name('admin');
Route::get('/admin', [HomeController::class, 'index']);

Route::delete('/catalogs/{id}', [CatalogController::class, 'destroy'])->name('catalogs.destroy');
Route::get('/updatingFilm', [CatalogController::class, 'index'])->name('filmsList');
Route::get('/catalogs/{id}/edit', [CatalogController::class, 'edit'])->name('catalogs.edit');
Route::put('/updatingFilm/{id}', [CatalogController::class, 'update'])->name('catalogs.update');

Route::get('/filter', [CatalogController::class, 'catalogData'])->name('filter.index');

Route::get('/search', [CatalogController::class, 'searchFilm'])->name('search.index');




