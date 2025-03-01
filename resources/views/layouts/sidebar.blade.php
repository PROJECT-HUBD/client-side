<div class="w-full p-6 bg-[#e6e6e9] rounded-lg">
    <!-- Logo 部分 -->
    <div class="flex items-center gap-3 mb-6">
        <div class="relative">
            <img src="{{ asset('images/logo.jpg') }}" alt="HUBD Logo" class="w-16 h-16 rounded-full">
        </div>
        <div class="text-[#252b42] text-2xl font-normal font-['PoetsenOne']">HUBD</div>
    </div>
    
    <!-- 側邊欄選單 -->
    <div class="flex flex-col gap-2">
        <!-- 個人檔案 -->
        <a href="{{ route('user.user_profile') }}" class="flex items-center gap-4 px-4 py-3 rounded-tr-lg rounded-br-lg {{ request()->routeIs('user.user_profile') ? 'bg-[#f6f6f6]' : '' }}">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.user_profile') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <i class="icon-[mdi--account-outline] w-6 h-6 {{ request()->routeIs('user.user_profile') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            <span class="text-{{ request()->routeIs('user.user_profile') ? '[#626880]' : '[#484848]' }} {{ request()->routeIs('user.user_profile') ? 'font-semibold' : 'font-light' }}">個人檔案</span>
        </a>

        <!-- 我的訂單 -->
        <a href="{{ route('user.orders') }}" class="flex items-center gap-4 px-4 py-3 rounded-tr-lg rounded-br-lg {{ request()->routeIs('user.orders') ? 'bg-[#f6f6f6]' : '' }}">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.orders') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <i class="icon-[mdi--file-document-outline] w-6 h-6 {{ request()->routeIs('user.orders') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            <span class="text-{{ request()->routeIs('user.orders') ? '[#626880]' : '[#484848]' }} {{ request()->routeIs('user.orders') ? 'font-semibold' : 'font-light' }}">我的訂單</span>
        </a>

        <!-- 收件地址 -->
        <a href="{{ route('user.address') }}" class="flex items-center gap-4 px-4 py-3 rounded-tr-lg rounded-br-lg {{ request()->routeIs('user.address') ? 'bg-[#f6f6f6]' : '' }}">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.address') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <i class="icon-[mdi--map-marker-outline] w-6 h-6 {{ request()->routeIs('user.address') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            <span class="text-{{ request()->routeIs('user.address') ? '[#626880]' : '[#484848]' }} {{ request()->routeIs('user.address') ? 'font-semibold' : 'font-light' }}">收件地址</span>
        </a>

        <!-- 付款資訊 -->
        <a href="{{ route('user.payment') }}" class="flex items-center gap-4 px-4 py-3 rounded-tr-lg rounded-br-lg {{ request()->routeIs('user.payment') ? 'bg-[#f6f6f6]' : '' }}">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.payment') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <i class="icon-[mdi--credit-card-outline] w-6 h-6 {{ request()->routeIs('user.payment') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            <span class="text-{{ request()->routeIs('user.payment') ? '[#626880]' : '[#484848]' }} {{ request()->routeIs('user.payment') ? 'font-semibold' : 'font-light' }}">付款資訊</span>
        </a>

        <!-- 我的優惠 -->
        <a href="{{ route('user.coupons') }}" class="flex items-center gap-4 px-4 py-3 rounded-tr-lg rounded-br-lg {{ request()->routeIs('user.coupons') ? 'bg-[#f6f6f6]' : '' }}">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.coupons') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <i class="icon-[mdi--ticket-percent-outline] w-6 h-6 {{ request()->routeIs('user.coupons') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            <span class="text-{{ request()->routeIs('user.coupons') ? '[#626880]' : '[#484848]' }} {{ request()->routeIs('user.coupons') ? 'font-semibold' : 'font-light' }}">我的優惠</span>
        </a>
    </div>
</div> 