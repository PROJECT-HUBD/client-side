@extends('layouts.with_sidebar')

@section('title', '我的優惠')
@section('meta_description', '查看和管理您的優惠券')
@section('meta_keywords', '優惠券, 折扣, 會員中心')
@section('breadcrumb_title', '我的優惠')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">我的優惠</h1>
        
        <!-- 優惠券內容將在這裡 -->
        <p class="text-gray-500">您目前沒有任何可用的優惠券。</p>
    </div>
@endsection 