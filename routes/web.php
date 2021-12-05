<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CaterogiesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BasketPlaceController;

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/categories', [CaterogiesController::class, 'index'])->name('categories');

Route::get('/basket', [BasketController::class, 'index'])->name('basket');

Route::get('/basket/place', [BasketPlaceController::class, 'index'])->name('basket-place');

Route::get('/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('/{category}/{productName?}', [ProductController::class, 'index'])->name('product');
