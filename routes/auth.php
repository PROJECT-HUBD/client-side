<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\MultiStepRegistrationController;
use App\Http\Controllers\Auth\CustomForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    // 🔹 自訂登入
    Route::get('mylogin', [AuthenticatedSessionController::class, 'showLoginForm'])->name('mylogin');
    Route::post('mylogin', [AuthenticatedSessionController::class, 'store']);

    // 🔹 自訂註冊（多步驟）
    Route::get('myregister', [MultiStepRegistrationController::class, 'showEmailForm'])->name('myregister');
    Route::post('myregister', [MultiStepRegistrationController::class, 'sendVerificationCode'])->name('myregister.email.send');

    Route::get('myverify', [MultiStepRegistrationController::class, 'showVerificationForm'])->name('myverify');
    Route::post('myverify', [MultiStepRegistrationController::class, 'verifyCode'])->name('myverify.code');

    Route::get('mylaststep', [MultiStepRegistrationController::class, 'showDetailsForm'])->name('mylaststep');
    Route::post('mylaststep', [MultiStepRegistrationController::class, 'registerDetails'])->name('mylaststep.submit');


    // 自訂忘記密碼 - Step 1: Email 驗證
    Route::get('myforget-password', [CustomForgotPassWordController::class, 'showEmailForm'])->name('myforget-password');
    Route::post('myforget-password', [CustomForgotPassWordController::class, 'sendVerificationCode'])->name('password.email.send');

    // 自訂忘記密碼 - Step 2: 驗證碼確認
    Route::get('myenter-confirmation-code', [CustomForgotPasswordController::class, 'showVerificationForm'])->name('myenter-confirmation-code');
    Route::post('myenter-confirmation-code', [CustomForgotPasswordController::class, 'verifyCode'])->name('password.verify.code');
    
    //重新寄送驗證碼
    Route::post('resend-confirmation-code', [CustomForgotPasswordController::class, 'resendCode'])
    ->name('resend-confirmation-code');
    
    // 自訂忘記密碼 - Step 3: 重設密碼
    Route::get('mychange-password', [CustomForgotPasswordController::class, 'showResetForm'])->name('mychange-password');
    Route::put('mychange-password', [CustomForgotPasswordController::class, 'resetPassword'])->name('password.update');

    
});


Route::middleware('auth')->group(function () {
    // Route::get('verify-email', EmailVerificationPromptController::class)
    //     ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //     ->middleware(['signed', 'throttle:6,1'])
    //     ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //     ->middleware('throttle:1,1')
    //     ->name('verification.send');


    //敏感操作要輸入密碼的路由
    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //     ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);


   //使用者登入後想更新密碼
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

        // Route::get('/force-logout', function () {
        //     Auth::logout();
        //     session()->invalidate();
        //     session()->regenerateToken();
        
        //     return redirect('/mylogin'); // 登出後導回登入頁面 開發時用的
        // })->name('force-logout');
});