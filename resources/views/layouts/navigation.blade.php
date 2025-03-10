<nav class="fixed top-[45px] z-50 w-full bg-white text-brandGray-normal font-lexend font-normal">
    <div class="flex w-full h-[80px] lg:px-[85px] md:px-[60px] px-[20px] py-5 justify-between items-center border-b border-b-normalLight md:border-0 lg:border-b lg:border-b-normalLight">
        <!-- 左側區塊 -->
        <div class="leftArea flex justify-start items-center gap-10">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex justify-center items-center">
                <img src="{{ asset('images/logo-nav1.png') }}" class="h-8 me-[12px]" alt="logo">
                <img src="{{ asset('images/logo-nav2.png') }}" class="h-5" alt="logo">
            </a>
            <div id="prodsBtnPc" class="text-lg hidden lg:block cursor-pointer">商品&nbsp;<span class="plusIconPc">＋</span></div>
            <a href="" class="text-lg hidden lg:block hover:text-brandGray-normalLight active:text-brandGray-lightHover ">關於我們</a>
        </div>
        <!-- 右側區塊 -->
        <div class="rightArea flex justify-end items-center gap-10">
            <!-- 搜尋框 -->
            <div class="hidden md:block">
                <div class="relative flex items-center">
                    <input type="text" placeholder="搜尋商品" class="ps-10 flex w-[254px] h-[30px] px-4 py-3 items-center gap-2 rounded-[20px] border border-[#484848] bg-white">
                    <span class="absolute top-2 left-4 w-[16px] h-[16px] icon-[basil--search-outline]"></span>
                </div>
            </div>

            <!-- icons -->
            <!-- wishList -->
            <div class="flex justify-center items-center gap-[24px] md:gap-10">
                <a href="" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] hover:text-brandGray-normalLight active:text-brandGray-lightHover icon-[mynaui--heart]"></span>
                </a>
                <!-- cart -->
                <a href="{{route('cart')}}" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] hover:text-brandGray-normalLight active:text-brandGray-lightHover icon-[iconoir--cart]"></span>
                </a>
                <!-- account -->
                <a href="" class="flex items-center justify-center">
                    <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] hover:text-brandGray-normalLight active:text-brandGray-lightHover icon-[qlementine-icons--user-16]"></span>
                </a>
                <!-- hamMenu -->
                <div id="hamBtn" class="block md:hidden cursor-pointer">
                    <div class="flex items-center justify-center">
                        <span class="w-[20px] h-[20px] md:w-[25px] md:h-[25px] hover:text-brandGray-normalLight active:text-brandGray-lightHover icon-[cil--hamburger-menu]"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 平板版 變版 -->
    <div id="prodsBtnTablet" class="hidden text-lg md:block lg:hidden h-[50px] px-[60px] border-b border-b-normalLight">
        <span class="me-10 cursor-pointer">商品&nbsp;<span class="plusIcon">＋</span></span>
        <a href="" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">關於我們</a>
    </div>

    <!-- 電腦 下拉式選單 -->
    <div id="dropDownMenuPc" class="z-30 bg-white absolute hidden w-full h-[62px] border-b border-b-normalLight">
        <div class="h-full lg:px-[85px] md:px-[60px] flex justify-start items-center gap-[30px] py-1">
            <a href="{{ route('categories_accessories') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">飾品 Accessories</a>
            <a href="{{ route('categories_clothes') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">服飾 Clothes</a>
            <a href="" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">銀黏土課程 Lessons</a>
        </div>
    </div>

    <div id="dropDownMenuTablet" class="z-30 bg-white absolute hidden w-full h-[62px] border-b border-b-normalLight">
        <div class="h-full lg:px-[85px] md:px-[60px] flex justify-start items-center gap-[30px] py-1">
            <a href="{{ route('categories_accessories') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">飾品 Accessories</a>
            <a href="{{ route('categories_clothes') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">服飾 Clothes</a>
            <a href="" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">銀黏土課程 Lessons</a>
        </div>
    </div>

    <!-- 手機版 下拉式選單 -->
    <div id="dropDownMenuPhone" class="z-30 absolute w-full hidden md:invisible bg-white h-[96px] px-[20px] border-b border-b-normalLight">
        <div class="w-full h-full flex flex-col justify-center items-center py-[12px]">
            <div class="md:hidden w-[350px] h-[30px]  mb-[12px]">
                <div class="relative flex justify-center items-center">
                    <input type="text" placeholder="搜尋商品" class="flex w-[350px] h-[30px] px-4 ps-10 py-3 items-center gap-2 rounded-[20px] border border-[#484848] bg-white">
                    <span class="absolute top-2 left-4 w-[16px] h-[16px] icon-[basil--search-outline]"></span>
                </div>
            </div>
            <div class="cursor-pointer w-[350px h-[30px] flex justify-center gap-[30px]">
                <div id="prodsBtnPhone" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">商品&nbsp;<span class="plusIcon">＋</span></div>
                <a href="" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">關於我們</a>
            </div>
        </div>
    </div>

    <!-- 手機版 下拉選單 子選單-->
    <div id="dropDownMenuPhoneChild" class="z-30 absolute bg-white top-[176px] hidden w-full h-[38px] border-b border-b-normalLight">
        <div class="h-full flex justify-center items-center gap-[30px] py-1">
            <a href="{{ route('categories_accessories') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">飾品</a>
            <a href="{{ route('categories_clothes') }}" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">服飾</a>
            <a href="" class="hover:text-brandGray-normalLight active:text-brandGray-lightHover">銀黏土課程</a>
        </div>
    </div>
