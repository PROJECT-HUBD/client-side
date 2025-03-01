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

// 用戶相關頁面
Route::prefix('user')->group(function () {
    // 個人檔案
    Route::get('/user_profile', function () {
        return view('user.user_profile');
    })->name('user.user_profile');
    
    // 更新個人資料
    Route::put('/user_profile/update', function () {
        // 處理更新邏輯
        return redirect()->back()->with('success', '個人資料已更新');
    })->name('user.user_profile.update');
    
    // 我的訂單
    Route::get('/orders', function () {
        return view('user.orders');
    })->name('user.orders');
    
    // 收件地址
    Route::get('/address', function () {
        return view('user.address');
    })->name('user.address');
    
    // 付款資訊
    Route::get('/payment', function () {
        return view('user.payment');
    })->name('user.payment');
    
    // 我的優惠
    Route::get('/coupons', function () {
        return view('user.coupons');
    })->name('user.coupons');
});

// 保留原有的 user_profile 路由以避免衝突
Route::get('/user_profile', function () {
    return redirect()->route('user.user_profile');
})->name('user_profile');

require __DIR__.'/auth.php';
