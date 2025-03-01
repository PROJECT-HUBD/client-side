@extends('layouts.with_sidebar')

@section('title', '付款資訊')
@section('meta_description', '管理您的付款方式')
@section('meta_keywords', '付款,信用卡')

@section('main_content')
    <div class="w-full p-8 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">付款資訊</h1>
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                新增付款方式
            </button>
        </div>
        
        <!-- 付款方式列表 -->
        <div class="space-y-6">
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center">
                            <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <h3 class="ml-2 text-lg font-semibold">信用卡</h3>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">**** **** **** 1234</p>
                        <p class="text-sm text-gray-600">到期日: 12/25</p>
                        <span class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            預設付款方式
                        </span>
                    </div>
                    <div class="flex space-x-2">
                        <button type="button" class="text-sm text-gray-600 hover:text-gray-900">編輯</button>
                        <button type="button" class="text-sm text-red-600 hover:text-red-900">刪除</button>
                    </div>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center">
                            <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                            <h3 class="ml-2 text-lg font-semibold">LINE Pay</h3>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">連結帳號: user123</p>
                    </div>
                    <div class="flex space-x-2">
                        <button type="button" class="text-sm text-red-600 hover:text-red-900">解除連結</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 