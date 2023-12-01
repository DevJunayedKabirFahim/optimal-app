<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptimalController;
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
