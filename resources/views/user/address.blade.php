@extends('layouts.with_sidebar')

@section('title', '收件地址')
@section('meta_description', '管理您的收件地址')
@section('meta_keywords', '收件地址, 配送地址, 會員中心')
@section('breadcrumb_title', '收件地址')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">收件地址</h1>
        
        <!-- 地址內容將在這裡 -->
        <p class="text-gray-500">您尚未添加任何收件地址。</p>
    </div>
@endsection 