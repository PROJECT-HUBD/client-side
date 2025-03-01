@extends('layouts.with_sidebar')

@section('title', '我的優惠')
@section('meta_description', '查看和管理您的優惠券')
@section('meta_keywords', '優惠券, 折扣, 會員中心')
@section('breadcrumb_title', '我的優惠')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGray-normal mb-3 sm:mb-0">我的優惠</h1>
            <div class="flex flex-col sm:flex-row w-full sm:w-auto gap-2">
                <div class="relative w-full sm:w-auto">
                    <input type="text" placeholder="輸入優惠碼" class="w-full sm:w-auto px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    <button type="button" class="absolute right-2 top-2 text-brandBlue-normal hover:text-brandBlue-normalHover">
                        <i class="icon-[mdi--plus-circle-outline] w-5 h-5"></i>
                    </button>
                </div>
                <button type="button" id="redeem-button" class="px-3 py-1.5 sm:px-4 sm:py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal whitespace-nowrap">
                    兌換優惠碼
                </button>
            </div>
        </div>
        
        <!-- 顯示模式切換 -->
        <div class="flex justify-end mb-4">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button" id="list-view-btn" class="px-3 py-1.5 text-sm font-medium bg-brandBlue-normal text-white rounded-l-md hover:bg-brandBlue-normalHover focus:z-10 focus:ring-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--format-list-bulleted] w-5 h-5"></i>
                </button>
                <button type="button" id="grid-view-btn" class="px-3 py-1.5 text-sm font-medium bg-brandGray-light text-brandGray-normal rounded-r-md hover:bg-brandGray-lightHover focus:z-10 focus:ring-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--grid] w-5 h-5"></i>
                </button>
            </div>
        </div>
        
        <!-- 優惠券列表 -->
        <div class="space-y-4">
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-3 border-b border-brandGray-light">
                    <h3 class="font-medium text-brandGray-normal">可使用的優惠券</h3>
                </div>
                <!-- 列表/網格顯示區域 -->
                <div id="coupon-container" class="divide-y divide-brandGray-light view-list">
                    <!-- 優惠券 1 -->
                    <div class="coupon-item p-4">
                        <div class="flex flex-col justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-brandGray-normal">新會員首購 85 折</h4>
                                <p class="text-sm text-brandGray-normalLight mb-1">全館商品適用</p>
                                <p class="text-sm text-brandGray-normalLight">有效期限：2023/12/31</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 優惠券 2 -->
                    <div class="coupon-item p-4">
                        <div class="flex flex-col justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-brandGray-normal">生日禮金 $100</h4>
                                <p class="text-sm text-brandGray-normalLight mb-1">消費滿 $1,000 可使用</p>
                                <p class="text-sm text-brandGray-normalLight">有效期限：2023/07/31</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 優惠券 3 -->
                    <div class="coupon-item p-4">
                        <div class="flex flex-col justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-brandGray-normal">夏季特惠 $200</h4>
                                <p class="text-sm text-brandGray-normalLight mb-1">指定商品適用</p>
                                <p class="text-sm text-brandGray-normalLight">有效期限：2023/08/31</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-3 border-b border-brandGray-light">
                    <h3 class="font-medium text-brandGray-normal">已使用/已過期的優惠券</h3>
                </div>
                <div id="expired-coupon-container" class="divide-y divide-brandGray-light view-list">
                    <!-- 已使用優惠券 -->
                    <div class="coupon-item p-4 opacity-60">
                        <div class="flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between">
                                    <h4 class="text-lg font-semibold text-brandGray-normal">週年慶全館 9 折</h4>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brandGray-light text-brandGray-normal">
                                        已使用
                                    </span>
                                </div>
                                <p class="text-sm text-brandGray-normalLight mb-1">全館商品適用</p>
                                <p class="text-sm text-brandGray-normalLight">使用日期：2023/05/15</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 已過期優惠券 -->
                    <div class="coupon-item p-4 opacity-60">
                        <div class="flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between">
                                    <h4 class="text-lg font-semibold text-brandGray-normal">春季特惠 $200</h4>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brandGray-light text-brandGray-normal">
                                        已過期
                                    </span>
                                </div>
                                <p class="text-sm text-brandGray-normalLight mb-1">消費滿 $2,000 可使用</p>
                                <p class="text-sm text-brandGray-normalLight">有效期限：2023/04/30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        /* 列表視圖樣式 */
        .view-list .coupon-item {
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }
        
        .view-list .coupon-item:hover {
            background-color: #f9fafb;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            cursor: pointer;
        }
        
        /* 網格視圖樣式 */
        .view-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1rem;
            padding: 1rem;
        }
        
        @media (min-width: 640px) {
            .view-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .view-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        .view-grid .coupon-item {
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            padding: 1rem;
            transition: all 0.3s ease;
        }
        
        .view-grid .coupon-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            cursor: pointer;
        }
        
        /* 已使用/已過期優惠券樣式 */
        .coupon-used, .coupon-expired {
            opacity: 0.7;
        }
        
        .coupon-used:hover, .coupon-expired:hover {
            transform: none !important;
            box-shadow: none !important;
            cursor: default !important;
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 獲取元素
            const listViewBtn = document.getElementById('list-view-btn');
            const gridViewBtn = document.getElementById('grid-view-btn');
            const couponContainer = document.getElementById('coupon-container');
            const expiredCouponContainer = document.getElementById('expired-coupon-container');
            const redeemButton = document.getElementById('redeem-button');
            const couponInput = document.querySelector('input[placeholder="輸入優惠碼"]');
            const activeCoupons = document.querySelectorAll('#coupon-container .coupon-item');
            
            // 切換到列表視圖
            function switchToListView() {
                couponContainer.classList.remove('view-grid');
                couponContainer.classList.add('view-list', 'divide-y');
                if (expiredCouponContainer) {
                    expiredCouponContainer.classList.remove('view-grid');
                    expiredCouponContainer.classList.add('view-list', 'divide-y');
                }
                
                // 更新按鈕樣式
                listViewBtn.classList.remove('bg-brandGray-light', 'text-brandGray-normal');
                listViewBtn.classList.add('bg-brandBlue-normal', 'text-white');
                gridViewBtn.classList.remove('bg-brandBlue-normal', 'text-white');
                gridViewBtn.classList.add('bg-brandGray-light', 'text-brandGray-normal');
            }
            
            // 切換到網格視圖
            function switchToGridView() {
                couponContainer.classList.remove('view-list', 'divide-y');
                couponContainer.classList.add('view-grid');
                if (expiredCouponContainer) {
                    expiredCouponContainer.classList.remove('view-list', 'divide-y');
                    expiredCouponContainer.classList.add('view-grid');
                }
                
                // 更新按鈕樣式
                gridViewBtn.classList.remove('bg-brandGray-light', 'text-brandGray-normal');
                gridViewBtn.classList.add('bg-brandBlue-normal', 'text-white');
                listViewBtn.classList.remove('bg-brandBlue-normal', 'text-white');
                listViewBtn.classList.add('bg-brandGray-light', 'text-brandGray-normal');
            }
            
            // 添加事件監聽器
            listViewBtn.addEventListener('click', function() {
                switchToListView();
                saveViewPreference('list');
            });
            
            gridViewBtn.addEventListener('click', function() {
                switchToGridView();
                saveViewPreference('grid');
            });
            
            // 兌換優惠碼
            redeemButton.addEventListener('click', function() {
                const couponCode = couponInput.value;
                if (couponCode.trim() === '') {
                    alert('請輸入優惠碼');
                    return;
                }
                
                // 這裡可以添加兌換優惠碼的 AJAX 請求
                alert('優惠碼兌換中...');
            });
            
            // 點擊優惠券項目
            activeCoupons.forEach(coupon => {
                coupon.addEventListener('click', function() {
                    // 這裡可以添加點擊優惠券的邏輯，例如顯示詳情或跳轉到商品頁面
                    window.location.href = '/categories/all';
                });
            });
            
            // 保存視圖偏好到 localStorage
            function saveViewPreference(viewType) {
                localStorage.setItem('couponViewPreference', viewType);
            }
            
            // 從 localStorage 讀取視圖偏好
            function loadViewPreference() {
                const preference = localStorage.getItem('couponViewPreference');
                if (preference === 'grid') {
                    switchToGridView();
                } else {
                    switchToListView(); // 確保預設視圖也被正確應用
                }
            }
            
            // 頁面載入時讀取偏好
            loadViewPreference();
        });
    </script>
@endsection 