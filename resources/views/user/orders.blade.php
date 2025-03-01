@extends('layouts.with_sidebar')

@section('title', '我的訂單')
@section('meta_description', '查看您的所有訂單')
@section('meta_keywords', '訂單,購買紀錄')

@section('main_content')
    <div class="w-full p-8 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">我的訂單</h1>
        
        <!-- 訂單列表 -->
        <div class="space-y-6">
            @if(isset($orders) && count($orders) > 0)
                @foreach($orders as $order)
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h3 class="text-lg font-semibold">訂單編號: {{ $order->order_number ?? 'ORD-'.rand(10000, 99999) }}</h3>
                                <p class="text-sm text-gray-500">訂購日期: {{ $order->created_at ?? now()->subDays(rand(1, 30))->format('Y-m-d H:i') }}</p>
                            </div>
                            <div class="text-right">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ $order->status ?? '已完成' }}
                                </span>
                                <p class="text-sm font-medium text-gray-900 mt-1">NT$ {{ $order->total ?? rand(500, 5000) }}</p>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-4">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">訂單項目</h4>
                            <div class="space-y-2">
                                @for($i = 0; $i < rand(1, 3); $i++)
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">商品 {{ $i + 1 }}</span>
                                        <span class="text-sm text-gray-900">NT$ {{ rand(100, 1000) }}</span>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        
                        <div class="mt-4 flex justify-end">
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800">查看詳情</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-8">
                    <p class="text-gray-500">您目前沒有任何訂單</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">開始購物</a>
                </div>
            @endif
        </div>
    </div>
@endsection 