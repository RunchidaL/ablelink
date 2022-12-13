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
use App\Http\Livewire\Admin\home\AdminAddHomecomponent;
use App\Http\Livewire\Admin\home\AdminEditHomecomponent;
use App\Http\Livewire\Admin\home\AdminHomecomponent;
use App\Http\Livewire\Customer\CustomerAddAddressComponent;
use App\Http\Livewire\Customer\CustomerAddressComponent;
use App\Http\Livewire\Customer\CustomerChangePasswordComponent;
use App\Http\Livewire\Customer\CustomerEditAddressComponent;
use App\Http\Livewire\Customer\CustomerInfoComponent;
use App\Http\Livewire\Dealer\DealerChangeInfoComponent;
use App\Http\Livewire\Admin\products\NetworktypeComponent;
use App\Http\Livewire\Admin\products\AddNetworktypeComponent;
use App\Http\Livewire\Admin\products\EditNetworktypeComponent;
use App\Http\Livewire\Dealer\RegisterprojectComponent;
use App\Http\Livewire\Dealer\DealerChangePasswordComponent;
use App\Http\Livewire\NewProductComponent;
use App\Http\Livewire\NewProductDetailComponent;
use App\Http\Livewire\Admin\products\AddBrandComponent;
use App\Http\Livewire\Admin\products\BrandComponent;
use App\Http\Livewire\Admin\products\EditBrandComponent;
use App\Http\Livewire\ChooseAddressComponent;
use App\Http\Livewire\Admin\AdmindashboardComponent;
use App\Http\Controllers\ProjectDealerController;
use App\Http\Livewire\Admin\posts\AddNewProductsComponent;
use App\Http\Livewire\Admin\posts\AdminNewProductsComponent;
use App\Http\Livewire\Admin\posts\EditNewProductsComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderPdfController;
use App\Http\Livewire\OrderPdfComponent;
use App\Http\Livewire\SearchProductsComponent;
use App\Http\Livewire\Admin\AllOrderComponent;
use App\Http\Livewire\Admin\OrderDetailsComponent;
use App\Http\Livewire\Admin\home\ProductPreviewComponent;
use App\Http\Livewire\Admin\home\AddProductPreviewComponent;
use App\Http\Livewire\Admin\home\EditProductPreviewComponent;
use App\Http\Livewire\Admin\mainpage\CustomContactComponent;
use App\Http\Livewire\Admin\mainpage\CustomAboutusComponent;
use App\Http\Livewire\Admin\mainpage\CustomServiceComponent;
use App\Http\Livewire\Admin\mainpage\CustomForworkComponent;
use App\Http\Controllers\AdminOrderPdfController;
use App\Http\Livewire\GroupCategoryComponent;
use App\Http\Livewire\ReviewComponent;
use App\Http\Controllers\FileController;
use App\Http\Livewire\Admin\mainpage\FooterComponent;
use App\Http\Livewire\AddCostSaleComponent;
use App\Http\Livewire\EditCostSaleComponent;

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/service', ServiceComponent::class);

Route::get('/activity', ActivityComponent::class);

Route::get('/download', DownloadComponent::class);

Route::get('/forwork', ForworkComponent::class);

Route::get('/contact', ContactComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/aboutus', AboutusComponent::class);

Route::get('/chooseaddress', ChooseAddressComponent::class)->name('chooseaddress');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

Route::get('/register_dealer', function () {
    return view('dealer.register');
});

Route::get('/post/{slug}', DetailPostComponent::class)->name('post.details');

Route::get('/post_category/{postcategory_slug}',PostCategoryComponent::class)->name('post.category');

Route::get('/newproducts',NewProductComponent::class)->name('newproducts');

Route::get('/newproductsdetail/{name}/{year?}',NewProductDetailComponent::class)->name('newproducts.detail');

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product/attribute/{modelslug}', DetailsModelsComponent::class)->name('product.detailsmodels');

Route::get('/product_category/{category_slug}/{scategory_slug?}/{bcategory_slug?}', CategoryComponent::class)->name('product.category');

Route::get('/product_category/{category_slug}/{scategory_slug}/{bcategory_slug}/{sbcategory_slug}', GroupCategoryComponent::class)->name('product.groupcategory');

Route::post('/send-email',[InfodealerRequestController::class,'sendEmail'])->name('send.email');

Route::post('/register-project-email',[ProjectDealerController::class,'sendEmail'])->name('registerproject.email');

Route::get('/download/{download_brand}',DownloadCategoryComponent::class)->name('download.brand');

Route::post('/check',[PaymentController::class,'check'])->name('check');

Route::get('/search',SearchProductsComponent::class)->name('search');

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');



// for Dealer & Customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/order', OrderComponent::class);
    Route::get('/orderDetail/{order_id}', OrderDetailComponent::class)->name('order.detail');
    Route::get('/review/{order_item_id}',ReviewComponent::class)->name('review');
});

