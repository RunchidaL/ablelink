<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/service', function () {
    return view('service');
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

Route::get('/for_work', function () {
    return view('forwork');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/activity', function () {
    return view('activity');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');
