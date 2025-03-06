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

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // ✅ 登入成功後跳轉
        }

        return back()->withErrors([
            'email' => '登入失敗，請檢查您的帳號與密碼。',
        ]);
    }

    /**
     * Display the login view.
     */
    public function showLoginForm()
    {
        return view('auth.mylogin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            
            return redirect()->route('dashboard')->with('status','登入成功！');
        }
            return back()->withErrors(['email' => '帳號或密碼有誤']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('mylogin')->with('status','已成功登出');
    }
}
