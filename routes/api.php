<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Models\Cart;

// 首頁
Route::get('/', function () {
    return view('home');
})->name('home');

// 測試頁
Route::get('/test1', function () {
    return view('test1');
})->name('test1');

// 登入才看得到頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// 購物車頁
Route::match(['get', 'post'],'/cart', function () {
    return view('cart');
})->name('cart');
// 購物車頁_假資料
Route::match(['get', 'post'],'/cart2', function () {
    return view('cart2');
})->name('cart2');
// 購物車頁_Ajax測試頁
Route::match(['get', 'post'],'/cart3', function () {
    return view('cart3');
})->name('cart3');



//購物車獲取資料
Route::get('/cartTest', [CartController::class, 'getProductData']);

// 購物清單頁
Route::match(['get', 'post'],'/checkOut', function () {
    return view('checkOut');
})->name('checkOut');


//購物清單頁_新增一筆訂單_orderMain
Route::post('/InsertOrderMain', [CheckoutController::class, 'InsertOrderMain']);
//購物清單頁_新增一筆訂單_orderdetail
Route::post('/InsertOrderDetail', [CheckoutController::class, 'InsertOrderDetail']);
Route::post('/DeleteCart', [CartController::class, 'DeleteCart']);
// 成功頁
Route::match(['get', 'post'],'/successful_transaction', function () {
    return view('successful_transaction');
})->name('successful_transaction');
// 失敗頁
Route::match(['get', 'post'],'/failed_transaction', function () {
    return view('failed_transaction');
})->name('failed_transaction');
// 維護頁
Route::match(['get', 'post'],'/system-maintenance', function () {
    return view('system-maintenance');
})->name('system-maintenance');


