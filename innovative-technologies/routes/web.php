<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;




Route::get('/', function () {
    return view('index');
});
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/Portfolio', function () {
    return view('Portfolio');
})->name('Portfolio');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');


Route::get('/digital-marketing', function () {
    return view('digital-marketing');
})->name('digital-marketing');
Route::get('/google-business-verification-services', function () {
    return view('google-business-verification-services');
})->name('google-business-verification-services');
Route::get('/ecommerce-website-development', function () {
    return view('ecommerce-website-development');
})->name('ecommerce-website-development');
Route::get('/shopify-store-development', function () {
    return view('shopify-store-development');
})->name('shopify-store-development');
Route::get('/website-development', function () {
    return view('website-development');
})->name('website-development');
Route::get('/seo-content-writing', function () {
    return view('seo-content-writing');
})->name('seo-content-writing');
Route::get('/graphic-designing', function () {
    return view('graphic-designing');
})->name('graphic-designing');
Route::get('/video-editing-animation', function () {
    return view('video-editing-animation');
})->name('video-editing-animation');
Route::get('/youtube-facebook-monetization', function () {
    return view('youtube-facebook-monetization');
})->name('youtube-facebook-monetization');
Route::get('/fiverr-freelancing-monetization', function () {
    return view('fiverr-freelancing-monetization');
})->name('fiverr-freelancing-monetization');


Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter-submit', [NewsletterController::class, 'submit'])->name('newsletter.submit');

