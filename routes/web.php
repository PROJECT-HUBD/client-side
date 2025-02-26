<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

//自己設計的登入頁面
Route::get('/mylogin', [AuthenticatedSessionController::class, 'create'])->name('mylogin');
//自己設計的註冊頁面
Route::get('/myregister', [RegisteredUserController::class, 'create'])->name('myregister');


require __DIR__.'/auth.php';
