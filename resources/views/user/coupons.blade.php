@extends('layouts.with_sidebar')

@section('title', '我的優惠')
@section('meta_description', '查看和管理您的優惠券')
@section('meta_keywords', '優惠券, 折扣, 會員中心')
@section('breadcrumb_title', '我的優惠')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-brandGray-normal">我的優惠</h1>
            <div class="flex space-x-2">
                <div class="relative">
                    <input type="text" placeholder="輸入優惠碼" class="px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    <button type="button" class="absolute right-2 top-2 text-brandBlue-normal hover:text-brandBlue-normalHover">
                        <i class="icon-[mdi--plus-circle-outline] w-5 h-5"></i>
                    </button>
                </div>
                <button type="button" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    兌換優惠碼
                </button>
            </div>
        </div>
        
        <!-- 優惠券分類標籤 -->
        <div class="flex border-b border-brandGray-light mb-6">
            <button class="px-4 py-2 text-brandBlue-normal border-b-2 border-brandBlue-normal font-medium">可使用 (3)</button>
            <button class="px-4 py-2 text-brandGray-normalLight hover:text-brandGray-normal">已使用 (2)</button>
            <button class="px-4 py-2 text-brandGray-normalLight hover:text-brandGray-normal">已過期 (1)</button>
        </div>
        
        <!-- 優惠券列表 -->
        <div class="space-y-6">
            <!-- 優惠券 1 -->
            <div class="relative overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <!-- 左側：優惠券金額/折扣 -->
                    <div class="w-full md:w-1/4 bg-gradient-to-r from-brandBlue-normal to-brandBlue-normalDarker text-white p-6 flex flex-col justify-center items-center rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                        <span class="text-3xl font-bold">NT$100</span>
                        <span class="text-lg">現金折抵</span>
                    </div>
                    
                    <!-- 右側：優惠券詳情 -->
                    <div class="w-full md:w-3/4 p-6 border-2 border-brandBlue-lightLight rounded-b-lg md:rounded-r-lg md:rounded-bl-none relative">
                        <!-- 優惠券標題和到期日 -->
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-brandGray-normal">新會員歡迎禮</h3>
                            <span class="text-sm text-brandGray-normalLight">有效期限：2023/12/31</span>
                        </div>
                        
                        <!-- 優惠券說明 -->
                        <p class="text-sm text-brandGray-normalLight mb-4">單筆消費滿 NT$500 即可使用，不可與其他優惠同時使用。</p>
                        
                        <!-- 使用條件和按鈕 -->
                        <div class="flex flex-wrap justify-between items-center">
                            <span class="text-xs text-brandGray-normalLight">消費滿 NT$500 可用</span>
                            <button class="px-4 py-1.5 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover text-sm">立即使用</button>
                        </div>
                        
                        <!-- 裝飾性圓點 -->
                        <div class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 bg-white border-2 border-brandBlue-lightLight rounded-full hidden md:block"></div>
                    </div>
                </div>
            </div>
            
            <!-- 優惠券 2 -->
            <div class="relative overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <!-- 左側：優惠券金額/折扣 -->
                    <div class="w-full md:w-1/4 bg-gradient-to-r from-brandGray-normal to-brandGray-dark text-white p-6 flex flex-col justify-center items-center rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                        <span class="text-3xl font-bold">85<small>折</small></span>
                        <span class="text-lg">全館商品</span>
                    </div>
                    
                    <!-- 右側：優惠券詳情 -->
                    <div class="w-full md:w-3/4 p-6 border-2 border-brandGray-light rounded-b-lg md:rounded-r-lg md:rounded-bl-none relative">
                        <!-- 優惠券標題和到期日 -->
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-brandGray-normal">週年慶特別優惠</h3>
                            <span class="text-sm text-brandGray-normalLight">有效期限：2023/11/30</span>
                        </div>
                        
                        <!-- 優惠券說明 -->
                        <p class="text-sm text-brandGray-normalLight mb-4">全館商品享 85 折優惠，特價商品除外。</p>
                        
                        <!-- 使用條件和按鈕 -->
                        <div class="flex flex-wrap justify-between items-center">
                            <span class="text-xs text-brandGray-normalLight">無最低消費限制</span>
                            <button class="px-4 py-1.5 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover text-sm">立即使用</button>
                        </div>
                        
                        <!-- 裝飾性圓點 -->
                        <div class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 bg-white border-2 border-brandGray-light rounded-full hidden md:block"></div>
                    </div>
                </div>
            </div>
            
            <!-- 優惠券 3 -->
            <div class="relative overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <!-- 左側：優惠券金額/折扣 -->
                    <div class="w-full md:w-1/4 bg-gradient-to-r from-brandRed-normal to-brandRed-dark text-white p-6 flex flex-col justify-center items-center rounded-t-lg md:rounded-l-lg md:rounded-tr-none">
                        <span class="text-3xl font-bold">免運費</span>
                        <span class="text-lg">全台灣</span>
                    </div>
                    
                    <!-- 右側：優惠券詳情 -->
                    <div class="w-full md:w-3/4 p-6 border-2 border-brandRed-light rounded-b-lg md:rounded-r-lg md:rounded-bl-none relative">
                        <!-- 優惠券標題和到期日 -->
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-lg font-semibold text-brandGray-normal">免運費優惠</h3>
                            <span class="text-sm text-brandGray-normalLight">有效期限：2023/12/15</span>
                        </div>
                        
                        <!-- 優惠券說明 -->
                        <p class="text-sm text-brandGray-normalLight mb-4">單筆消費滿 NT$1,000 即可享免運費優惠。</p>
                        
                        <!-- 使用條件和按鈕 -->
                        <div class="flex flex-wrap justify-between items-center">
                            <span class="text-xs text-brandGray-normalLight">消費滿 NT$1,000 可用</span>
                            <button class="px-4 py-1.5 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover text-sm">立即使用</button>
                        </div>
                        
                        <!-- 裝飾性圓點 -->
                        <div class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 bg-white border-2 border-brandRed-light rounded-full hidden md:block"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 優惠券使用說明 -->
        <div class="mt-8 p-4 bg-brandGray-lightLight rounded-lg">
            <h3 class="text-lg font-medium text-brandGray-normal mb-2">優惠券使用說明</h3>
            <ul class="list-disc pl-5 text-sm text-brandGray-normalLight space-y-1">
                <li>每筆訂單限用一張優惠券</li>
                <li>優惠券需在有效期限內使用</li>
                <li>部分優惠券有最低消費金額限制</li>
                <li>優惠券不可兌換現金</li>
                <li>優惠券逾期後將自動失效</li>
                <li>本公司保留修改優惠券使用條款的權利</li>
            </ul>
        </div>
        
        <!-- 推薦活動 -->
        <div class="mt-6">
            <h3 class="text-lg font-medium text-brandGray-normal mb-4">推薦活動</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border border-brandGray-light rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="活動圖片" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="text-md font-semibold text-brandGray-normal mb-2">秋季新品上市</h4>
                        <p class="text-sm text-brandGray-normalLight mb-2">購買秋季新品，滿 NT$2,000 送 NT$200 優惠券</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-brandGray-normalLight">2023/10/15 - 2023/11/15</span>
                            <a href="#" class="text-brandBlue-normal hover:text-brandBlue-normalHover text-sm">查看詳情</a>
                        </div>
                    </div>
                </div>
                <div class="border border-brandGray-light rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="活動圖片" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h4 class="text-md font-semibold text-brandGray-normal mb-2">會員生日禮</h4>
                        <p class="text-sm text-brandGray-normalLight mb-2">生日當月消費享 9 折優惠，並贈送生日專屬優惠券</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-brandGray-normalLight">全年度活動</span>
                            <a href="#" class="text-brandBlue-normal hover:text-brandBlue-normalHover text-sm">查看詳情</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript 功能 -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 優惠券分類標籤切換
            const tabs = document.querySelectorAll('.flex.border-b.border-brandGray-light.mb-6 button');
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // 移除所有標籤的活動狀態
                    tabs.forEach(t => {
                        t.classList.remove('text-brandBlue-normal', 'border-b-2', 'border-brandBlue-normal', 'font-medium');
                        t.classList.add('text-brandGray-normalLight', 'hover:text-brandGray-normal');
                    });
                    
                    // 設置當前標籤為活動狀態
                    this.classList.remove('text-brandGray-normalLight', 'hover:text-brandGray-normal');
                    this.classList.add('text-brandBlue-normal', 'border-b-2', 'border-brandBlue-normal', 'font-medium');
                    
                    // 這裡可以添加切換顯示不同狀態優惠券的邏輯
                });
            });
            
            // 兌換優惠碼按鈕
            const redeemButton = document.querySelector('button.px-4.py-2.bg-brandBlue-normal');
            redeemButton.addEventListener('click', function() {
                const couponCode = document.querySelector('input[placeholder="輸入優惠碼"]').value;
                if (couponCode.trim() === '') {
                    alert('請輸入優惠碼');
                    return;
                }
                
                // 這裡可以添加兌換優惠碼的 AJAX 請求
                alert('優惠碼兌換中...');
            });
            
            // 立即使用按鈕
            const useButtons = document.querySelectorAll('button.px-4.py-1\\.5');
            useButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // 這裡可以添加使用優惠券的邏輯，例如跳轉到商品頁面
                    window.location.href = '/categories/all';
                });
            });
        });
    </script>
@endsection 