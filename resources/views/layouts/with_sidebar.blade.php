@extends('layouts.app')

@section('content')
    <section class="mt-[170px]">
        <x-breadcrumb :items="[
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '會員中心', 'url' => route('user.user_profile')],
            ['name' => __($__env->yieldContent('breadcrumb_title', '個人檔案'))],
        ]" />
    </section>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row">
            <!-- 側邊欄 -->
            @include('layouts.sidebar')
            
            <!-- 主要內容 -->
            <div class="w-full md:ml-6 mt-6 md:mt-0">
                @yield('main_content')
            </div>
        </div>
    </div>
@endsection 