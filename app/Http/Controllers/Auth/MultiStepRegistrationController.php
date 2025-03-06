<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\VerificationCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class MultiStepRegistrationController extends Controller
{


    //顯示email輸入頁面
    public function showEmailForm()
    {
        return view('auth.myregister');
    }

    public function sendVerificationCode(Request $request)
    {


        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // 測試是否有進入這個函數
        //  dd('✅ sendVerificationCode() 方法執行成功', $request->email);

        // 防止短時間內重複發送 前端檢測先不用
        if (Session::has('last_verification_request_time') && now()->diffInSeconds(Session::get('last_verification_request_time')) < 60) {
            return back()->withErrors(['email' => '請等待 60 秒後再發送']);
        }

        $verificationCode = random_int(100000, 999999);

        Session::put('registration_verification_code', $verificationCode);
        Session::put('registration_expires_at', now()->addMinutes(10));
        Session::put('registration_email', $request->email);
        Session::put('last_verification_request_time', now());


        Notification::route('mail', $request->email)->notifyNow(new VerificationCodeNotification($verificationCode));

        return redirect()->route('myverify');
    }


    // Step 2: 顯示驗證碼輸入頁面

    public function showVerificationForm()
    {
        return view('auth.myverify'); // 確保 view 名稱與你的 Blade 檔案相符
    }


    // Step 2: 驗證輸入的驗證碼
    public function verifyCode(Request $request)
    {
        //return redirect() -> route('mylaststep'); //暫時測試前端流程


        $request->validate([
            'verification_code' => 'required|numeric|digits:6', // 驗證碼應該是 6 位數
        ]);

        // 取得 session 中存的驗證碼
        $sessionCode = Session::get('registration_verification_code');
        $expiresAt = Session::get('registration_expires_at');

        if (!$sessionCode || ($expiresAt && now()->greaterThan($expiresAt))) {
            return back()->withErrors(['verification_code' => '驗證碼已過期，請重新請求']);
        }

        // 檢查驗證碼是否匹配
        if ($request->verification_code == $sessionCode) {

            // ✅ 確認驗證成功後，將驗證狀態存入 Session
            Session::put('email_verified', true);

            // 驗證成功，清除 session 中的驗證碼
            Session::forget('registration_verification_code');
            Session::forget('registration_expires_at');

            return redirect()->route('mylaststep');
        } else {
            return back()->withErrors(['verification_code' => '驗證碼錯誤，請重新輸入']);
        }
    }


    //Step 3: 顯示個人資料輸入頁面
    public function showDetailsForm()
    {
        return view('auth.mylaststep'); // 確保 view 名稱與你的 Blade 檔案相符
    }


    //Step 3: 接收個人資料，完成註冊

    public function registerDetails(Request $request)
    {
       
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'birthday' => 'required|date',
        //     'phone' => 'required|string|min:10|max:15',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // 確保 session 中的 email 存在，避免 session 遺失
        $email = Session::get('registration_email');
        if (!$email) {
            return back()->withErrors(['email' => '信件遺失，請重新註冊']);
        };

        // ✅ 確保 Email 已驗證
        if (!Session::get('email_verified')) {
            return back()->withErrors(['email' => 'Email 尚未驗證，請重新驗證']);
        }

        // 創建新用戶
        $user = User::create([
            'name' => $request->name,
            'email' => Session::get('registration_email'),
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(), //將email設為已驗證
        ]);


        // 清除 Session 中的驗證碼與 Email
        Session::forget(['registration_verification_code', 'registration_email','email_verified']);

        //自動登入用戶
        Auth::login($user);

        return redirect()->route('dashboard');

        // ✅ 直接跳轉到「註冊成功」頁面 (dashboard)
        // return redirect()->route('dashboard')->with('success', '模擬註冊成功');
    }
}
