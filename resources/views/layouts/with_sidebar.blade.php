@extends('layouts.app')

@section('content')
    <!-- 設定最小高度限制樣式 -->
    <style>
        @media (max-width: 768px) {
            .min-height-container {
                min-height: 680px; /* 側邊欄按鈕所需的最小高度 */
            }
            
            .content-wrapper {
                padding-right: 16px;
                min-height: 680px; /* 與側邊欄一致的最小高度 */
                overflow-x: hidden; /* 防止水平溢出 */
            }
            
            /* 當視窗高度過小時，調整內容區域的邊距 */
            @media (max-height: 819px) { /* 680px + 139px (header高度) = 819px */
                .min-height-container {
                    padding-bottom: 20px;
                }
            }
            
            /* 最小寬度限制，確保內容不會擠壓 */
            @media (max-width: 360px) {
                .content-wrapper {
                    margin-left: 66px !important; /* 確保留出足夠空間給側邊欄 */
                    padding-right: 10px;
                    width: calc(100% - 66px) !important;
                }
            }
        }
    </style>

    <section class="mt-[170px]">
        <x-breadcrumb :items="[
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '會員中心', 'url' => route('user.user_profile')],
            ['name' => __($__env->yieldContent('breadcrumb_title', '個人檔案'))],
        ]" />
    </section>

    <div class="container mx-auto px-4 py-8 min-height-container">
        <div class="flex flex-col md:flex-row">
            <!-- 側邊欄 -->
            @include('layouts.sidebar')
            
            <!-- 主要內容 -->
            <div class="w-full ml-[64px] md:ml-6 mt-6 md:mt-0 content-wrapper pr-4">
                @yield('main_content')
            </div>
        </div>
    </div>
@endsection 