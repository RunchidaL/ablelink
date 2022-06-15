<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/for_work', function () {
    return view('forwork');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register_customer', function () {
    return view('customer.register');
});

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
