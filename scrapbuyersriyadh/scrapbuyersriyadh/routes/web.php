<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index'); // or whatever logic/controller you have
})->name('home');
Route::get('/search', function () {
    return view('search'); // or whatever logic/controller you have
})->name('search');
Route::get('/contact', function () {
    return view('contact
    '); // or whatever logic/controller you have
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/about', function () {
    return view('about'); // or whatever logic/controller you have
})->name('about');
Route::get('/services', function () {
    return view('خدمات'); // یہ 'resources/views/خدمات.blade.php' کھولے گا
})->name('services');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/buy-iron-scrap', function () {
    return view('buy-iron-scrap');
})->name('buy-iron-scrap');
Route::get('/riyadh', function () {
    return view('riyadh'); // or use a controller
})->name('riyadh');

Route::get('/buy-scrap', function () {
    return view('buy-scrap'); // or use a controller
})->name('buy-scrap');

Route::get('/buy-metal-scrap', function () {
    return view('buy-metal-scrap'); // or use a controller
})->name('buy-metal-scrap');


Route::get('/scrap-in-riyadh', function () {
    return view('scrap-in-riyadh'); // or use a controller
})->name('scrap-in-riyadh');

// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');






