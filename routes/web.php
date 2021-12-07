<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CaterogiesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\BasketPlaceController;
use App\Http\Controllers\HomeController;

require __DIR__ . '/auth.php';

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/categories', [CaterogiesController::class, 'index'])->name('categories');

Route::get('/basket', [BasketController::class, 'index'])->name('basket');

Route::get('/basket/place', [BasketPlaceController::class, 'index'])->name('basket-place');

Route::post('/basket/place', [BasketPlaceController::class, 'basketConfirm'])->name('basket-confirm');

Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');

Route::get('/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('/{category}/{productName?}', [ProductController::class, 'index'])->name('product');
