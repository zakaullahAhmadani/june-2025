<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChauffeurController;


Route::get('/', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');


Route::post('/chauffeur/submit', [ChauffeurController::class, 'submit'])->name('chauffeur.submit');