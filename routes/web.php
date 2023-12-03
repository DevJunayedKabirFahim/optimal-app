<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptimalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOfferController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Optimal Ecommerce Website's all accepted routes are declared here.
|--------------------------------------------------------------------------
*/

Route::get('/', [OptimalController::class, 'index'])->name('home');
Route::get('/product-category', [OptimalController::class, 'category'])->name('product-category');
Route::get('/product-detail', [OptimalController::class, 'detail'])->name('product-detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-sub-category-by-category', [ProductController::class, 'getSubCategoryByCategory'])->name('get-sub-category-by-category');
    Route::resources([
        'category'      => CategoryController::class,
        'sub-category'  => SubCategoryController::class,
        'brand'         => BrandController::class,
        'unit'          => UnitController::class,
        'color'         => ColorController::class,
        'size'          => SizeController::class,
        'product'       => ProductController::class,
        'product-offer' => ProductOfferController::class
    ]);
});
