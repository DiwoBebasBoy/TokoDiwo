<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DistributorController;
use App\Http\Controllers\User\UserController;
// Guest Route
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/register', [AuthController::class, 'register'])->name('register'); 
    Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');

    Route::post('/post-login', [AuthController::class, 'login']);
    });
// Admin Route
Route::group(['middleware' => 'admin'], function() {
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/admin/products/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/distributor/create', [DistributorController::class, 'create'])->name('distributor.create');
Route::post('/distributor/store', [DistributorController::class, 'store'])->name('distributor.store');
Route::get('/admin/distributors/{id}', [DistributorController::class, 'detail'])->name('distributor.detail');
Route::get('/distributor/edit/{id}', [DistributorController::class, 'edit'])->name('distributor.edit');
Route::post('/distributor/update/{id}', [DistributorController::class, 'update'])->name('distributor.update');
Route::delete('/distributor/delete/{id}', [DistributorController::class, 'delete'])->name('distributor.delete');
Route::get('/flash-sale/create', [FlashSaleController::class, 'create'])->name('admin.flash_sale.create');
Route::post('/flash-sale/store', [FlashSaleController::class, 'store'])->name('admin.flash_sale.store');
Route::get('/flash-sale/{id}', [FlashSaleController::class, 'show'])->name('admin.flash_sale.show');

// Product Route
Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
Route::get('/distributor', [DistributorController::class, 'index'])->name('admin.distributor');
Route::get('/flash-sale', [FlashSaleController::class, 'index'])->name('admin.flash_sale');
Route::get('/admin-logout', [AuthController::class, 'admin_logout'])->name('admin.logout'); 
});
Route::get('user/product/detail/{id}', [UserController::class, 'detail_Product'])->name('user.detail.product');
Route::get('product/purchase/{productId}/{userId}', [UserController::class, 'purchase']);
Route::get('/user-flash', [ProductController::class, 'flashSale'])->name('user.flash');
// User Route
Route::group(['middleware' => 'web'], function() {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');
});