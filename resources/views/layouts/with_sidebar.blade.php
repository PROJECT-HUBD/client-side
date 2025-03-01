@extends('layouts.app')

@section('content')
    <!-- 麵包屑導航 -->
    <section class="container mx-auto px-4 py-3 mt-[120px]">
        @php
            $items = [
                ['name' => '首頁', 'url' => route('home')],
                ['name' => '會員中心', 'url' => route('user.user_profile')],
                ['name' => View::yieldContent('breadcrumb_title', '個人檔案')]
            ];
        @endphp
        <x-breadcrumb :items="$items" />
    </section>

    <!-- 主要內容區域 -->
    <div class="container mx-auto px-4 mb-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- 側邊欄 -->
            <div class="md:w-1/4 lg:w-1/5">
                @include('layouts.sidebar')
            </div>
            
            <!-- 主要內容 -->
            <div class="md:w-3/4 lg:w-4/5">
                @yield('main_content')
            </div>
        </div>
    </div>
@endsection 