</nav>


@push('scripts')
<script>
    $(document).ready(function() {
        let hideTimeout;

        // 下拉選單 電腦
        $('#prodsBtnPc').on('mouseenter', function(event) {
            clearTimeout(hideTimeout); // 防止提前隱藏
            $(this).addClass("hover:text-brandGray-normalLight", "active:text-brandGray-lightHover");
            $(".plusIconPc").html("－");
            $("#dropDownMenuPc").removeClass("hidden");
        });

        $('#dropDownMenuPc').on('mouseenter', function() {
            clearTimeout(hideTimeout);
        });

        $('#prodsBtnPc, #dropDownMenuPc').on('mouseleave', function() {
            hideTimeout = setTimeout(function() {
                $(".plusIconPc").html("＋");
                $("#dropDownMenuPc").addClass("hidden");
            }, 120);
        });

        // 下拉式選單 平板
        $('#prodsBtnTablet').on('click', function(event) {
            event.stopPropagation(); // 防止事件冒泡
            $("#dropDownMenuTablet").toggleClass("hidden"); // 切換 hidden 類別

            // 根據 hidden 狀態來切換加減符號
            if ($("#dropDownMenuTablet").hasClass("hidden")) {
                $(".plusIcon").html("＋");
            } else {
                $(".plusIcon").html("－");
            }
        });

        $('#dropDownMenuTablet, #dropDownMenuPhone, dropDownMenuPhoneChild').on('click', function(event) {
            event.stopPropagation(); // 防止事件冒泡
        });

        // 手機版 漢堡標
        $("#hamBtn").on("click", function(event) {
            event.stopPropagation(); // 防止事件冒泡
            $("#dropDownMenuPhone").toggleClass("hidden");
           if(!($("#dropDownMenuPhoneChild").hasClass("hidden"))){
            $("#dropDownMenuPhoneChild").addClass("hidden");
           }
        });

        $(document).on("click", function() {
            $(".plusIcon").html("＋");
            $("#dropDownMenuTablet").addClass("hidden");
            $("#dropDownMenuPhone").addClass("hidden");
            $("#dropDownMenuPhoneChild").addClass("hidden")
        });

        // 下拉選單 手機版
        $("#prodsBtnPhone").on('click', (event) => {
            event.stopPropagation();
            $("#dropDownMenuPhoneChild").toggleClass("hidden");
            if ($("#dropDownMenuPhoneChild").hasClass("hidden")) {
                $(".plusIcon").html("＋");
            } else {
                $(".plusIcon").html("－");
            }
        })
    });
</script>
@endpush