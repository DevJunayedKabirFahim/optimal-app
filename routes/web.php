<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptimalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [OptimalController::class, 'index'])->name('home');
Route::get('/product-category', [OptimalController::class, 'category'])->name('product-category');
Route::get('/product-detail', [OptimalController::class, 'detail'])->name('product-detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'category'      => CategoryController::class,
        'sub-category'  => SubCategoryController::class
    ]);
});
