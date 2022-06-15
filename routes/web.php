<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ServiceComponent;
use App\Http\Livewire\ActivityComponent;
use App\Http\Livewire\DownloadComponent;
use App\Http\Livewire\ForworkComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CartComponent;


Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/service', ServiceComponent::class);

Route::get('/activity', ActivityComponent::class);

Route::get('/download', DownloadComponent::class);

Route::get('/forwork', ForworkComponent::class);

Route::get('/contact', ContactComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/aboutus', AboutusComponent::class);

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');


