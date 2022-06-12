<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;

Route::get('/', function () {
    return view('home.home');
});


Route::get('test', function () {
    return view('test');
});

Route::get('/register', function () {
    return view('dealer.register');
});

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

