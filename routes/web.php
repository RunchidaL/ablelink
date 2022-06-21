<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfodealerRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\ServiceComponent;
use App\Http\Livewire\ActivityComponent;
use App\Http\Livewire\DownloadComponent;
use App\Http\Livewire\ForworkComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\AdminAddPostComponent;
use App\Http\Livewire\AdminCategoryComponent;
use App\Http\Livewire\AdminAddCategoryComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminProductComponent;
use App\Http\Livewire\AdminAddProductComponent;
use App\Http\Livewire\AdminEditPostComponent;
use App\Http\Livewire\AdminEditProductComponent;
use App\Http\Livewire\AdminPostComponent;
use App\Http\Livewire\DetailPostComponent;
use App\Http\Livewire\PostCategoryComponent;
use App\Http\Livewire\TestComponent;

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

Route::get('/post/{slug}', DetailPostComponent::class)->name('post.details');

Route::get('/post_category/{postcategory_slug}',PostCategoryComponent::class)->name('post.category');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product_category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');

Route::get('/admin/category', AdminCategoryComponent::class)->name('admin.category');

Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');

Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');

Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');

Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');

Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');

Route::get('/admin/post', AdminPostComponent::class)->name('admin.post');

Route::get('/admin/post/add', AdminAddPostComponent::class)->name('admin.addpost');;

Route::get('/admin/post/edit/{post_slug}', AdminEditPostComponent::class)->name('admin.editpost');;
