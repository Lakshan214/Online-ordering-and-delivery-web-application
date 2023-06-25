<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OredrtController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('index');; 
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/registerview',[OredrtController::class,'Registerview'])->middleware('auth','verified');
Route::get('/signin',[OredrtController::class,'signin']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::prefix('/link')->group (function(){
    Route::get('/brand/{slug}',[HomeController::class,'brandByProduct'])->name('link.brand');
    Route::get('/product/{id}',[HomeController::class,'catagoryByProduct'])->name('link.product'); 
    Route::get('/singlepage/{id}',[HomeController::class,'singlepage_view'])->name('link.singlepage'); 
    Route::get('/showCart',[CartController::class,'showCart'])->name('link.showCart');
    

});

Route::prefix('/cart')->group (function(){
    Route::post('/addCart/{id}',[CartController::class,'AddToCart'])->name('cart.addCart');
    Route::get('/deleteCart/{id}',[CartController::class,'DeleteCart'])->name('cart.deleteCart');
    Route::post('/UpdateCart/{id}',[CartController::class,'UpdateCart'])->name('cart.UpdateCart');
    
 

});
Route::prefix('/order')->group (function(){

    Route::post('/orderSave',[OredrtController::class,'OrderSave'])->name('order.orderSave');
    // Route::get('/stripView/',[OredrtController::class,'stripView'])->name('order.stripView')->middleware('auth','verified');
    Route::post('/striPost',[OredrtController::class,'stripePost'])->name('order.striPost');
    Route::get('/View',[OredrtController::class,'View'])->name('order.View');
    Route::get('/payment/{id}',[OredrtController::class,'paymentMode'])->name('order.payment');
    Route::post('/usedetails',[OredrtController::class,'usedetailsSave'])->name('order.usedetails');
    Route::get('/orderDetails/{id}',[OredrtController::class,'orderDetails'])->name('order.orderDetails');
    Route::get('/printPDF/{id}',[OredrtController::class,'printPDF'])->name('order.printPDF');
    Route::get('/mail/{id}',[OredrtController::class,'sendMail'])->name('order.mail');
    Route::get('/admin/{id}',[OredrtController::class,'adminOderView'])->name('order.admin');
    Route::post('/SelectDelivery/{id}',[OredrtController::class,'SelectDelivery'])->name('order.SelectDelivery');
    Route::get('/viewDelivery/{id}',[OredrtController::class,'viewDeliveryOrder'])->name('order.viewDelivery');
    Route::get('/prosesing/{id}',[OredrtController::class,'prosesing'])->name('order.prosesing');
    Route::get('/packing/{id}',[OredrtController::class,'packing'])->name('order.packing');
    Route::get('/Delivering/{id}',[OredrtController::class,'Delivering'])->name('order.Delivering');
    Route::get('/Delivered/{id}',[OredrtController::class,'Delivered'])->name('order.Delivered');
    Route::get('/cancel/{id}',[OredrtController::class,'cancel'])->name('order.cancel');
    Route::get('/tracking/{id}',[OredrtController::class,'tracking'])->name('order.tracking');
    Route::get('/conformView', [OredrtController::class,'conformView'])->name('order.conformView');
 


});

Route::resource('Products',ProductController ::class);
Route::prefix('Product')->group(function(){
    Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');
    Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product.inactive');
    Route::get('/product-search',[ProductController::class,'product_search'])->name('product.product-search');
});

Route::resource('Catagory',CatagoryController ::class);
Route::resource('Brand',BrandController ::class);

Route::prefix('slider')->group(function(){
    Route::get('/view', [SliderController::class, 'SliderView'])->name('manage-slider');
    Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');
    Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');
    Route::get('/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');
    Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');

    });

    Route::prefix('wishlist')->group (function(){
          Route::get('/store/{id}',[WishlistController::class,'store'])->name('wishlist.store');
          Route::get('/view', [WishlistController::class, 'View'])->name('wishlist.view');
          Route::get('/delete/{id}',[WishlistController::class,'Delete'])->name('wishlist.delete');
          Route::get('/addCart/{id}',[WishlistController::class,'addCart'])->name('wishlist.addCart');
    });


       
    Route::prefix('user')->group(function(){
        Route::get('/view', [UserController::class,'View'])->name('user.View');
        Route::post('/store', [UserController::class,'UserStore'])->name('user.store');
        Route::get('/delete/{id}', [UserController::class, 'Delete'])->name('user.delete');

    
        });


        Route::prefix('review')->group(function(){
            Route::get('/view', [ReviewController::class, 'View'])->name('review.view');
            Route::post('/store', [ReviewController::class, 'Store'])->name('review.store')->middleware('auth','verified');
            Route::get('/view-admin',  [ReviewController::class, 'adminView'])->name('review.view-admin');
            Route::get('/delete/{id}', [ReviewController::class, 'Delete'])->name('review.delete');
            Route::get('/inactive/{id}', [ReviewController::class, 'Inactive'])->name('review.inactive');
            Route::get('/active/{id}', [ReviewController::class, 'Active'])->name('review.active');
        
            });

       