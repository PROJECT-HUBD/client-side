@extends('layouts.app')

@section('title', 'Product_Details')
@section('meta_description', '商品內頁')
@section('meta_keywords', '首頁, home, homepage')


@section('content')
    <div class="mt-[120px] w-[1440px] mx-auto">
        <x-breadcrumb :items="[
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '飾品'],
        ]" />
    </div>

    <main class=" flex w-[1320px] mx-auto gap-10 max-md:flex-col max-md:items-center max-sm:p-5">
        <section class="flex gap-7 ml-[60px] max-sm:flex-col" aria-label="Product Gallery">
            <div class="flex flex-col gap-5 max-sm:overflow-x-auto max-sm:flex-row">
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <img src="https://img.ltn.com.tw/Upload/auto/page/2016/08/26/160826-6128-3-3jKzt.jpg"
                        alt="Product view 1" class="object-cover rounded-md h-[180px] w-[118px]" loading="lazy" />
                </button>
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e3e0a01a4843017115f6062ad45280acd04f8e3"
                        alt="Product view 2" class="object-cover rounded-md h-[180px] w-[118px]" loading="lazy" />
                </button>
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e50e298efaf580d07fb1d7cca470e03f38af911c"
                        alt="Product view 3" class="object-cover rounded-md h-[180px] w-[118px]" loading="lazy" />
                </button>
            </div>

            <div class="relative w-[454px] max-sm:w-full">
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <div>
                        <img id="mainProductImage"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/6dc01ffd33242c3e120b0f6350dbbb031bd1dddf"
                        alt="Main product view" class="object-cover w-[454px] rounded-md h-[580px]" loading="lazy" />
                </div>
                    </button>
                <button
                    class="prev-btn flex absolute left-6 top-2/4 justify-center items-center w-10 h-10 rounded-full -translate-y-2/4 cursor-pointer bg-white bg-opacity-80"
                    aria-label="Previous image">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 30L15 20L25 10" stroke="black" stroke-width="3.33333" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <button
                    class="next-btn flex absolute right-6 top-2/4 justify-center items-center w-10 h-10 rounded-full -translate-y-2/4 cursor-pointer bg-white bg-opacity-80"
                    aria-label="Next image">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 30L25 20L15 10" stroke="black" stroke-width="3.33333" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>
        <div class="w-[560px] h-[580px] mr-[60px] flex-col justify-start items-start gap-11 inline-flex">
            <div class="self-stretch h-[116px] flex-col justify-start items-start gap-5 flex">
                <div class="self-stretch justify-between items-center inline-flex">
                    <div class="h-[30px] pb-[6.82px] justify-center items-center flex">
                        <div
                            class="w-[502px] h-[23.18px] text-brandGray-normal text-2xl font-light font-['Lexend'] leading-9">
                            Navajo 綠松石十字星戒<br /><br /></div>
                    </div>
                    <button id="likeBtn" class="relative focus:outline-none">
                        <svg id="likeIcon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"
                            class="transition duration-300 ease-in-out text-brandGray-normal fill-none">
                            <path
                                d="M21.25 8.125C22.6307 8.125 23.75 9.24429 23.75 10.625M15 7.12817L15.8563 6.25C18.52 3.51839 22.8386 3.51839 25.5023 6.25C28.0944 8.90825 28.174 13.1923 25.6826 15.9499L18.5246 23.8727C16.623 25.9775 13.3769 25.9775 11.4753 23.8727L4.31741 15.9499C1.82598 13.1923 1.90563 8.90828 4.49775 6.25002C7.1614 3.51841 11.48 3.51841 14.1437 6.25002L15 7.12817Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="w-[428px] opacity-60 text-brandGray-normal text-sm font-light font-['Lexend'] leading-snug">
                    ·Material |
                    925 silver | natural opal size | Metric circumference No.10 (公制圍10號)
                    飾品皆手工製作，誤差值 ±0.5公分皆為正常範圍
                    預購商品出貨約21工作天(不含假日)，建議與現貨商品分開下單*建</div>
            </div>
            <div class="justify-start items-center gap-2.5 inline-flex">
                <div class="text-brandGray-normal text-2xl font-light font-['Lexend'] leading-9">NT$ 5980</div>
                <div class="text-brandGray-normalLight text-lg font-light font-['Lexend'] line-through leading-relaxed">
                    NT$
                    5980</div>
            </div>
            <div class="flex-col justify-start items-start gap-9 flex">
                <div class="w-[257px] h-[50px] relative">
                    <div
                        class="w-[55px] left-0 top-[5px] absolute text-center text-brandGray-normal text-2xl font-light font-['Lexend'] leading-9">
                        顏色:</div>
                    <div data-svg-wrapper class="left-[73px] top-0 absolute">
                        <svg width="183" height="52" viewBox="0 0 183 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" stroke="#484848" />
                            <path class="cursor-pointer"
                                d="M26.0013 46.8333C37.5072 46.8333 46.8346 37.5059 46.8346 26C46.8346 14.494 37.5072 5.16663 26.0013 5.16663C14.4954 5.16663 5.16797 14.494 5.16797 26C5.16797 37.5059 14.4954 46.8333 26.0013 46.8333Z"
                                fill="#484848" />
                            <path class="cursor-pointer"
                                d="M92.0013 46.8333C103.507 46.8333 112.835 37.5059 112.835 26C112.835 14.494 103.507 5.16663 92.0013 5.16663C80.4954 5.16663 71.168 14.494 71.168 26C71.168 37.5059 80.4954 46.8333 92.0013 46.8333Z"
                                fill="#C6C6C6" />
                            <path class="cursor-pointer"
                                d="M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z"
                                fill="#F7F7F7" />
                            <path
                                d="M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z"
                                stroke="#C6C6C6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                </div>
                <div class="justify-start items-center gap-[18px] inline-flex">
                    <div class="w-[55px] text-center text-brandGray-normal text-2xl font-light font-['Lexend'] leading-9">
                        尺寸:
                    </div>
                    <div class="size-option w-[50px] h-[50px] py-[15px] bg-brandBlue-normal rounded-[5px] 
                            border border-brandBlue-normal flex-col justify-center items-center gap-2.5 
                            inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-white text-2xl font-light font-['Lexend'] leading-9">L</div>
                    </div>
                    <div class="size-option w-[50px] h-[50px] py-[15px] rounded-[5px] border border-brandBlue-normal 
                            flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-brandBlue-normal text-2xl font-light font-['Lexend'] leading-9">M</div>
                    </div>
                    <div class="size-option w-[50px] h-[50px] py-[15px] rounded-[5px] border border-brandBlue-normal 
                            flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-brandBlue-normal text-2xl font-light font-['Lexend'] leading-9">S</div>
                    </div>
                </div>
            </div>
            <div class="w-[330px] justify-start items-center gap-4 inline-flex">
                <div class="justify-start items-center flex">
                    <div id="decrese"
                        class="w-[58px] p-2.5 rounded-tl rounded-bl border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex cursor-pointer">
                        <div 
                            class="self-stretch text-center text-brandGray-normal text-[25.02px] font-medium font-['Poppins'] capitalize">
                            -</div>
                    </div>
                    <div
                        class="w-[100px] p-2.5 border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex">
                        <div id="quantity"
                            class="self-stretch text-center text-brandGray-normalLight text-2xl font-light font-['Lexend'] leading-9">
                            01</div>
                    </div>
                    <div id="add"
                        class="w-[58px] p-2.5 rounded-tr rounded-br border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex cursor-pointer">
                        <div
                            class="self-stretch text-center text-brandGray-normal text-[25.02px] font-medium font-['Poppins'] capitalize">
                            +</div>
                    </div>
                </div>
                <div class="text-brandGray-normalLight text-lg font-light font-['Lexend'] leading-relaxed">庫存剩12件</div>
            </div>
            <div class="w-[558px] justify-start items-start gap-4 inline-flex">
                <div
                    class="grow shrink basis-0 h-[58px] px-10 py-[15px] bg-brandBlue-normal rounded-[5px] flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                    <div class="text-center text-white text-2xl font-light font-['Lexend'] leading-9">加入購物車</div>
                </div>
                <div
                    class="grow shrink basis-0 h-[58px] px-10 py-[15px] bg-brandRed-normal rounded-[5px] flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                    <div class="text-center text-white text-2xl font-light font-['Lexend'] leading-9">直接購買</div>
                </div>
            </div>
        </div>
    </main>

    <div class="h-[546px] w-[1320px] mx-[60px] flex-col justify-start items-center gap-5 inline-flex mt-[100px]">
        <div class="h-[54px] border-b border-brandGray-lightHover justify-center items-start gap-10 inline-flex">
            <div id="info"
                class="px-4 py-3  shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)] justify-start items-start gap-2 flex cursor-pointer">
                <div id="info-text" class="text-brandRed-normal text-xl font-light font-['Lexend'] leading-[30px]">產品須知</div>
            </div>
            <div id="show-img"
                class="px-4 py-3  justify-start items-start gap-2 flex cursor-pointer">
                <div id="show-img-text" class="text-brandGray-normal text-xl font-light font-['Lexend'] leading-[30px]">產品展示圖</div>
            </div>
        </div>
        <div id="show-img-content" class="w-full hidden ">

            <figure class="w-full">
                <img src="https://cdn.builder.io/api/v1/image/assets/8ad7720499ce402bb027d5c022d68e6a/19296174b86e2348272ac21c3a2cb10d896bde1f8671c066e3270eb65fdd7fc5?placeholderIfAbsent=true"
                    alt="Image description" class="object-contain w-full aspect-[1.5]" />
            </figure>
        </div>
        <div id="info-content" class="self-stretch  px-[180px] pt-10 pb-[60px] bg-brandGray-light flex-col justify-start items-start flex ">

            <div class="w-[928px] h-[93px] relative  overflow-hidden">
                <div
                    class="w-[39px] h-[21px] px-[3px] py-px left-[10px] top-[9px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center inline-flex overflow-hidden ">
                    <div class="w-[33px] h-[19px] text-center text-white text-sm font-light font-['Lexend'] leading-snug">
                        材質
                    </div>
                </div>
                <div
                    class="w-[697px] pt-[7px] pb-0.5 left-[13px] top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="w-[697px] text-brandGray-normal text-sm font-light font-['Lexend'] leading-snug">
                        純銀92.5%
                        (925
                        silver)、天然綠松石(natural turquoise)</div>
                </div>
                <div class="w-[915px] h-[0px] left-[13px] top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="w-[928px] h-[93px] relative  overflow-hidden">
                <div
                    class="w-[39px] h-[21px] px-[3px] py-px left-[13px] top-[7px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center inline-flex overflow-hidden">
                    <div class="w-[33px] h-[19px] text-center text-white text-sm font-light font-['Lexend'] leading-snug">
                        規格<br /></div>
                </div>
                <div
                    class="w-[697px] pt-[7px] pb-0.5 left-[13px] top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="w-[697px] text-brandGray-normal text-sm font-light font-['Lexend'] leading-snug">
                        公制圍10號
                        (Metric
                        circumference No.10 )</div>
                </div>
                <div class="w-[915px] h-[0px] left-[13px] top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="w-[928px] h-[93px] relative  overflow-hidden">
                <div
                    class="left-[16px] top-[8px] absolute bg-brandGray-normal rounded-[5px] flex-col justify-start items-start gap-2.5 inline-flex overflow-hidden">
                    <div class="text-center text-white text-sm font-light font-['Lexend'] leading-snug">出貨說明</div>
                </div>
                <div
                    class="w-[697px] pt-[7px] pb-0.5 left-[13px] top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="w-[697px] text-brandGray-normal text-sm font-light font-['Lexend'] leading-snug">
                        預購商品出貨約21工作天(不含假日)，建議與現貨商品分開下單</div>
                </div>
                <div class="w-[915px] h-[0px] left-[13px] top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="w-[928px] h-[93px] relative  overflow-hidden">
                <div
                    class="px-[3px] py-px left-[13px] top-[7px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center gap-2.5 inline-flex overflow-hidden">
                    <div class="text-center text-white text-sm font-light font-['Lexend'] leading-snug">其他補充</div>
                </div>
                <div
                    class="w-[697px] pt-[7px] pb-0.5 left-[13px] top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="w-[697px] text-brandGray-normal text-sm font-light font-['Lexend'] leading-snug">
                        飾品皆手工製作，誤差值
                        ±0.5公分皆為正常範圍</div>
                </div>
                <div class="w-[915px] h-[0px] left-[13px] top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
    <script>
        $(document).ready(function () {
            // 點擊我的最愛Icon，切換成紅色
            $("#likeBtn").click(function () {
                $("#likeIcon").toggleClass("text-brandRed-normal fill-brandRed-normal  fill-none")
            })

            let images = $("button img").map(function () {
                return $(this).attr("src"); // 取得所有縮圖的 src
            }).get(); // 轉換為純陣列
            let currentIndex = 0; // 記錄當前圖片索引

            // 點擊縮圖，切換主圖片
            $("button>img").click(function () {
                let newSrc = $(this).attr("src"); // 取得點擊的圖片 src
                $("#mainProductImage").fadeOut(150, function () {
                    $(this).attr("src", newSrc).fadeIn(150);
                });

                currentIndex = images.indexOf(newSrc); // 更新當前索引
            });

            //  點擊「上一張」按鈕
            $(".prev-btn").click(function () {
                currentIndex = (currentIndex - 1 + images.length) % images.length; // 循環切換
                $("#mainProductImage").fadeOut(150, function () {
                    $(this).attr("src", images[currentIndex]).fadeIn(150);
                });
            });

            //  點擊「下一張」按鈕
            $(".next-btn").click(function () {
                currentIndex = (currentIndex + 1) % images.length; // 循環切換
                $("#mainProductImage").fadeOut(150, function () {
                    $(this).attr("src", images[currentIndex]).fadeIn(150);
                });
            })

            // 監聽點擊顏色按鈕
            $("[data-svg-wrapper] path").click(function () {
                // 移除所有現有的外框
                $("[data-svg-wrapper] rect").remove();

                // 取得當前選中的顏色的 `path`
                let selectedPath = $(this);
                let parentSvg = selectedPath.closest("svg");

                // 取得 `path` 的位置資訊
                let bbox = this.getBBox(); // 確保獲取正確的大小和位置

                // 創建新的外框 `rect`
                let newRect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
                newRect.setAttribute("x", bbox.x - 3);  // 調整 x 位置
                newRect.setAttribute("y", bbox.y - 3);  // 調整 y 位置
                newRect.setAttribute("width", bbox.width + 6); // 讓外框稍微大一點
                newRect.setAttribute("height", bbox.height + 6);
                newRect.setAttribute("rx", "25.5");  // 保持圓角
                newRect.setAttribute("stroke", "#484848"); // 設定外框顏色

                newRect.setAttribute("fill", "none"); // 不填充，只顯示外框

                // **將 `rect` 添加到 `SVG` 內**
                parentSvg[0].insertBefore(newRect, parentSvg[0].firstChild);

                // **取得當前點擊的顏色**
                let selectedColor = $(this).attr("fill");

                
            });

            // 監聽尺寸按鈕點擊事件
            $(".size-option").click(function () {
                // 移除所有尺寸按鈕的背景與字體顏色
                $(".size-option").removeClass("bg-brandBlue-normal ")
                    .addClass("border border-brandBlue-normal");
                $(".size-option div").removeClass("text-white").addClass("text-brandBlue-normal");

                //  為當前點擊的按鈕添加選中狀態
                $(this).addClass("bg-brandBlue-normal ")
                    .removeClass("border border-brandBlue-normal");
                $(this).children("div").addClass("text-white").removeClass("text-brandBlue-normal");

                //  取得選中的尺寸
                let selectedSize = $(this).text().trim();
                console.log("選中的尺寸:", selectedSize);
            });

            let quantity = 0
            // 監聽減少數量按鈕點擊
            $("#decrese").click(function (){
                if(quantity > 1){
                    quantity--;
                    $("#quantity").text(quantity.toString().padStart(2,'0'));
                }
            })
            // 監聽增加數量按鈕點擊
            $("#add").click(function (){
                
                    quantity++;
                    $("#quantity").text(quantity.toString().padStart(2,'0'));
                
            })
            
            // 監聽產品需知按鈕點擊
            $("#info").click(function(){
                $("#show-img-content").addClass("hidden");
                $("#info-content").removeClass("hidden")
                $("#info-text").addClass("text-brandRed-normal")
                $("#show-img-text").removeClass("text-brandRed-normal")
                $(this).addClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
                $("#show-img").removeClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
            })

            // 監聽產品展示圖按鈕點擊
            $("#show-img").click(function(){
                $("#info-content").addClass("hidden");
                $("#show-img-content").removeClass("hidden")
                $("#info-text").removeClass("text-brandRed-normal")
                $("#show-img-text").addClass("text-brandRed-normal")
                $(this).addClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
                $("#info").removeClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
            })
        })
    </script>

@endpush