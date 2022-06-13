<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('service', function () {
    return view('service');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/register_customer', function () {
    return view('customer.register');
});

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Route::get('/for_work', function () {
    return view('forwork');
});
