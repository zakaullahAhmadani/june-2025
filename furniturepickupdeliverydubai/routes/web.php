<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;


Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('/privacy-policy');

Route::get('/services', function () {
    return view('services');
})->name('/services');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
// Route::post('/contact-form-submit', [ContactFormController::class, 'submit'])->name('contact.submit');
