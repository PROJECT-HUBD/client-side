<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\CustomForgotController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CouponController;
use Illuminate\Http\Request;

// 首頁
Route::get('/', [ProductController::class, 'home'])->name('home');

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
//關於我們
Route::get('/aboutus', function() {
    return view('aboutus');
})->name('aboutus');
//收藏清單
Route::get('/lovelist', function() {
    return view('lovelist');
})->name('lovelist');

// 商品內頁
Route::get('/product_details', function () {
    return view('product_details');
})->name('product_details');


Route::get('/account', function () {
    return view('account');
})->name('account');

// 登入才看得到頁
Route::get('/dashboard', function () {
    return view('dashboard');
})
//->middleware(['auth', 'verified'])  // 暫時註解掉驗證中間件
->name('dashboard');

// 用戶相關頁面
// Route::prefix('user')->name('user.')->middleware(['auth'])->group(function () {
Route::prefix('user')->name('user.')->group(function () {  // 暫時移除 middleware(['auth'])
    // 個人檔案
    Route::get('/user_profile', function () {
        return view('user.user_profile');
    })->name('user_profile');
    
    // 更新個人資料
    Route::put('/user_profile/update', function () {
        // 處理更新邏輯
        return redirect()->back()->with('success', '個人資料已更新');
    })->name('user_profile.update');
    
    // 編輯個人資料頁面
    Route::get('/edit_profile', function () {
        return view('user.edit_profile');
    })->name('edit_profile');
    
    // 變更密碼頁面
    Route::get('/change_password', function () {
        return view('user.change_password');
    })->name('change_password');
    
    // 處理密碼變更
    Route::post('/change_password', function () {
        // 處理密碼變更邏輯
        return redirect()->route('user.user_profile')->with('success', '密碼已成功變更');
    })->name('change_password.update');
    
    // 我的訂單
    Route::get('/orders', function (Request $request) {
        $status = $request->query('status', 'all');
        return view('user.orders', compact('status'));
    })->name('orders');
    
    // 收件地址
    Route::get('/address', function () {
        return view('user.address');
    })->name('address');
    
    // 付款資訊
    Route::get('/payment', function () {
        return view('user.payment');
    })->name('payment');
    
    // 新增付款方式頁面
    Route::get('/payment/add', function () {
        return view('user.payment_add');
    })->name('payment.add');

    // 編輯付款方式頁面
    Route::get('/payment/edit/{id}', function ($id) {
        return view('user.payment_edit', compact('id'));
    })->name('payment.edit');

    // 處理新增付款方式
    Route::post('/payment/store', function () {
        // 處理新增付款方式邏輯
        return redirect()->route('user.payment')->with('success', '付款方式已成功新增');
    })->name('payment.store');

    // 處理更新付款方式
    Route::put('/payment/update/{id}', function ($id) {
        // 處理更新付款方式邏輯
        return redirect()->route('user.payment')->with('success', '付款方式已成功更新');
    })->name('payment.update');

    // 處理刪除付款方式
    Route::delete('/payment/delete/{id}', function ($id) {
        // 處理刪除付款方式邏輯
        return redirect()->route('user.payment')->with('success', '付款方式已成功刪除');
    })->name('payment.delete');
    
    // 我的優惠
    Route::get('/coupons', [CouponController::class, 'index'])->name('coupons');
    Route::get('/coupons/switch-view', [CouponController::class, 'switchView'])->name('coupons.switch-view');
    Route::post('/coupons/redeem', [CouponController::class, 'redeem'])->name('coupons.redeem');
    Route::get('/coupons/{id}', [CouponController::class, 'show'])->name('coupons.show');

    // 新增收件地址頁面
    Route::get('/address/add', function () {
        return view('user.address_add');
    })->name('address.add');

    // 編輯收件地址頁面
    Route::get('/address/edit/{id}', function ($id) {
        return view('user.address_edit', compact('id'));
    })->name('address.edit');

    // 處理新增收件地址
    Route::post('/address/store', function () {
        // 處理新增收件地址邏輯
        return redirect()->route('user.address')->with('success', '收件地址已成功新增');
    })->name('address.store');

    // 處理更新收件地址
    Route::put('/address/update/{id}', function ($id) {
        // 處理更新收件地址邏輯
        return redirect()->route('user.address')->with('success', '收件地址已成功更新');
    })->name('address.update');

    // 處理刪除收件地址
    Route::delete('/address/delete/{id}', function ($id) {
        // 處理刪除收件地址邏輯
        return redirect()->route('user.address')->with('success', '收件地址已成功刪除');
    })->name('address.delete');

    // 訂單詳情頁面
    Route::get('/orders/{id}', function ($id) {
        return view('user.order_detail', compact('id'));
    })->name('orders.detail');

    // 取消訂單
    Route::post('/orders/{id}/cancel', function ($id) {
        // 處理取消訂單邏輯
        return redirect()->route('user.orders')->with('success', '訂單已成功取消');
    })->name('orders.cancel');

    // 申請退貨
    Route::get('/orders/{id}/return', function ($id) {
        return view('user.order_return', compact('id'));
    })->name('orders.return');

    // 處理退貨申請
    Route::post('/orders/{id}/return', function ($id) {
        // 處理退貨申請邏輯
        return redirect()->route('user.orders.detail', $id)->with('success', '退貨申請已提交');
    })->name('orders.return.store');

    // 訂單評價
    Route::get('/orders/{id}/review', function ($id) {
        return view('user.order_review', compact('id'));
    })->name('orders.review');

    // 處理訂單評價
    Route::post('/orders/{id}/review', function ($id) {
        // 處理訂單評價邏輯
        return redirect()->route('user.orders.detail', $id)->with('success', '評價已提交，感謝您的反饋');
    })->name('orders.review.store');
});

// 保留原有的 user_profile 路由以避免衝突
Route::get('/user_profile', function () {
    return redirect()->route('user.user_profile');
})->name('user_profile');

// 購物車頁
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
// 購物清單頁
Route::get('/check-out', function () {
    return view('check-out');
})->name('checkOut');


require __DIR__.'/auth.php';
