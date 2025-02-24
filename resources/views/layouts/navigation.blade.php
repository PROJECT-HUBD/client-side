<nav class="text-brandGray-normal font-lexend font-normal min-w-[390px]">
    <div class="flex w-full h-[94px] lg:px-[85px] md:px-[60px] px-[20px] py-5 justify-between items-center border-b border-b-normalLight md:border-0 lg:border-b lg:border-b-normalLight">
        <!-- 左側區塊 -->
        <div class="leftArea flex justify-start items-center gap-10">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex justify-center items-center">
                <img src="{{ asset('images/logo-nav1.png') }}" class="h-8 me-[12px]" alt="">
                <img src="{{ asset('images/logo-nav2.png') }}" class="h-5" alt="">
            </a>
            <div class="prodsBtn hidden lg:block cursor-pointer">商品＋</div>
            <a href="" class="hidden lg:block">關於我們</a>
        </div>
        <!-- 右側區塊 -->
        <div class="rightArea flex justify-end items-center gap-10">
            <!-- 搜尋框 -->
            <div class="hidden md:block">
                <div class="relative flex items-center">
                    <input type="text" class="flex w-[254px] h-[30px] px-4 py-3 items-center gap-2 rounded-[20px] border border-[#484848] bg-white">
                    <span class="absolute left-5 w-[16px] h-[16px] icon-[basil--search-outline]"></span>
                </div>
            </div>

            <!-- icons -->
            <!-- wishList -->
            <div class="flex justify-center items-center gap-[16px] md:gap-10">
                <a href="" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] icon-[mynaui--heart]"></span>
                </a>
                <!-- cart -->
                <a href="" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] icon-[iconoir--cart]"></span>
                </a>
                <!-- account -->
                <a href="" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] icon-[qlementine-icons--user-16]"></span>
                </a>
                <!-- hamMenu -->
                <div id="hamBtn" class="block md:hidden cursor-pointer">
                    <div class="flex items-center justify-center">
                        <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] icon-[cil--hamburger-menu]"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 平板版 變版 -->
    <div class="hidden md:block lg:hidden h-[50px] px-[60px] border-b border-b-normalLight">
        <span class="prodsBtn me-10 cursor-pointer">商品＋</span>
        <a href="">關於我們</a>
    </div>

    <!-- 電腦＋平板版 下拉式選單 -->
    <div id="dropDownMenuPc" class="absolute hidden h-[62px] border-b border-b-normalLight">
        <div class="h-full lg:px-[85px] md:px-[60px] flex justify-start items-center gap-[30px] py-1">
            <a href="">飾品 Accessories</a>
            <a href="">服飾 Clothes</a>
            <a href="">銀黏土課程 Lessons</a>
        </div>
    </div>

    <!-- 手機版 下拉式選單 -->
    <div id="dropDownMenuPhone" class="hidden h-[96px] px-[20px] border-b border-b-normalLight">
        <div class="w-full h-full flex flex-col justify-center items-center py-[12px]">
            <div class="md:hidden w-[350px] h-[30px]  mb-[12px]">
                <div class="relative flex justify-center items-center">
                    <input type="text" class="flex w-[350px] h-[30px] px-4 py-3 items-center gap-2 rounded-[20px] border border-[#484848] bg-white">
                    <span class="absolute top-2 left-4 w-[16px] h-[16px] icon-[basil--search-outline]"></span>
                </div>
            </div>
            <div class="w-[350px] h-[30px] flex justify-center gap-[30px]">
                <a href="">商品＋</a>
                <a href="">關於我們</a>
            </div>
        </div>
    </div>

    <!-- 手機版 下拉選單 子選單-->
    <div id="dropDownMenuPhoneChild" class="hidden h-[38px] border-b border-b-normalLight">
        <div class="h-full flex justify-center items-center gap-[30px] py-1">
            <a href="">飾品</a>
            <a href="">服飾</a>
            <a href="">銀黏土課程</a>
        </div>
    </div>
</nav>


@push('scripts')
<script>
    $(document).ready(function() {
        let hideTimeout;

        // 下拉式選單 顯示／隱藏
        $('.prodsBtn').on('mouseenter', function() {
            clearTimeout(hideTimeout); // 防止提前隱藏
            $("#dropDownMenuPc").removeClass("hidden");
        });

        $('#dropDownMenuPc').on('mouseenter', function() {
            clearTimeout(hideTimeout);
        });

        $('.prodsBtn, #dropDownMenuPc').on('mouseleave', function() {
            hideTimeout = setTimeout(function() {
                $("#dropDownMenuPc").addClass("hidden");
            }, 100);
        });

        // 點擊漢堡標 出現選單
        $("#hamBtn").on("click", function(event) {
            event.stopPropagation(); // 防止事件冒泡
            $("#dropDownMenuPhone").toggleClass("hidden");
        });

        $("#dropDownMenuPhone").on("click", function(event) {
            event.stopPropagation();
        });

        $(document).on("click", function() {
            $("#dropDownMenuPhone").addClass("hidden");
        });

        let hideTimeoutPhone;

        $("#dropDownMenuPhone").on('mouseenter', () => {
            clearTimeout(hideTimeoutPhone);
            $("#dropDownMenuPhoneChild").removeClass("hidden")
        })

        $("#dropDownMenuPhoneChild").on('mouseenter', () => {
            clearTimeout(hideTimeoutPhone);
        })

        $("#dropDownMenuPhone, #dropDownMenuPhoneChild").on('mouseleave', () => {
            hideTimeoutPhone = setTimeout(() => {
                $("#dropDownMenuPhoneChild").addClass("hidden")
            }, 100);
        })
    });
</script>
@endpush