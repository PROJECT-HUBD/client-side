<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use function Pest\Laravel\withHeader;

class AuthenticatedSessionController extends Controller
{


    
    public function showLoginForm()
    {
        return view('auth.mylogin');
    }

    
    
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    $remember = $request->has('remember');//檢查有沒有勾記住我

    if (!Auth::attempt($request->only('email', 'password'), $remember)) {
        return back()->withErrors([
            'email' => '帳號或密碼有誤',
            'password' => '帳號或密碼有誤', // 讓密碼輸入框也顯示錯誤訊息
        ]);
    }

    $request->session()->regenerate();

    return redirect()->route('user_profile');
}

    public function destroy(Request $request): RedirectResponse
    {
        
        $user = Auth::user(); // 取得目前登入的使用者

    if ($user) {
        $user->remember_token = null; // 清除 remember_token
        $user-> save();
    }
        
        
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('home')->withHeader([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
        'Pragma' => 'no-cache',
        'Expires' => 'Sat, 01 Jan 2000 00:00:00 GMT'//刪除快取
        ]);
    }
}
