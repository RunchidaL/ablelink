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
use App\Http\Livewire\AdminAddPostCategoryComponent;
use App\Http\Livewire\AdminEditCategoryComponent;
use App\Http\Livewire\AdminProductComponent;
use App\Http\Livewire\AdminAddProductComponent;
use App\Http\Livewire\AdminEditPostCategoryComponent;
use App\Http\Livewire\AdminEditPostComponent;
use App\Http\Livewire\AdminEditProductComponent;
use App\Http\Livewire\AdminPostCategoryComponent;
use App\Http\Livewire\AdminPostComponent;
use App\Http\Livewire\DetailPostComponent;
use App\Http\Livewire\PostCategoryComponent;
use App\Http\Livewire\DownloadCategoryComponent;
use App\Http\Livewire\AdminCategoryDownloadComponent;
use App\Http\Livewire\AdminAddCategoryDownloadComponent;
use App\Http\Livewire\AdminEditCategoryDownloadComponent;
use App\Http\Livewire\AdminDownloadComponent;
use App\Http\Livewire\AdminAddDownloadComponent;
use App\Http\Livewire\AdminEditDownloadComponent;

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

Route::get('/download_category/{downloadcategory_slug}',DownloadCategoryComponent::class)->name('download.category');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');

Route::middleware(['auth:sanctum','verified','role'])->group(function(){
    Route::get('/admin/category', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('/admin/post/category', AdminPostCategoryComponent::class)->name('admin.post.category');
    Route::get('/admin/post/category/add', AdminAddPostCategoryComponent::class)->name('admin.add.post.category');
    Route::get('/admin/post/category/edit/{postcategory_slug}', AdminEditPostCategoryComponent::class)->name('admin.edit.post.category');
    Route::get('/admin/post/add', AdminAddPostComponent::class)->name('admin.addpost');
    Route::get('/admin/post', AdminPostComponent::class)->name('admin.post');
    Route::get('/admin/post/edit/{post_slug}', AdminEditPostComponent::class)->name('admin.editpost');
    Route::get('/admin/categorydownload', AdminCategoryDownloadComponent::class)->name('admin.categorydownload');
    Route::get('/admin/categorydownload/add', AdminAddCategoryDownloadComponent::class)->name('admin.addcategorydownload');
    Route::get('/admin/categorydownload/edit/{categorydownload_slug}', AdminEditCategoryDownloadComponent::class)->name('admin.editcategorydownload');
    Route::get('/admin/download', AdminDownloadComponent::class)->name('admin.download');
    Route::get('/admin/download/add', AdminAddDownloadComponent::class)->name('admin.adddownload');
    Route::get('/admin/download/edit/{download_slug}', AdminEditDownloadComponent::class)->name('admin.editdownload');
});
