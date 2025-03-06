<div class="w-full md:w-64 bg-white border-r border-brandGray-light flex-shrink-0 hidden md:block">
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
        <button type="button" class="w-full flex items-center justify-center px-3 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
            <i class="icon-[mdi--logout] w-5 h-5 mr-2 flex-shrink-0"></i>
            <span class="truncate">登出</span>
        </button>
    </div>
</div>

<!-- 行動版選單按鈕 -->
<div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-brandGray-light z-10">
    <div class="grid grid-cols-4 w-full">
        <a href="/user/user_profile" class="flex flex-col items-center justify-center py-2 {{ request()->is('user/user_profile') ? 'text-brandBlue-normal' : 'text-brandGray-normal' }}">
            <i class="icon-[mdi--account-circle-outline] w-6 h-6"></i>
            <span class="text-xs mt-1 text-center">個人檔案</span>
        </a>
        <a href="/user/orders" class="flex flex-col items-center justify-center py-2 {{ request()->is('user/orders') ? 'text-brandBlue-normal' : 'text-brandGray-normal' }}">
            <i class="icon-[mdi--package-variant-closed] w-6 h-6"></i>
            <span class="text-xs mt-1 text-center">訂單</span>
        </a>
        <a href="/user/address" class="flex flex-col items-center justify-center py-2 {{ request()->is('user/address') ? 'text-brandBlue-normal' : 'text-brandGray-normal' }}">
            <i class="icon-[mdi--map-marker-outline] w-6 h-6"></i>
            <span class="text-xs mt-1 text-center">地址</span>
        </a>
        <a href="#" class="flex flex-col items-center justify-center py-2 text-brandGray-normal" id="mobileMenuToggle">
            <i class="icon-[mdi--menu] w-6 h-6"></i>
            <span class="text-xs mt-1 text-center">更多</span>
        </a>
    </div>
</div>

<!-- 行動版展開選單 (預設隱藏) -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden" id="mobileMenuOverlay">
    <div class="absolute right-0 top-0 bottom-0 w-64 bg-white p-4 overflow-y-auto">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-medium text-brandGray-normal">選單</h3>
            <button type="button" class="text-brandGray-normal" id="mobileMenuClose">
                <i class="icon-[mdi--close] w-6 h-6"></i>
            </button>
        </div>
        
        <!-- 行動版選單內容 -->
        <nav class="space-y-4">
            <div>
                <p class="text-xs font-medium text-brandGray-normalLight uppercase tracking-wider mb-2">會員中心</p>
                <div class="space-y-2 ml-2">
                    <a href="/user/user_profile" class="block text-sm {{ request()->is('user/user_profile') ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }}">個人檔案</a>
                    <a href="/user/orders" class="block text-sm {{ request()->is('user/orders') ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }}">我的訂單</a>
                </div>
            </div>
            
            <div>
                <p class="text-xs font-medium text-brandGray-normalLight uppercase tracking-wider mb-2">設定</p>
                <div class="space-y-2 ml-2">
                    <a href="/user/address" class="block text-sm {{ request()->is('user/address') ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }}">收件地址</a>
                    <a href="/user/payment" class="block text-sm {{ request()->is('user/payment') ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }}">付款資訊</a>
                    <a href="/user/coupons" class="block text-sm {{ request()->is('user/coupons') ? 'text-brandBlue-normal' : 'text-brandGray-normal hover:text-brandBlue-normal' }}">我的優惠</a>
                </div>
            </div>
            
            <div class="pt-4 mt-4 border-t border-brandGray-light">
                <button type="button" class="w-full flex items-center justify-center px-4 py-2 border border-brandGray-lightActive rounded-md text-brandGray-normal hover:bg-brandGray-light">
                    <i class="icon-[mdi--logout] w-5 h-5 mr-2"></i>
                    登出
                </button>
            </div>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenuOverlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });
        
        mobileMenuClose.addEventListener('click', function() {
            mobileMenuOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
        
        mobileMenuOverlay.addEventListener('click', function(e) {
            if (e.target === mobileMenuOverlay) {
                mobileMenuOverlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    });
</script> 