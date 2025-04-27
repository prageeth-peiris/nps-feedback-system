<?php

use App\Http\Controllers\CustomerFeedbackController;
use Illuminate\Support\Facades\Route;

// guest routes
Route::get('/', function () {
    return view('frontend.customer-feedback-form');
});

Route::get('/thank-you', function () {
    return view('frontend.thank-you');
})->name('thank-you');

Route::get('login', function () {

    return view('frontend.userLogIn');
})->name('login');  // this is the login form view page.
// this route name must be always login as laravel uses it in default behaviour

// this is the POST route to try user credentials
Route::post('attempt-auth', [\App\Http\Controllers\AuthController::class, 'auth'])->name('attempt-auth');

Route::post('create-customer-feedback', [CustomerFeedbackController::class, 'store'])
    ->name('create-customer-feedback');

// authenticated routes

Route::group(['middleware' => ['auth']], function () {

    // dashboard page view route
    Route::get('dashboard', [CustomerFeedbackController::class, 'list'])->name('dashboard');

    // export route csv file streamed response
    Route::get('export', [CustomerFeedbackController::class, 'export'])->name('export');

});
