<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;

Route::get('/', function () {
    return view('home.home');
});


Route::get('test', function () {
    return view('test');
});

Route::get('/register_customer', function () {
    return view('customer.register');
});

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

