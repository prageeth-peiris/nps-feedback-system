<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.customer-feedback-form');
});

Route::get('/thank-you', function () {
    return view('frontend.thank-you');
})->name('thank-you');
