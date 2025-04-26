<?php

use App\Http\Controllers\CustomerFeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.customer-feedback-form');
});

Route::get('/thank-you', function () {
    return view('frontend.thank-you');
})->name('thank-you');


Route::post('create-customer-feedback',[CustomerFeedbackController::class,'store'])
    ->name('create-customer-feedback');

Route::get('dashboard',[CustomerFeedbackController::class,'list'])->name('dashboard');
