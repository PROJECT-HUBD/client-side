<div class="w-full md:w-64 bg-white border-brandGray-light flex-shrink-0 hidden md:block">
    <!-- 側邊選單 -->
    <nav class="p-2">
        <div class="space-y-1">
            <div class="py-2">
                <a href="/user/user_profile" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is('user/user_profile') ? 'bg-brandGray-lightLight text-brandBlue-normal' : 'text-brandGray-normal hover:bg-brandGray-lightLight hover:text-brandBlue-normal' }}">
                    <i class="icon-[mdi--account-circle-outline] w-5 h-5 mr-2 flex-shrink-0 {{ request()->is('user/user_profile') ? 'text-brandBlue-normal' : 'text-brandGray-normalLight group-hover:text-brandBlue-normal' }}"></i>
                    <span class="truncate">個人檔案</span>
                </a>
                <a href="/user/orders" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is('user/orders') ? 'bg-brandGray-lightLight text-brandBlue-normal' : 'text-brandGray-normal hover:bg-brandGray-lightLight hover:text-brandBlue-normal' }}">
                    <i class="icon-[mdi--package-variant-closed] w-5 h-5 mr-2 flex-shrink-0 {{ request()->is('user/orders') ? 'text-brandBlue-normal' : 'text-brandGray-normalLight group-hover:text-brandBlue-normal' }}"></i>
                    <span class="truncate">我的訂單</span>
                </a>
            </div>
            
            <div class="py-2">
                <a href="/user/address" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is('user/address') ? 'bg-brandGray-lightLight text-brandBlue-normal' : 'text-brandGray-normal hover:bg-brandGray-lightLight hover:text-brandBlue-normal' }}">
                    <i class="icon-[mdi--map-marker-outline] w-5 h-5 mr-2 flex-shrink-0 {{ request()->is('user/address') ? 'text-brandBlue-normal' : 'text-brandGray-normalLight group-hover:text-brandBlue-normal' }}"></i>
                    <span class="truncate">收件地址</span>
                </a>
                <a href="/user/payment" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is('user/payment') ? 'bg-brandGray-lightLight text-brandBlue-normal' : 'text-brandGray-normal hover:bg-brandGray-lightLight hover:text-brandBlue-normal' }}">
                    <i class="icon-[mdi--credit-card-outline] w-5 h-5 mr-2 flex-shrink-0 {{ request()->is('user/payment') ? 'text-brandBlue-normal' : 'text-brandGray-normalLight group-hover:text-brandBlue-normal' }}"></i>
                    <span class="truncate">付款資訊</span>
                </a>
                <a href="/user/coupons" class="group flex items-center px-3 py-2 text-sm font-medium rounded-md {{ request()->is('user/coupons') ? 'bg-brandGray-lightLight text-brandBlue-normal' : 'text-brandGray-normal hover:bg-brandGray-lightLight hover:text-brandBlue-normal' }}">
                    <i class="icon-[mdi--ticket-percent-outline] w-5 h-5 mr-2 flex-shrink-0 {{ request()->is('user/coupons') ? 'text-brandBlue-normal' : 'text-brandGray-normalLight group-hover:text-brandBlue-normal' }}"></i>
                    <span class="truncate">我的優惠</span>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- 登出按鈕 -->
    <div class="p-4 mt-4 border-t border-brandGray-light">
        <form  method="POST" action="{{route('logout')}}">
            @csrf
            <button  type="submit" class="w-full flex items-center justify-center px-3 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
                <i class="icon-[mdi--logout] w-5 h-5 mr-2 flex-shrink-0"></i>
                <span class="truncate">登出</span>
            </button>
        </form>
    </div>
</div>

