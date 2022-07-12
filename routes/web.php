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
use App\Http\Livewire\OrderComponent;
use App\Http\Livewire\OrderDetailComponent;
use App\Http\Livewire\Admin\Dealer\AdminDealerComponent;
use App\Http\Livewire\Admin\Dealer\AdminAddDealerComponent;
use App\Http\Livewire\Admin\Dealer\AdminAddInfoDealerComponent;
use App\Http\Livewire\Admin\Dealer\AdminEditDealerComponent;
use App\Http\Livewire\Admin\posts\AdminAddPostComponent;
use App\Http\Livewire\Admin\products\AdminCategoryComponent;
use App\Http\Livewire\Admin\products\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\posts\AdminAddPostCategoryComponent;
use App\Http\Livewire\Admin\products\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\products\AdminProductComponent;
use App\Http\Livewire\Admin\products\AdminAddProductComponent;
use App\Http\Livewire\Admin\posts\AdminEditPostCategoryComponent;
use App\Http\Livewire\Admin\posts\AdminEditPostComponent;
use App\Http\Livewire\Admin\products\AdminEditProductComponent;
use App\Http\Livewire\Admin\posts\AdminPostCategoryComponent;
use App\Http\Livewire\Admin\posts\AdminPostComponent;
use App\Http\Livewire\DetailPostComponent;
use App\Http\Livewire\PostCategoryComponent;
use App\Http\Livewire\DownloadCategoryComponent;
use App\Http\Livewire\Admin\downloads\AdminCategoryDownloadComponent;
use App\Http\Livewire\Admin\downloads\AdminAddCategoryDownloadComponent;
use App\Http\Livewire\Admin\downloads\AdminEditCategoryDownloadComponent;
use App\Http\Livewire\Admin\downloads\AdminDownloadComponent;
use App\Http\Livewire\Admin\downloads\AdminAddDownloadComponent;
use App\Http\Livewire\Admin\downloads\AdminEditDownloadComponent;
use App\Http\Livewire\DetailsModelsComponent;
use App\Http\Livewire\Admin\products\AdminAddmodelComponent;
use App\Http\Livewire\Admin\products\AdminEditmodelComponent;
use App\Http\Livewire\Admin\products\GroupComponent;
use App\Http\Livewire\Admin\products\AdminAddGroupComponent;
use App\Http\Livewire\Admin\products\EditGroupComponent;
use App\Http\Livewire\Admin\Home\AdminAddHomecomponent;
use App\Http\Livewire\Admin\Home\AdminEditHomecomponent;
use App\Http\Livewire\Admin\Home\AdminHomecomponent;

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/service', ServiceComponent::class);

Route::get('/activity', ActivityComponent::class);

Route::get('/download', DownloadComponent::class);

Route::get('/forwork', ForworkComponent::class);

Route::get('/contact', ContactComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/aboutus', AboutusComponent::class);

Route::get('/order', OrderComponent::class);

Route::get('/orderDetail', OrderDetailComponent::class);

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::get('/post/{slug}', DetailPostComponent::class)->name('post.details');

Route::get('/post_category/{postcategory_slug}',PostCategoryComponent::class)->name('post.category');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product/attribute/{modelslug}', DetailsModelsComponent::class)->name('product.detailsmodels');

Route::get('/product_category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Route::get('/download_category/{downloadcategory_slug}',DownloadCategoryComponent::class)->name('download.category');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');

Route::middleware(['auth:sanctum','verified','role'])->group(function(){
    Route::get('/admin/home',AdminHomecomponent::class)->name('admin.homes');
    Route::get('/admin/home/add',AdminAddHomecomponent::class)->name('admin.addhomes');
    Route::get('/admin/home/edit/{slide_id}',AdminEditHomecomponent::class)->name('admin.edithomes');
    Route::get('/admin/dealer/',AdminDealerComponent::class)->name('admin.Dealer');
    Route::get('/admin/dealer/add',AdminAddDealerComponent::class)->name('admin.addDealer');
    Route::get('/admin/dealer/edit/{infodealer_id}',AdminEditDealerComponent::class)->name('admin.editDealer');
    Route::get('/admin/dealer/addinfo',AdminAddInfoDealerComponent::class)->name('admin.addinfoDealer');
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
    Route::get('/admin/model/add', AdminAddmodelComponent::class)->name('admin.addmodel');
    Route::get('/admin/model/edit/{model_slug}', AdminEditmodelComponent::class)->name('admin.editmodel');
    Route::get('/admin/group', GroupComponent::class)->name('admin.group');
    Route::get('/admin/group/add', AdminAddGroupComponent::class)->name('admin.addgroup');
    Route::get('/admin/group/edit/{group_id}/{serie_id?}/{type_id?}/{jacket_id?}', EditGroupComponent::class)->name('admin.editgroup');
});
