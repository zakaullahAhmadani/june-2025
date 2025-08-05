<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChauffeurController;


Route::get('/', function () {
    return view('index');
})->name('home');  // Added route name

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
Route::post('/contact', 'App\Http\Controllers\ContactController@submit')
     ->name('contact.submit');

