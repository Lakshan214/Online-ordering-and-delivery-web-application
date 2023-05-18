<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[HomeController::class,'index']); 
Route::get('/redirect',[HomeController::class,'redirect']);

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
    Route::get('/product/{slug}',[HomeController::class,'catagoryByProduct'])->name('link.product'); 
    Route::get('/singlepage/{id}',[HomeController::class,'singlepage_view'])->name('link.singlepage'); 
    Route::get('/showCart',[CartController::class,'showCart'])->name('link.showCart');
    

});

Route::prefix('/cart')->group (function(){

    Route::post('/addCart/{id}',[CartController::class,'AddToCart'])->name('cart.addCart');
    Route::get('/deleteCart/{id}',[CartController::class,'DeleteCart'])->name('cart.deleteCart');
 

});

Route::resource('Products',ProductController ::class);
Route::resource('Catagory',CatagoryController ::class);
Route::resource('Brand',BrandController ::class);