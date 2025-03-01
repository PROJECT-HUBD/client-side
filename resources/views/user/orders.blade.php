@extends('layouts.with_sidebar')

@section('title', '我的訂單')
@section('meta_description', '查看和管理您的所有訂單')
@section('meta_keywords', '訂單, 購買記錄, 會員中心')
@section('breadcrumb_title', '我的訂單')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">我的訂單</h1>
        
        <!-- 訂單內容將在這裡 -->
        <p class="text-gray-500">您目前沒有任何訂單記錄。</p>
    </div>
@endsection 