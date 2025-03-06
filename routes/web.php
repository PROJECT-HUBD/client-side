<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 首頁
Route::get('/', function () {
    return view('home');
})->name('home');

// 測試頁
Route::get('/test1', function () {
    return view('test1');
})->name('test1');

// 商品分類_飾品
Route::get('/categories_accessories', function () {
    return view('categories_accessories');
})->name('categories_accessories');

// 商品分類_服飾
Route::get('/categories_clothes', function () {
    return view('categories_clothes');
})->name('categories_clothes');

// 登入才看得到頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// 購物車頁
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
// 購物清單頁
Route::get('/check-out', function () {
    return view('check-out');
})->name('checkOut');

// 任何url都會導向app.blade.php
Route::get('{any}', function () {
    return view('app'); // 假設 Vue/React 放在 resources/views/app.blade.php
})->where('any', '.*');
require __DIR__.'/auth.php';
