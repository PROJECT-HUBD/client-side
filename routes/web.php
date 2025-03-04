<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\CustomForgotController;
use App\Http\Controllers\Auth\MultiStepRegistrationController;
use App\Http\Controllers\Auth\CustomForgotPassWordController;
use Illuminate\Support\Facades\Route;

// 首頁
Route::get('/', function () {
    return view('home');
})->name('home');

// 測試頁
Route::get('/test1', function () {
    return view('test1');
})->name('test1');

//關於我們
Route::get('/AboutUs', function() {
    return view('AboutUs');
})->name('AboutUs');

// 登入才看得到頁
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//自己設計的登入頁面
Route::get('/mylogin',  [AuthenticatedSessionController::class, 'showLoginForm'])->name('mylogin');
Route::post('/mylogin', [AuthenticatedSessionController::class, 'login']);
Route::post('/logout',  [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//自己設計的註冊頁面
Route::get('/myregister', [MultiStepRegistrationController::class, 'showEmailForm'])->name('myregister');
Route::post('/myregister', [MultiStepRegistrationController::class, 'sendVerificationCode'])->name('myregister.email.send');

//自己設計的驗證碼確認頁面
Route::get('/myverify', [MultiStepRegistrationController::class, 'showVerificationForm'])->name('myverify');
Route::post('/myverify', [MultiStepRegistrationController::class, 'verifyCode'])->name('myverify.code');

//自己設計的個人資料頁面
Route::get('/mylaststep', [MultiStepRegistrationController::class, 'showDetailsForm'])->name('mylaststep');
Route::post('/mylaststep', [MultiStepRegistrationController::class, 'registerDetails'])->name('mylaststep.submit');

// 自訂忘記密碼 - Step 1: Email 驗證
Route::get('/myforget-password', [CustomForgotPassWordController::class, 'showEmailForm'])->name('myforget-password');
Route::post('/myforget-password', [CustomForgotPassWordController::class, 'sendVerificationCode'])->name('password.email.send');

// 自訂忘記密碼 - Step 2: 驗證碼確認
Route::get('/myenter-confirmation-code', [CustomForgotPasswordController::class, 'showVerificationForm'])->name('myenter-confirmation-code');
Route::post('/myenter-confirmation-code', [CustomForgotPasswordController::class, 'verifyCode'])->name('password.verify.code');

// 自訂忘記密碼 - Step 3: 重設密碼
Route::get('/mychange-password', [CustomForgotPasswordController::class, 'showResetForm'])->name('mychange-password');
Route::put('/mychange-password', [CustomForgotPasswordController::class, 'resetPassword'])->name('password.update');

require __DIR__.'/auth.php';
