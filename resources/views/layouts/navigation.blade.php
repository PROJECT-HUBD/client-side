<nav class="bg-gray-200 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="leftArea flex justify-start items-center gap-5">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-white text-lg font-bold me-10">
                <img src="{{ asset('images/logo.png') }}" class="w-10 h-10" alt="">
            </a>

            <a href="{{ route('test1') }}" class="text-gray-800 mr-4 font-medium hover:opacity-50">測試頁1</a>
            <a href="{{ route('test2') }}" class="text-gray-800 mr-4 font-medium hover:opacity-50">測試頁2</a>
        </div>

        <div class="flex items-center">
            <!-- 我的帳戶 -->
            <a href="{{ route('dashboard') }}" class="text-gray-800 mr-4 font-medium hover:opacity-50">
                我的帳戶
            </a>

            @auth
            <span class="text-gray-800 mr-4 font-medium">Hello, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-red-400 font-medium hover:opacity-50">登出</button>
            </form>
            @else
            <a href="{{ route('login') }}" class="text-gray-800 mr-4 font-medium hover:opacity-50">登入</a>
            <a href="{{ route('register') }}" class="text-gray-800 font-medium hover:opacity-50">註冊</a>
            @endauth
        </div>
    </div>
</nav>