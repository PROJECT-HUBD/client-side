<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\PasswordResetCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Notification;

use function Laravel\Prompts\password;

class CustomForgotPassWordController extends Controller
{

    //顯示Email頁面
    public function showEmailForm()
    {
        return view('auth.myforget-password');
    }




    //寄送驗證碼
    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email', //l 測試不用這段連接資料庫
        ]);
        //生成六位數驗證碼
        $verifiationCode = rand(100000, 999999);
        Session::put('password_reset_code', $verifiationCode);
        Session::put('reset_email', $request->email);


        // 發送驗證碼到信箱 發送忘記密碼驗證碼
        Notification::route('mail', $request->email)->notifyNow(new PasswordResetCodeNotification($verifiationCode));

        return redirect()->route('myverify');
    }



    //確認驗證碼頁面
    public function showVerificationForm()
    {
        // 對應 resources/views/auth/myenter-confirmation-code.blade.php
        return view('auth.myenter-confirmation-code');
    }



    //確認驗證碼
    public function verifyCode(Request $request)
    {
        // return Redirect(route('mychange-password')); //檢視前端用的

        $request->validate([
            'code' => 'required|numeric',
        ]);

        if ($request->code == Session::get('password_reset_code')) {
            return redirect()->route('mychange-password');
        } else {
            return back()->withErrors(['code' => '驗證碼錯誤']);
        }
    }

    //重新發送驗證碼
    public function resendCode()
    {
        $email = Session::get('reset_email');
        // 🛠 測試 Session 是否有 email
        // dd($email); 
        if (!$email) {
            return back()->withErrors(['email' => '無法重新發送驗證碼，請先輸入 Email 進行驗證']);
        }

        // 產生新驗證碼
        $newCode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        // 儲存驗證碼到 Session（可設定 5 分鐘內有效）
        Session::put('password_reset_code', $newCode);
        Session::put('password_reset_expires_at', now()->addMinutes(5));

        
       // 發送驗證碼到信箱 發送忘記密碼驗證碼
       Notification::route('mail', $email)->notifyNow(new PasswordResetCodeNotification($newCode));


        return back()->with('success', '新的驗證碼已發送至您的信箱');
    }


    //更改密碼的頁面
    public function showResetForm()
    {
        // 對應 resources/views/auth/mychange-password.blade.php
        if (!Session::get('password_reset_verified')) {
            return redirect()->route('myenter-confirmation-code')->withErrors(['code' => '請先輸入驗證碼']);
        }
        return view('auth.mychange-password');
    }




    // 重設密碼
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 取得 Session 中的 email
        $email = Session::get('reset_email');

        // ✅ 如果 email 不存在，導回登入頁，避免不正確的密碼重設
        if (!$email) {
            return redirect()->route('login')->withErrors(['email' => '密碼重設連結已失效，請重新申請密碼重設']);
        }


        // ✅ 查找使用者
        $user = User::where('email', Session::get('reset_email'))->first();


        // ✅ 更新密碼
        $user->password = Hash::make($request->password);
        $user->save();

        //清除 Session 中的驗證碼和 Email
        Session::forget(['password_reset_code', 'reset_email']);

        //確保session裡的不是null
        $email = Session::get('reset_email');
        if (!$email) {
            return redirect()->route('login')->with('status', '密碼重設成功，請重新登入');
        }
    }
}
