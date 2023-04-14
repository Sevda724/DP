<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\NewsController;



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

Route::get('/news', function () {
    return view('news');
});

//Contact form routes
Route::get('/contact-form', [ContactFormController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactFormController::class, 'storeContactForm'])->name('contact-form.store');
Route::post('/catalog/{id}/request', [RequestController::class, 'storeRequest'])->name('request.store');

// Subscribers routes
Route::get('/sub', [SubscribersController::class, 'subscribe'])->name('index');
Route::post('/sub', [SubscribersController::class, 'storeSubscribers'])->name('subscribers.store');
ROute::get('/subscribers', [SubscribersController::class, 'index'])->middleware('auth')->name('subscribers');
Route::delete('/subscribers/{subscriber}', [SubscribersController::class, 'destroy'])->middleware('auth')->name('subscribers.destroy');

// Authorization routes
Auth::routes();

// Catalog routes
Route::get('/catalog', [CatalogController::class, 'catalogData'])->name('catalogData.get');
Route::get('/catalog/{id}', [CatalogController::class, 'show'])->name('film.show');
Route::delete('/catalogs/{id}', [CatalogController::class, 'destroy'])->middleware('auth')->name('catalogs.destroy');
Route::get('/catalogs/{id}/edit', [CatalogController::class, 'edit'])->middleware('auth')->name('catalogs.edit');
Route::get('/search', [CatalogController::class, 'searchFilm'])->middleware('auth')->name('search.index');

// Adding film routes
Route::get('/insertFilm', [HomeController::class, 'add'])->middleware('auth')->middleware('verified')->name('add');
Route::post('/insert-data', [CatalogController::class, 'insert'])->name('insert-data');

Route::get('/home', [HomeController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin', [HomeController::class, 'index'])->middleware('auth');

Route::get('/updatingFilm', [CatalogController::class, 'index'])->name('filmsList')->middleware('auth');
Route::put('/updatingFilm/{id}', [CatalogController::class, 'update'])->name('catalogs.update')->middleware('auth');

Route::get('/search/filter', [CatalogController::class, 'moviesSearch'])->name('movies.search');

Route::get('/', [NewsController::class, 'newsInfo'])->name('indexpage');
Route::get('/newslist', [NewsController::class, 'list'])->name('news.list')->middleware('auth');
Route::get('/newslist/update/{id}', [NewsController::class, 'showForEdit'])->name('news.update.form')->middleware('auth');
Route::post('/newslist/update/{id}', [NewsController::class, 'update'])->name('news.update')->middleware('auth');
Route::get('/newslist/{id}', [NewsController::class, 'delete'])->name('news.delete')->middleware('auth');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::post('/newslist/insert', [NewsController::class, 'insert'])->name('news.insert')->middleware('auth');