<!-- 行動版新側邊欄（取代原先的底部導航） -->
<div class="md:hidden fixed inset-y-0 left-0 z-50 flex flex-col bg-white border-r border-brandGray-light shadow-md min-h-[680px] min-w-[64px]" style="top: 139px; width: 64px; transition: all 0.3s ease-in-out;" id="mobileSidebar">
    <!-- 使用grid布局實現垂直均勻分佈 -->
    <div class="grid grid-cols-1 h-full py-4 overflow-hidden" style="grid-template-rows: auto 2fr auto 1fr auto 1fr auto 1fr auto 1fr auto 2fr auto;">
        <!-- 第1個按鈕：展開/收合 -->
        <div class="flex items-center justify-center w-full">
            <button type="button" class="flex items-center justify-start w-[60px] px-4 py-3 text-brandGray-normal hover:text-brandBlue-normal transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg" id="toggleMobileSidebar">
                <div class="flex items-center justify-center w-8 h-8">
                    <div class="relative w-6 h-6 flex items-center justify-center">
                        <i class="icon-[mdi--chevron-right] w-6 h-6 absolute transition-all duration-300" id="sidebarIconRight" style="opacity: 1;"></i>
                        <i class="icon-[mdi--chevron-left] w-6 h-6 absolute transition-all duration-300" id="sidebarIconLeft" style="opacity: 0;"></i>
                    </div>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextToggle">收合選單</span>
            </button>
        </div>
        
        <!-- 較大間隔 -->
        <div></div>
        
        <!-- 第2個按鈕：個人檔案 -->
        <div class="flex items-center justify-center w-full">
            <a href="{{ route('user.user_profile') }}" class="flex items-center justify-start w-[60px] px-4 py-3 {{ Route::currentRouteName() == 'user.user_profile' ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }} transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--account-circle-outline] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextProfile">個人檔案</span>
            </a>
        </div>
        
        <!-- 標準間隔 -->
        <div></div>
        
        <!-- 第3個按鈕：我的訂單 -->
        <div class="flex items-center justify-center w-full">
            <a href="{{ route('user.orders') }}" class="flex items-center justify-start w-[60px] px-4 py-3 {{ Route::currentRouteName() == 'user.orders' ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }} transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--package-variant-closed] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextOrders">我的訂單</span>
            </a>
        </div>
        
        <!-- 標準間隔 -->
        <div></div>
        
        <!-- 第4個按鈕：收件地址 - 水平居中對齊 -->
        <div class="flex items-center justify-center w-full">
            <a href="{{ route('user.address') }}" class="flex items-center justify-start w-[60px] px-4 py-3 {{ Route::currentRouteName() == 'user.address' ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }} transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--map-marker-outline] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextAddress">收件地址</span>
            </a>
        </div>
        
        <!-- 標準間隔 -->
        <div></div>
        
        <!-- 第5個按鈕：付款資訊 -->
        <div class="flex items-center justify-center w-full">
            <a href="{{ route('user.payment') }}" class="flex items-center justify-start w-[60px] px-4 py-3 {{ Route::currentRouteName() == 'user.payment' ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }} transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--credit-card-outline] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextPayment">付款資訊</span>
            </a>
        </div>
        
        <!-- 標準間隔 -->
        <div></div>
        
        <!-- 第6個按鈕：我的優惠 -->
        <div class="flex items-center justify-center w-full">
            <a href="{{ route('user.coupons') }}" class="flex items-center justify-start w-[60px] px-4 py-3 {{ Route::currentRouteName() == 'user.coupons' ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }} transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--ticket-percent-outline] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextCoupons">我的優惠</span>
            </a>
        </div>
        
        <!-- 較大間隔 -->
        <div></div>
        
        <!-- 第7個按鈕：登出 -->
        <div class="flex items-center justify-center w-full">
            <button type="button" class="flex items-center justify-start w-[60px] px-4 py-3 text-brandGray-normal hover:text-brandBlue-normal transition-colors duration-200 hover:bg-brandGray-lightLight rounded-lg">
                <div class="flex items-center justify-center w-8 h-8">
                    <i class="icon-[mdi--logout] w-6 h-6 flex-shrink-0"></i>
                </div>
                <span class="ml-3 truncate opacity-0 transition-opacity duration-300 font-medium" id="sidebarTextLogout">登出</span>
            </button>
        </div>
    </div>
</div>

