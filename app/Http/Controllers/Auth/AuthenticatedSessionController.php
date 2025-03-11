<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

    if (!Auth::attempt($request->only('email', 'password'))) {
        return back()->withErrors([
            'email' => '帳號或密碼有誤',
            'password' => '帳號或密碼有誤', // 🔥 讓密碼輸入框也顯示錯誤訊息
        ]);
    }

    $request->session()->regenerate();

    return redirect()->route('user_profile');
}

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home')->with('status','已成功登出');
    }
}
