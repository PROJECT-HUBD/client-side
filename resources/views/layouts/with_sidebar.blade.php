@extends('layouts.app')

@section('content')
    <!-- 設定最小高度限制樣式 -->
    <style>
        @media (max-width: 768px) {
            .min-height-container {
                min-height: calc(100vh - var(--header-height, 125px));
            }
            
            .content-wrapper {
                padding-right: 16px;
                min-height: calc(100vh - var(--header-height, 125px) - 40px);
                overflow-x: hidden; /* 防止水平溢出 */
                padding-bottom: 20px; /* 確保內容底部有足夠空間 */
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
        
        /* 設定CSS變數，用於儲存header高度 */
        :root {
            --header-height: 125px;
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

    <script>
        // 設定header高度變數供樣式表使用
        document.addEventListener('DOMContentLoaded', function() {
            const updateHeaderHeight = () => {
                const header = document.querySelector('header');
                if (header) {
                    const headerHeight = header.offsetHeight;
                    document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
                }
            };
            
            // 初始化時設定header高度
            updateHeaderHeight();
            
            // 視窗大小變更時更新
            window.addEventListener('resize', updateHeaderHeight);
            
            // 確保在頁面加載完成和滾動時更新
            window.addEventListener('load', updateHeaderHeight);
            window.addEventListener('scroll', updateHeaderHeight);
        });
    </script>
@endsection 