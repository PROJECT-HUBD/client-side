@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', '首頁')
@section('meta_keywords', '首頁, home')


@section('content')
<section class="mt-[200px] w-full">
    <!-- banner 輪播圖 -->
    <section class="w-full h-[415px] md:h-[440px] lg:h-[736px] overflow-hidden border-b-2 shadow-[0_15px_0_0_brandGray-normalLight] flex flex-col mb-[60px]">
        <div class="relative w-full h-[325px]  md:h-[350px] lg:h-[600px] overflow-hidden flex justify-center items-start gap-5">
            <!-- 左側圖片 -->
            <div class="banner1 relative w-[390px] md:w-[420px] lg:w-[720px] h-full flex-shrink-0">
                <img src="{{ asset('images/home_test1.JPG') }}" alt="輪播圖" class="w-full h-full  min-w-[390px] md:min-w-full md:max-h-full max-h-[325px] object-cover">
                <div class="bannerMask1 hidden lg:visible invisible absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask1 hidden lg:visible invisible absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start lg:px-[60px] md:px-[20px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="lg:text-[26px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p class="lg:text-[18px] break-words text-wrap px-4">不受型態拘束！獨一無二！比百變怪還百變的課程來了，快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="md:w-[40px] lg:w-[50px] md:h-[40px] lg:h-[50px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold lg:text-[18px]">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- 中間圖片 -->
            <div class="banner2 relative w-[390px] md:w-[420px] lg:w-[720px] h-full flex-shrink-0">
                <img src="{{ asset('images/home_test2.JPG') }}" alt="輪播圖" class="w-full h-full min-w-[390px] md:min-w-full max-h-[325px] md:max-h-full object-cover">
                <div class="bannerMask2 hidden lg:visible invisible absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask2 hidden lg:visible invisible absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start px-[60px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="lg:text-[26px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p class="lg:text-[18px] break-words text-wrap px-4">不受型態拘束！獨一無二！比百變怪還百變的課程來了，快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="md:w-[40px] lg:w-[50px] md:h-[40px] lg:h-[50px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold lg:text-[18px]">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- 右側圖片 -->
            <div class="banner3 relative w-[390px] md:w-[420px] lg:w-[720px] h-full flex-shrink-0">
                <img src="{{ asset('images/home_test3.JPG') }}" alt="輪播圖" class="w-full h-full min-w-[390px] md:min-w-full max-h-[325px] md:max-h-full  object-cover">
                <div class="bannerMask3 hidden lg:visible invisible absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask3 hidden lg:visible invisible absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start px-[60px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="lg:text-[26px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p class="lg:text-[18px] break-words text-wrap px-4">不受型態拘束！獨一無二！比百變怪還百變的課程來了，快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="lg:w-[50px] lg:h-[50px] md:w-[40px] md:h-[40px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold lg:text-[18px]">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- progress + btn -->
        <div class="w-full h-[90px] lg:h-[136px] flex justify-center items-center px-[60px] md:px-[100px]">
            <div class="w-[50%] h-[50px] flex justify-start items-center hidden md:block">
                <div class="w-full h-full flex justify-start items-center">
                    <div class="progresBar1 w-[120px] h-[1px] bg-brandRed-normal"></div>
                    <div class="progresBar1 w-[12px] h-[12px] bg-brandRed-normal rounded-full"></div>
                    <div class="progresBar2 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                    <div class="progresBar2 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                    <div class="progresBar3 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                    <div class="progresBar3 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                </div>
            </div>
            <div class="w-full md:w-[50%] h-[50px] flex justify-end items-center">
                <div class="w-full h-full flex justify-end items-center gap-3">
                    <button type="button" class="preBtn w-[50px] h-[50px] border-2 rounded-full border-brandGray-normalLight flex justify-center items-center"><span class="w-5 h-5 text-brandGray-normalLight icon-[ep--arrow-left-bold]"></span></button>
                    <button type="button" class="nextBtn w-[50px] h-[50px] border-2 rounded-full border-brandRed-normal flex justify-center items-center"><span class="w-5 h-5 text-brandRed-normal icon-[ep--arrow-right-bold]"></span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 主打商品 -->


    <!-- 分類卡片區 -->


    <!-- solgan -->


    <!-- banner 2 -->


    <!-- 商品卡片區 飾品 -->


    <!-- 商品卡片區 服飾 -->

</section>
@endsection

@push('scripts')
<script>
    $(document).ready(() => {
        // banner hover 效果
        $('.banner1, .banner2, .banner3').on('mouseenter mouseleave', function(event) {
            $(this).find('[class^="bannerMask"]').toggleClass('hidden', event.type === 'mouseleave');
        });

        // 點擊按鈕 輪播 banner
        function moveNext() {
            let banners = $(".banner1, .banner2, .banner3");
            banners.first().appendTo(banners.parent());
        }

        function movePrev() {
            let banners = $(".banner1, .banner2, .banner3");
            banners.last().prependTo(banners.parent());
        }

        $(".nextBtn").on("click", moveNext);
        $(".preBtn").on("click", movePrev);


        //主打商品區 轉動輪盤
        let progressIndex = 1; // 進度條初始狀態

        function updateProgressBar() {
            // 重置所有進度條顏色
            $(".progresBar1, .progresBar2, .progresBar3").removeClass("bg-brandRed-normal bg-brandGray-normalLight");

            // 設定對應的進度條顏色
            if (progressIndex === 1) {
                $(".progresBar1").addClass("bg-brandRed-normal");
                $(".progresBar2, .progresBar3").addClass("bg-brandGray-normalLight");
            } else if (progressIndex === 2) {
                $(".progresBar1, .progresBar2").addClass("bg-brandRed-normal");
                $(".progresBar3").addClass("bg-brandGray-normalLight");
            } else if (progressIndex === 3) {
                $(".progresBar1, .progresBar2, .progresBar3").addClass("bg-brandRed-normal");
            }
        }

        // 點擊下一步按鈕
        $(".nextBtn").on("click", () => {
            progressIndex = progressIndex === 3 ? 1 : progressIndex + 1; // 1 → 2 → 3 → 1 循環
            updateProgressBar();
        });

        // 點擊上一步按鈕
        $(".preBtn").on("click", () => {
            progressIndex = progressIndex === 1 ? 3 : progressIndex - 1; // 1 ← 3 ← 2 ← 1 循環
            updateProgressBar();
        });

        updateProgressBar(); // 初始化進度條狀態
    });


    // 主打商品 轉盤滾動
    let rouletteOrder = [1, 2, 3, 4, 5, 6]; // 轉盤順序
    let totalRoulette = rouletteOrder.length; // 6 個轉盤

    function updateRoulette(clickedIndex) {
        // 計算新的順序
        let newOrder = [...rouletteOrder]; // 複製陣列
        let targetIndex = newOrder.indexOf(clickedIndex); // 找到被點擊的索引
        let rotatedOrder = newOrder.slice(targetIndex).concat(newOrder.slice(0, targetIndex)); // 旋轉陣列

        // 依序調整每個 roulette 的 class
        rotatedOrder.forEach((num, index) => {
            let currentRoulette = $(`.roulette${num}`);
            let nextPosition = `.roulette${rouletteOrder[index]}`; // 新的位置
            let nextBorder = index === 0 ? "border-brandRed-normal" : "border-brandRed-light"; // 目標 roulette

            // 動畫移動
            currentRoulette.animate({
                top: $(nextPosition).css("top"),
                left: $(nextPosition).css("left"),
            }, 300, function() {
                // 調整邊框
                currentRoulette.removeClass("border-brandRed-normal border-brandRed-light").addClass(nextBorder);

                // **如果是 `rouletteTarget`，更新 `.targetImg`**
                if (index === 0) {
                    let newTargetImg = currentRoulette.find("img").attr("src");
                    $(".targetImg").attr("src", newTargetImg);
                }
            });
        });

        // 更新順序
        rouletteOrder = rotatedOrder;
    }

    // 綁定點擊事件
    $(".roulette1, .roulette2, .roulette3, .roulette4, .roulette5, .roulette6").on("click", function() {
        let clickedNumber = parseInt($(this).attr("class").match(/roulette(\d)/)[1]); // 取得點擊的 roulette 編號
        if (clickedNumber !== rouletteOrder[0]) { // 避免點擊目標位置的 roulette
            updateRoulette(clickedNumber);
        }
    });
</script>
@endpush