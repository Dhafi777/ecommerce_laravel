<?php
use App\Http\Controllers\Admin\DistributorController;
use App\Http\Controllers\Admin\FlashsaleController;
use App\Http\Controllers\Auth\AuthController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\AdminController; 
use App\Http\Controllers\Admin\ProductController; 
use App\Http\Controllers\User\UserController; 
 
// Guest Route 
Route::group(['middleware' => 'guest'], function() { 
    Route::get('/', function () { 
        return view('welcome'); 
    }); 
 
 Route::get('/register', [AuthController::class, 'register'])->name('register'); 
 Route::post('/post-register', [AuthController::class, 'post_register'])-> name('post.register'); 
 
    Route::post('/post-login', [AuthController::class, 'login']); 
})->middleware('guest'); 
 
// Admin Route 
Route::group(['middleware' => ['admin', 'web']], function() {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin-logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/detail/{id}', [ProductController::class,'detail'])->name('product.detail');
    //Product Add
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    //Product Delete
    Route::delete('/product/delete/{id}', [ProductController::class,'delete'])->name('product.delete');

    //Distributor
    Route::get('/distributor', [DistributorController::class, 'index'])->name('admin.distributor');
    Route::get('/distributor/create', [DistributorController::class, 'create'])->name('distributor.create');
    Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
    Route::get('/admin/distributor/detail/{id}', [DistributorController::class,'detail'])->name('distributor.detail');

    Route::post('/distributor/import', [DistributorController::class,'import'])->name('distributor.import');
    Route::get('/distributor/export', [DistributorController::class, 'export'])->name('distributor.export');

    Route::get('/distributor/edit/{id}', [DistributorController::class, 'edit'])->name('distributor.edit');
    Route::put('/distributor/update/{id}', [DistributorController::class, 'update'])->name('distributor.update');

    Route::delete('/distributor/delete/{id}', [DistributorController::class,'delete'])->name('distributor.delete');

    Route::get('/admin/flashsale', [FlashsaleController::class, 'index'])->name('admin.flashsale'); 
    Route::get('/flashsale/create', [FlashsaleController::class, 'create'])->name('flashsale.create'); 
Route::post('/flashsale/store', [FlashsaleController::class, 'store'])->name('flashsale.store'); 
Route::get('/admin/flashsale/detail/{id}', [FlashsaleController::class, 'detail'])->name('flashsale.detail'); 
Route::get('/flashsale/edit/{id}', [FlashsaleController::class, 'edit'])->name('flashsale.edit'); 
Route::post('/flashsale/update/{id}', [FlashsaleController::class, 'update'])->name('flashsale.update'); 
Route::delete('/flashsale/delete/{id}', [FlashsaleController::class, 'delete'])->name('flashsale.delete');

});

// User Route
Route::group(['middleware' => ['web']], function() {
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');
    //Detail Product Users
    Route::get('/user/product/detail/{id}', [UserController::class,'detail_product'])->name('user.detail.product');
    Route::get('/product/purchase/{productId}/{userId}', [UserController::class,'purchase']);
});






?>