// for Customer
Route::middleware(['auth:sanctum','verified','customer'])->group(function(){
    Route::get('/customer/info',CustomerInfoComponent::class)->name('customer.info');
    Route::get('/customer/address',CustomerAddressComponent::class)->name('customer.address');
    Route::get('/customer/changepassword',CustomerChangePasswordComponent::class)->name('customer.changepassword');
    Route::get('/customer/addaddress',CustomerAddAddressComponent::class)->name('customer.addaddress');
    Route::get('/customer/editaddress/{address_id}',CustomerEditAddressComponent::class)->name('customer.editaddress');
});

// for Dealer
Route::middleware(['auth:sanctum','verified','dealer'])->group(function(){
    Route::get('/dealer/changeinfo',DealerChangeInfoComponent::class)->name('dealer.changeinfo');
    Route::get('/dealer/changepassword',DealerChangePasswordComponent::class)->name('dealer.changepassword');
    Route::get('/dealer/registerproject',RegisterprojectComponent::class)->name('dealer.registerproject');
    Route::get('/orderpdf/{orderpdf_id}',[OrderPdfController::class,'export'])->name('orderpdf');
    // Route::get('/orderpdf/{order_id}',OrderPdfComponent::class)->name('order.pdf');
});

// for Admin
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
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}/{bcategory_slug?}/{sbcategory_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_id}', AdminEditProductComponent::class)->name('admin.editproduct');
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
    Route::get('/admin/download/edit/{download_id}', AdminEditDownloadComponent::class)->name('admin.editdownload');
    Route::get('/admin/model/add', AdminAddmodelComponent::class)->name('admin.addmodel');
    Route::get('/admin/model/edit/{model_slug}', AdminEditmodelComponent::class)->name('admin.editmodel');
    Route::get('/admin/group', GroupComponent::class)->name('admin.group');
    Route::get('/admin/group/add', AdminAddGroupComponent::class)->name('admin.addgroup');
    Route::get('/admin/group/edit/{group_id}/{serie_id?}/{type_id?}/{jacket_id?}', EditGroupComponent::class)->name('admin.editgroup');
    Route::get('/admin/networktype', NetworktypeComponent::class)->name('admin.networktype');
    Route::get('/admin/networktype/add', AddNetworktypeComponent::class)->name('admin.addnetworktype');
    Route::get('/admin/networktype/edit/{network_id}', EditNetworktypeComponent::class)->name('admin.editnetworktype');
    Route::get('/admin/brand/add', AddBrandComponent::class)->name('admin.addbrand');
    Route::get('/admin/brand', BrandComponent::class)->name('admin.brand');
    Route::get('/admin/brand/edit/{brand_slug}', EditBrandComponent::class)->name('admin.editbrand');
    Route::get('/admin/Admindashboard', AdmindashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/AdminNewProducts', AdminNewProductsComponent::class)->name('admin.AdminNewProducts');
    Route::get('/admin/AdminAddNewProducts', AddNewProductsComponent::class)->name('admin.AddNewProducts');
    Route::get('/admin/AdminEditNewProducts{NewProduct_id}', EditNewProductsComponent::class)->name('admin.EditNewProducts');
    Route::get('/admin/AllOrder', AllOrderComponent::class)->name('admin.AllOrder');
    Route::get('/admin/order/{orderid}', OrderDetailsComponent::class)->name('admin.OrderDetails');
    Route::get('/admin/orderpdf/{orderpdf_id}',[AdminOrderPdfController::class,'export'])->name('admin.orderpdf');
    Route::get('/admin/productpreview', ProductPreviewComponent::class)->name('admin.productpreview');
    Route::get('/admin/productpreview/add', AddProductPreviewComponent::class)->name('admin.addproductpreview');
    Route::get('/admin/productpreview/edit/{preview_id}', EditProductPreviewComponent::class)->name('admin.editproductpreview');
    Route::get('/admin/mainpage/customcontact/{contact_id}', CustomContactComponent::class)->name('admin.customcontact');
    Route::get('/admin/mainpage/customaboutus/{about_id}', CustomAboutusComponent::class)->name('admin.customaboutus');
    Route::get('/admin/mainpage/customservice/{service_id}', CustomServiceComponent::class)->name('admin.customservice');
    Route::get('/admin/mainpage/customforwork/{forwork_id}', CustomForworkComponent::class)->name('admin.customforwork');
    Route::post('/admin/upload/imagedes', [FileController::class, 'uploadImagedes'])->name('admin.uploadImagedes');
    Route::post('/admin/upload/imageover', [FileController::class, 'uploadImageover'])->name('admin.uploadImageover');
    Route::post('/admin/upload/imageapp', [FileController::class, 'uploadImageapp'])->name('admin.uploadImageapp');
    Route::post('/admin/upload/imagefea', [FileController::class, 'uploadImagefea'])->name('admin.uploadImagefea');
    Route::post('/admin/upload/imagedescription', [FileController::class, 'uploadImagedescription'])->name('admin.uploadImagedescription');
    Route::get('/admin/footer/{footer_id}', FooterComponent::class)->name('admin.footer');
    Route::get('/admin/addcost', AddCostSaleComponent::class)->name('admin.addsale');
    Route::get('/admin/costhistory/{dealer_id}', EditCostSaleComponent::class)->name('admin.salehis');
});
