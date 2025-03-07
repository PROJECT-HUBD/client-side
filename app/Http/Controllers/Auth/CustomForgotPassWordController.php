<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

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
            'email' => 'required|email', //|exists:users,email 測試不用這段連接資料庫
        ]);
        //生成六位數驗證碼
        $verifiationCode = rand(100000, 999999);
        Session::put('password_reset_code',$verifiationCode);
        Session::put('reset_email', $request->email);

        // 發送驗證碼到信箱
        Mail::raw("您的驗證碼是：$verifiationCode", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('密碼重設驗證碼');
        });

        return redirect()->route('myenter-confirmation-code');
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
        return Redirect(route('mychange-password')); //檢視前端用的

        // $request->validate([
        //     'code' => 'required|numeric',
        // ]);

        // if ($request->code == Session::get('password_reset_code')) {
        //     return redirect()->route('password.reset');
        // } else {
        //     return back()->withErrors(['code' => '驗證碼錯誤']);
        // }
    }



        //更改密碼的頁面
    public function showResetForm()
    {
        // 對應 resources/views/auth/mychange-password.blade.php
        return view('auth.mychange-password');
    }




    // 重設密碼
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // $user = User::where('email', Session::get('reset_email'))->first();
        // $user->password = Hash::make($request->password);
        // $user->save(); 測試前端目前不用

        // 清除 Session 中的驗證碼和 Email
       // Session::forget(['password_reset_code', 'reset_email']);
        
        // 確保session裡的不是null
        //$email = Session::get('reset_email'); 
        //if (!$email){
                return redirect()->route('login')->with('status', '密碼重設成功，請重新登入');
            //}
    }
}
