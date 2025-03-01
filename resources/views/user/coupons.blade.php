@extends('layouts.with_sidebar')

@section('title', '我的優惠')
@section('meta_description', '查看您的優惠券和折扣')
@section('meta_keywords', '優惠券,折扣')

@section('main_content')
    <div class="w-full p-8 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">我的優惠</h1>
        
        <!-- 優惠券列表 -->
        <div class="space-y-6">
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <div class="bg-blue-50 p-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-blue-800">新會員優惠</h3>
                            <p class="text-sm text-gray-600">全館商品 85 折</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">優惠碼: WELCOME15</p>
                            <p class="text-xs text-gray-500">有效期限: 2023/12/31</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <p class="text-sm text-gray-600">適用於全館商品，不可與其他優惠同時使用。</p>
                    <div class="mt-4 flex justify-end">
                        <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            立即使用
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg overflow-hidden">
                <div class="bg-green-50 p-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-green-800">生日特惠</h3>
                            <p class="text-sm text-gray-600">指定商品 9 折</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">優惠碼: BIRTHDAY10</p>
                            <p class="text-xs text-gray-500">有效期限: 2023/11/30</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <p class="text-sm text-gray-600">僅適用於指定商品，可與其他優惠同時使用。</p>
                    <div class="mt-4 flex justify-end">
                        <button type="button" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            立即使用
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border border-gray-200 rounded-lg overflow-hidden opacity-50">
                <div class="bg-gray-50 p-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">限時折扣</h3>
                            <p class="text-sm text-gray-600">滿 $1000 折 $100</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-medium text-gray-900">優惠碼: SAVE100</p>
                            <p class="text-xs text-gray-500">已過期: 2023/09/30</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <p class="text-sm text-gray-600">此優惠已過期，無法使用。</p>
                </div>
            </div>
        </div>
    </div>
@endsection 