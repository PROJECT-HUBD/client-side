<div class="w-[280px] h-[921px] p-[30px] bg-[#e6e6e9] rounded-[20px] flex-col justify-start items-start gap-6 inline-flex">
    <!-- Logo 部分 -->
    <div class="justify-start items-center gap-[13px] inline-flex">
        <div data-svg-wrapper class="relative">
            <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="68" height="68" rx="34" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="scale(0.000296296)" />
                    </pattern>
                    <image id="image0" width="3375" height="3375" preserveAspectRatio="none"
                        xlink:href="{{ asset('images/logo.jpg') }}" />
                </defs>
            </svg>
        </div>
        <div class="text-[#252b42] text-4xl font-normal font-['PoetsenOne'] leading-9">HUBD</div>
    </div>
    
    <!-- 側邊欄選單 - 固定選項 -->
    <div class="flex-col justify-start items-start gap-2.5 flex">
        <!-- 個人檔案 -->
        <a href="{{ route('user.user_profile') }}" class="w-[220px] h-[50px] {{ request()->routeIs('user.user_profile') ? 'bg-[#f6f6f6]' : '' }} rounded-tl-sm rounded-tr-[10px] rounded-bl-sm rounded-br-[10px] justify-start items-center gap-4 inline-flex">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.user_profile') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <div class="relative w-6 h-6 flex items-center justify-center">
                <i class="icon-[mdi--account-outline] w-6 h-6 {{ request()->routeIs('user.user_profile') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            </div>
            <div class="w-[151px] text-{{ request()->routeIs('user.user_profile') ? '[#626880]' : '[#484848]' }} text-base {{ request()->routeIs('user.user_profile') ? 'font-semibold' : 'font-light' }} font-['Lexend'] leading-normal">個人檔案</div>
        </a>

        <!-- 我的訂單 -->
        <a href="{{ route('user.orders') }}" class="w-[220px] h-[50px] {{ request()->routeIs('user.orders') ? 'bg-[#f6f6f6]' : '' }} rounded-tl-sm rounded-tr-[10px] rounded-bl-sm rounded-br-[10px] justify-start items-center gap-4 inline-flex">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.orders') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <div class="relative w-6 h-6 flex items-center justify-center">
                <i class="icon-[mdi--file-document-outline] w-6 h-6 {{ request()->routeIs('user.orders') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            </div>
            <div class="w-[151px] text-{{ request()->routeIs('user.orders') ? '[#626880]' : '[#484848]' }} text-base {{ request()->routeIs('user.orders') ? 'font-semibold' : 'font-light' }} font-['Lexend'] leading-normal">我的訂單</div>
        </a>

        <!-- 收件地址 -->
        <a href="{{ route('user.address') }}" class="w-[220px] h-[50px] {{ request()->routeIs('user.address') ? 'bg-[#f6f6f6]' : '' }} rounded-tl-sm rounded-tr-[10px] rounded-bl-sm rounded-br-[10px] justify-start items-center gap-4 inline-flex">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.address') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <div class="relative w-6 h-6 flex items-center justify-center">
                <i class="icon-[mdi--map-marker-outline] w-6 h-6 {{ request()->routeIs('user.address') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            </div>
            <div class="w-[151px] text-{{ request()->routeIs('user.address') ? '[#626880]' : '[#484848]' }} text-base {{ request()->routeIs('user.address') ? 'font-semibold' : 'font-light' }} font-['Lexend'] leading-normal">收件地址</div>
        </a>

        <!-- 付款資訊 -->
        <a href="{{ route('user.payment') }}" class="w-[220px] h-[50px] {{ request()->routeIs('user.payment') ? 'bg-[#f6f6f6]' : '' }} rounded-tl-sm rounded-tr-[10px] rounded-bl-sm rounded-br-[10px] justify-start items-center gap-4 inline-flex">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.payment') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <div class="relative w-6 h-6 flex items-center justify-center">
                <i class="icon-[mdi--credit-card-outline] w-6 h-6 {{ request()->routeIs('user.payment') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            </div>
            <div class="w-[151px] text-{{ request()->routeIs('user.payment') ? '[#626880]' : '[#484848]' }} text-base {{ request()->routeIs('user.payment') ? 'font-semibold' : 'font-light' }} font-['Lexend'] leading-normal">付款資訊</div>
        </a>

        <!-- 我的優惠 -->
        <a href="{{ route('user.coupons') }}" class="w-[220px] h-[50px] {{ request()->routeIs('user.coupons') ? 'bg-[#f6f6f6]' : '' }} rounded-tl-sm rounded-tr-[10px] rounded-bl-sm rounded-br-[10px] justify-start items-center gap-4 inline-flex">
            <div class="w-[3px] h-[50px] {{ request()->routeIs('user.coupons') ? 'bg-[#626880]' : 'opacity-0 bg-[#484848]' }} rounded-[10px]"></div>
            <div class="relative w-6 h-6 flex items-center justify-center">
                <i class="icon-[mdi--ticket-percent-outline] w-6 h-6 {{ request()->routeIs('user.coupons') ? 'text-[#626981]' : 'text-[#484848]' }}"></i>
            </div>
            <div class="w-[151px] text-{{ request()->routeIs('user.coupons') ? '[#626880]' : '[#484848]' }} text-base {{ request()->routeIs('user.coupons') ? 'font-semibold' : 'font-light' }} font-['Lexend'] leading-normal">我的優惠</div>
        </a>
    </div>
</div> 