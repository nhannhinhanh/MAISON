<?php

use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\Admin\orderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\FrontendController;
use App\Models\product;

//Login
Route::get('/login', [FrontendController::class, 'show_login']) -> name('login');
Route::post('/check_login', [FrontendController::class, 'check_login']);

// Admin
Route::middleware('auth') -> group(function(){
    Route::prefix('admin') -> group(function(){
        Route::get('/', function () {return view('admin.home');});
    });
});

// Product
Route::post('/admin/product/add', [productController::class, 'insert_product'] );

Route::get('/admin/product/list', [productController::class, 'list_product'] );

Route::get('/admin/product/create', [productController::class, 'add_product'] );



Route::get('/admin/product/delete', [productController::class, 'delete_product'] );

Route::get('/admin/product/edit/{id}', [productController::class, 'edit_product'] );

Route::post('/admin/product/edit/{id}', [productController::class, 'update_product'] );
    


//Order
Route::get('/admin/order/list',[orderController::class, 'list_order'] );

Route::get('/admin/order/detail/{order_detail}', [orderController::class, 'detail_order'] );

Route::get('/admin/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');



//Upload
Route::post('/upload', [uploadController::class, 'uploadImage']);

Route::post('/uploads', [uploadController::class, 'uploadImages']);

//Frontend
Route::get('/', [FrontendController::class,'index' ]);
Route::get('/product/{id}',[FrontendController::class,'show_product' ] );

Route::get('/order/confirm', function () {return view('order.confirm');});
Route::get('/order/success', function () {return view('order.success');});

//Cart
Route::post('/cart/add',[FrontendController::class,'add_cart']);
Route::get('/cart', [FrontendController::class, 'show_cart']);
Route::get('/cart/delete/{id}', [FrontendController::class, 'delete_cart']);
Route::post('/cart/update', [FrontendController::class, 'update_cart']);
Route::post('/cart/send', [FrontendController::class, 'send_cart']);

//Search
Route::get('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/product/{id}', [FrontendController::class, 'show_product'])->name('product.show');