<!-- 黑色半透明背景覆蓋層 (當側邊欄展開時顯示) -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-45 hidden md:hidden transition-opacity duration-300 min-h-[680px]" style="top: 139px;" id="sidebarOverlay"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileSidebar = document.getElementById('mobileSidebar');
        const toggleMobileSidebar = document.getElementById('toggleMobileSidebar');
        const iconRight = document.getElementById('sidebarIconRight');
        const iconLeft = document.getElementById('sidebarIconLeft');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const textElements = document.querySelectorAll('[id^="sidebarText"]');
        
        let isExpanded = false;
        
        // 處理視窗大小變更，確保側邊欄保持最小高度要求
        const handleResize = () => {
            const windowHeight = window.innerHeight;
            const windowWidth = window.innerWidth;
            const requiredHeight = 680 + 139; // 最小高度 + 頂部偏移
            
            if (windowHeight < requiredHeight) {
                // 當視窗高度不足時，固定高度並調整位置
                mobileSidebar.style.position = 'absolute';
                mobileSidebar.style.bottom = 'auto';
                mobileSidebar.style.height = '680px';
                
                if (sidebarOverlay) {
                    sidebarOverlay.style.position = 'absolute';
                    sidebarOverlay.style.bottom = 'auto';
                    sidebarOverlay.style.height = '680px';
                }
                
                // 調整主內容區域的邊距
                const mainContent = document.querySelector('.content-wrapper');
                if (mainContent) {
                    mainContent.style.marginBottom = '20px';
                }
            } else {
                // 視窗高度足夠時，恢復固定定位
                mobileSidebar.style.position = 'fixed';
                mobileSidebar.style.bottom = '0';
                mobileSidebar.style.height = 'auto';
                
                if (sidebarOverlay) {
                    sidebarOverlay.style.position = 'fixed';
                    sidebarOverlay.style.bottom = '0';
                    sidebarOverlay.style.height = 'auto';
                }
            }
            
            // 處理側邊欄展開時的寬度限制
            if (isExpanded) {
                // 在小屏幕上限制側邊欄展開寬度
                if (windowWidth <= 360) {
                    mobileSidebar.style.width = '80%';
                    // 最小屏幕寬度下，確保不會超出範圍
                    if (windowWidth * 0.8 < 180) {
                        mobileSidebar.style.width = '180px';
                    }
                }
            }
        };
        
        // 初始化時調用一次
        handleResize();
        
        // 視窗大小變更時調用
        window.addEventListener('resize', handleResize);
        
        toggleMobileSidebar.addEventListener('click', function() {
            isExpanded = !isExpanded;
            
            if (isExpanded) {
                // 展開側邊欄
                const windowWidth = window.innerWidth;
                
                // 根據屏幕寬度決定側邊欄寬度
                if (windowWidth <= 360) {
                    // 最小屏幕寬度下，確保不會超出範圍
                    if (windowWidth * 0.8 < 180) {
                        mobileSidebar.style.width = '180px';
                    } else {
                        mobileSidebar.style.width = '80%';
                    }
                } else {
                    mobileSidebar.style.width = '80%';
                }
                
                // 切換圖標動畫
                iconRight.style.opacity = '0';
                iconLeft.style.opacity = '1';
                
                sidebarOverlay.classList.remove('hidden');
                sidebarOverlay.style.opacity = '1';
                
                // 顯示文字
                textElements.forEach(element => {
                    element.style.opacity = '1';
                });
                
                // 展開時調整按鈕寬度
                document.querySelectorAll('.w-\\[60px\\]').forEach(btn => {
                    btn.style.width = 'calc(100% - 8px)';
                });
            } else {
                // 收合側邊欄
                mobileSidebar.style.width = '64px';
                
                // 切換圖標動畫
                iconRight.style.opacity = '1';
                iconLeft.style.opacity = '0';
                
                // 先隱藏文字再隱藏覆蓋層
                textElements.forEach(element => {
                    element.style.opacity = '0';
                });
                
                // 收合時恢復按鈕原始寬度
                document.querySelectorAll('.w-\\[60px\\]').forEach(btn => {
                    btn.style.width = '60px';
                });
                
                sidebarOverlay.style.opacity = '0';
                
                // 等待淡出動畫完成後隱藏覆蓋層
                setTimeout(() => {
                    sidebarOverlay.classList.add('hidden');
                }, 300);
            }
        });
        
        // 點擊背景覆蓋層時收合側邊欄
        sidebarOverlay.addEventListener('click', function() {
            isExpanded = false;
            mobileSidebar.style.width = '64px';
            
            // 切換圖標動畫
            iconRight.style.opacity = '1';
            iconLeft.style.opacity = '0';
            
            // 先隱藏文字再隱藏覆蓋層
            textElements.forEach(element => {
                element.style.opacity = '0';
            });
            
            // 收合時恢復按鈕原始寬度
            document.querySelectorAll('.w-\\[60px\\]').forEach(btn => {
                btn.style.width = '60px';
            });
            
            sidebarOverlay.style.opacity = '0';
            
            // 等待淡出動畫完成後隱藏覆蓋層
            setTimeout(() => {
                sidebarOverlay.classList.add('hidden');
            }, 300);
        });
    });
</script> 