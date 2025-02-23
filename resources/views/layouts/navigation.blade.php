<nav class="text-brandGray-normal font-lexend font-normal flex w-full h-[94px] px-[85px] py-5 justify-between items-center border-b border-b-normalLight bg-white">
    <div class="leftArea flex justify-start items-center gap-10">
        <!-- Logo -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="h-10" alt="">
        </a>
        <a href="">商品＋</a>
        <a href="">關於我們</a>
        <a href="{{ route('test1') }}">測試頁</a>
    </div>


    <div class="rightArea flex justify-end items-center gap-10">
        <!-- 搜尋框 -->
        <div class="relative flex items-center">
            <input type="text" class="flex w-[254px] h-[30px] px-4 py-3 items-center gap-2 rounded-[20px] border border-[#484848] bg-white">
            <span class="absolute left-5 w-[16px] h-[16px] icon-[basil--search-outline]"></span>
        </div>

        <!-- icons -->
        <div class="flex justify-center items-center gap-10">
            <a href="" class="flex items-center justify-center w-[25px] h-[25px]">
                <span class="w-[25px] h-[25px] icon-[mynaui--heart]"></span>
            </a>
            <a href="" class="flex items-center justify-center w-[25px] h-[25px]">
                <span class="w-[25px] h-[25px] icon-[iconoir--cart]"></span>
            </a>
            <a href="" class="flex items-center justify-center w-[25px] h-[25px]">
                <span class="w-[25px] h-[25px] icon-[qlementine-icons--user-16]"></span>
            </a>
        </div>
    </div>
</nav>