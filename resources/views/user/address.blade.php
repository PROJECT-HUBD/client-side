@extends('layouts.with_sidebar')

@section('title', '收件地址')
@section('meta_description', '管理您的收件地址')
@section('meta_keywords', '地址,收件資訊')

@section('main_content')
    <div class="w-full p-8 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">收件地址</h1>
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                新增地址
            </button>
        </div>
        
        <!-- 地址列表 -->
        <div class="space-y-6">
            @for($i = 0; $i < 2; $i++)
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $i == 0 ? '住家地址' : '公司地址' }}</h3>
                            <p class="text-sm text-gray-600 mt-1">王小明</p>
                            <p class="text-sm text-gray-600">0912-345-678</p>
                            <p class="text-sm text-gray-600">{{ $i == 0 ? '台北市信義區信義路五段7號' : '台北市內湖區瑞光路513巷' }}</p>
                            @if($i == 0)
                                <span class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    預設地址
                                </span>
                            @endif
                        </div>
                        <div class="flex space-x-2">
                            <button type="button" class="text-sm text-gray-600 hover:text-gray-900">編輯</button>
                            <button type="button" class="text-sm text-red-600 hover:text-red-900">刪除</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection 