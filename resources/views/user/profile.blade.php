@extends('layouts.with_sidebar')

@section('title', '個人檔案')
@section('meta_description', '個人檔案')
@section('meta_keywords', '個人檔案')

@section('main_content')
    <div class="w-full p-8 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">個人檔案</h1>
        
        <!-- 個人資料表單 -->
        <form action="{{ route('user.profile.update') }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- 基本資料 -->
            <div class="space-y-4">
                <h2 class="text-xl font-semibold text-gray-700">基本資料</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">姓名</label>
                        <input type="text" name="name" id="name" value="{{ auth()->user()->name ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">電子郵件</label>
                        <input type="email" name="email" id="email" value="{{ auth()->user()->email ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" readonly>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">手機號碼</label>
                        <input type="tel" name="phone" id="phone" value="{{ auth()->user()->phone ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    
                    <div>
                        <label for="birthday" class="block text-sm font-medium text-gray-700">生日</label>
                        <input type="date" name="birthday" id="birthday" value="{{ auth()->user()->birthday ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                </div>
            </div>
            
            <!-- 變更密碼 -->
            <div class="pt-6 border-t border-gray-200 space-y-4">
                <h2 class="text-xl font-semibold text-gray-700">變更密碼</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700">目前密碼</label>
                        <input type="password" name="current_password" id="current_password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    
                    <div></div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">新密碼</label>
                        <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">確認新密碼</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                </div>
                
                <p class="text-sm text-gray-500">變更密碼將寄發通知信件，且需要重新登入。</p>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    儲存變更
                </button>
            </div>
        </form>
    </div>
@endsection 