@extends('layouts.app')

@section('title', 'Product_Details')
@section('meta_description', '商品內頁')
@section('meta_keywords', '首頁, home, homepage')


@section('content')
    <div class="lg:mt-[120px] lg:w-[1440px] mx-auto  md:mt-[189px] md:w-[960px]  ">
        <x-breadcrumb :items="[
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '首頁', 'url' => route('home')],
            ['name' => '飾品'],
        ]" />
    </div>

    <main class=" md:flex mx-auto lg:w-[1320px] lg:h-[580px]  lg:px-[60px] lg:gap-10 md:gap-5 md:w-[720px] md:h-[375px] sm:w-[390px] sm:h-[1292px] md:flex-row sm:flex-col md:mt-[0px] sm:mt-[139px] ">
        <section class="flex lg:gap-7 lg:w-[600px] lg:h-[580px] md:gap-[14px] md:w-[360px] md:h-[375px] sm:w-[350px] sm:h-[280px]  "
            aria-label="Product Gallery">
            <div class=" flex-col lg:gap-5 lg:h-[580px] lg:w-[118px] md:w-[71px] md:h-[375px] md:gap-2.5 md:flex sm:hidden ">
                <button
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 lg:h-[180px] md:h-[118.33px] rounded-[5px]">
                    <img src="https://img.ltn.com.tw/Upload/auto/page/2016/08/26/160826-6128-3-3jKzt.jpg"
                        alt="Product view 1" class="object-cover rounded-md lg:h-[180px] lg:w-[118px] md:h-[118.33px]"
                        loading="lazy" />
                </button>
                <button
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 lg:h-[180px] md:h-[118.33px] rounded-[5px]">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e3e0a01a4843017115f6062ad45280acd04f8e3"
                        alt="Product view 2" class="object-cover rounded-md lg:h-[180px] lg:w-[118px] md:h-[118.33px]"
                        loading="lazy" />
                </button>
                <button
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 lg:h-[180px] md:h-[118.33px] rounded-[5px]">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e50e298efaf580d07fb1d7cca470e03f38af911c"
                        alt="Product view 3" class="object-cover rounded-md lg:h-[180px] lg:w-[118px] md:h-[118.33px]"
                        loading="lazy" />
                </button>
            </div>

            <div class="relative lg:w-[454px] lg:h-[580px] md:w-[275px] md:h-[375px] rounded-[5px] ">
                <button class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <div>
                        <img id="mainProductImage"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/6dc01ffd33242c3e120b0f6350dbbb031bd1dddf"
                            alt="Main product view"
                            class="object-cover lg:w-[454px] rounded-md lg:h-[580px] md:w-[275px] md:h-[375px]"
                            loading="lazy" />
                    </div>
                </button>
                <button
                    class="prev-btn flex absolute lg:left-6 md:left-3 top-2/4 justify-center items-center w-10 h-10 rounded-full -translate-y-2/4 cursor-pointer bg-white bg-opacity-80"
                    aria-label="Previous image">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 30L15 20L25 10" stroke="black" stroke-width="3.33333" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <button
                    class="next-btn flex absolute lg:right-6 md:right-3 top-2/4 justify-center items-center w-10 h-10 rounded-full -translate-y-2/4 cursor-pointer bg-white bg-opacity-80"
                    aria-label="Next image">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 30L25 20L15 10" stroke="black" stroke-width="3.33333" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>
        <div
            class="lg:w-[560px] lg:h-[580px] md:w-[340px] md:h-[375px]  flex-col justify-start items-start lg:gap-11 md:gap-4 inline-flex">
            <div class="self-stretch md:h-[116px] flex-col justify-start items-start gap-5 flex">
                <div class="self-stretch justify-between items-center inline-flex">
                    <div class="lg:h-[30px] lg:pb-[6.82px] justify-center items-center flex">
                        <div
                            class="lg:w-[502px] lg:h-[23.18px] md:w-[230.28px]  md:h-[23px] text-brandGray-normal lg:text-2xl md:text-xl font-light font-['Lexend'] lg:leading-9 md:leading-[30px]">
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
                <div
                    class="lg:w-[428px] md:w-[340px] opacity-60 text-brandGray-normal lg:text-sm  md:text-xs font-light font-['Lexend'] lg:leading-snug md:leading-[18px]">
                    ·Material |
                    925 silver | natural opal size | Metric circumference No.10 (公制圍10號)
                    飾品皆手工製作，誤差值 ±0.5公分皆為正常範圍
                    預購商品出貨約21工作天(不含假日)，建議與現貨商品分開下單*建</div>
            </div>
            <div class="justify-start items-center gap-2.5 inline-flex">
                <div
                    class="text-brandGray-normal lg:text-2xl md:text-lg md:font-light font-['Lexend'] lg:leading-9 md:leading-relaxed">
                    NT$ 5980</div>
                <div
                    class="text-brandGray-normalLight lg:text-lg md:text-sm md:font-light font-['Lexend'] line-through lg:leading-relaxed md:leading-snug">
                    NT$
                    5980</div>
            </div>
            <div class="flex-col justify-start items-start lg:gap-9 md:gap-4 flex">
                <div class="lg:w-[257px] lg:h-[50px] md:w-[177px] md:h-[32px]  relative">
                    <div
                        class="lg:w-[55px] md:w-[41px]  lg:top-[7px] md:top-[1px] absolute text-center text-brandGray-normal lg:text-2xl md:text-lg font-light font-['Lexend'] lg:leading-9 md:leading-relaxed">
                        顏色:</div>
                    <div data-svg-wrapper class="lg:left-[73px] md:left-[57px] top-0 absolute">
                        <svg id="svgcolor" width="183" height="52"  viewBox="0 0 183 52"
                            class="lg:w-[183px] lg:h-[52px] md:w-[123px] md:h-[32px] md:gap-[16px]" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="51" height="51" rx="25.5" stroke="#484848" />
                            <path id="color1" class="cursor-pointer"
                                d="M26.0013 46.8333C37.5072 46.8333 46.8346 37.5059 46.8346 26C46.8346 14.494 37.5072 5.16663 26.0013 5.16663C14.4954 5.16663 5.16797 14.494 5.16797 26C5.16797 37.5059 14.4954 46.8333 26.0013 46.8333Z"
                                fill="#484848" />
                            <path id="color2" class="cursor-pointer"
                                d="M92.0013 46.8333C103.507 46.8333 112.835 37.5059 112.835 26C112.835 14.494 103.507 5.16663 92.0013 5.16663C80.4954 5.16663 71.168 14.494 71.168 26C71.168 37.5059 80.4954 46.8333 92.0013 46.8333Z"
                                fill="#C6C6C6" />
                            <path id="color3" class="cursor-pointer"
                                d="M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z"
                                fill="#F7F7F7" />
                            <path id="color4"
                                d="M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z"
                                stroke="#C6C6C6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                </div>
                <div class="justify-start items-center lg:gap-[18px] md:gap-[17px] inline-flex">
                    <div
                        class="lg:w-[55px] md:w-[41px] text-center text-brandGray-normal lg:text-2xl md:text-lg font-light font-['Lexend'] lg:leading-9 md:leading-relaxed">
                        尺寸:
                    </div>
                    <div class="size-option lg:w-[50px] lg:h-[50px] md:w-[30px] md:h-[30px] lg:py-[15px] rounded-[5px] 
                                border border-brandBlue-normal flex-col justify-center items-center gap-2.5 
                                inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-brandBlue-normal lg:text-2xl md:text-lg font-light font-['Lexend'] leading-9">L</div>
                    </div>
                    <div class="size-option lg:w-[50px] lg:h-[50px] md:w-[30px] md:h-[30px] lg:py-[15px] rounded-[5px] border border-brandBlue-normal 
                                flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-brandBlue-normal lg:text-2xl md:text-lg font-light font-['Lexend'] leading-9">M</div>
                    </div>
                    <div class="size-option lg:w-[50px] lg:h-[50px] md:w-[30px] md:h-[30px] lg:py-[15px] rounded-[5px] border border-brandBlue-normal 
                                flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                        <div class="text-center text-brandBlue-normal lg:text-2xl md:text-lg font-light font-['Lexend'] leading-9">S</div>
                    </div>
                </div>
            </div>
            <div class="lg:w-[330px] lg:h-[58px] md:h-[40px] justify-start items-center gap-4 inline-flex">
                <div class="justify-start items-center flex">
                    <div id="decrese"
                        class="lg:w-[58px] lg:h-[58px] md:w-10 md:h-10 p-2.5 rounded-tl rounded-bl border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex cursor-pointer">
                        <div
                            class="self-stretch text-center text-brandGray-normal lg:text-[25.02px] font-medium font-['Poppins'] capitalize">
                            -</div>
                    </div>
                    <div
                        class="lg:w-[100px] lg:h-[58px] md:w-[97px] md:h-10 :p-2.5 border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex">
                        <div id="quantity"
                            class="self-stretch text-center text-brandGray-normalLight md:text-2xl md:font-light font-['Lexend'] leading-9">
                            01</div>
                    </div>
                    <div id="add"
                        class="lg:w-[58px] lg:h-[58px] md:w-10 md:h-10 p-2.5 rounded-tr rounded-br border border-brandGray-lightHover flex-col justify-center items-center gap-2.5 inline-flex cursor-pointer">
                        <div
                            class="self-stretch text-center text-brandGray-normal lg:text-[25.02px] font-medium font-['Poppins'] capitalize">
                            +</div>
                    </div>
                </div>
                <div class="text-brandGray-normalLight lg:text-lg md:text-sm font-light font-['Lexend'] lg:leading-relaxed md:leading-snug">庫存剩12件
                </div>
            </div>
            <div class="lg:w-[558px] md:w-[340px] justify-start items-start gap-2.5 inline-flex">
                <div
                    class="grow shrink basis-0 lg:w-[271px] md:w-[165px] lg:h-[58px] md:h-[47.5px] md:px-10 md:py-[15px] bg-brandBlue-normal rounded-[5px] flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                    <div class="text-center text-white lg:text-2xl md:text-base font-light font-['Lexend'] lg:leading-9 md:leading-normal">加入購物車</div>
                </div>
                <div
                    class="grow shrink basis-0 lg:w-[271px] md:w-[165px] lg:h-[58px] md:h-[47.5px] md:px-10 md:py-[15px] bg-brandRed-normal rounded-[5px] flex-col justify-center items-center gap-2.5 inline-flex overflow-hidden cursor-pointer">
                    <div class="text-center text-white lg:text-2xl md:text-base font-light font-['Lexend'] lg:leading-9 md:leading-normal">直接購買</div>
                </div>
            </div>
        </div>
    </main>

    <div
        class=" flex mx-auto  lg:w-[1320px]  md:w-[720px]  flex-col justify-start items-center gap-5  lg:mt-[100px] md:mt-[55px]">
        <div class="md:h-[54px] border-b border-brandGray-lightHover w-full justify-center items-start gap-10 inline-flex">
            <div id="info"
                class="md:px-4 md:py-3  shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)] justify-start items-start gap-2 flex cursor-pointer">
                <div id="info-text" class="text-brandRed-normal md:text-xl md:font-light font-['Lexend'] leading-[30px]">
                    產品須知</div>
            </div>
            <div id="show-img" class="md:px-4 md:py-3  justify-start items-start gap-2 flex cursor-pointer">
                <div id="show-img-text"
                    class="text-brandGray-normal md:text-xl md:font-light font-['Lexend'] leading-[30px]">產品展示圖</div>
            </div>
        </div>
        <div id="show-img-content" class="w-full hidden ">

            <figure class="w-full">
                <img src="https://cdn.builder.io/api/v1/image/assets/8ad7720499ce402bb027d5c022d68e6a/19296174b86e2348272ac21c3a2cb10d896bde1f8671c066e3270eb65fdd7fc5?placeholderIfAbsent=true"
                    alt="Image description" class="object-contain w-full aspect-[1.5]" />
            </figure>
        </div>
        <div id="info-content"
            class="self-stretch  lg:px-[180px] md:px-10 md:pt-10 md:pb-[60px] bg-brandGray-light flex-col justify-start items-start flex ">

            <div class="lg:w-[928px] md:w-[640px] md:h-[93px] relative  overflow-hidden">
                <div
                    class="md:w-[39px] md:h-[21px] md:px-[3px] py-px md:left-[10px] md:top-[9px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center inline-flex overflow-hidden ">
                    <div
                        class="md:w-[33px] md:h-[19px] text-center text-white md:text-sm md:font-light font-['Lexend'] leading-snug">
                        材質
                    </div>
                </div>
                <div
                    class="lg:w-[915px] md:w-[627px] md:pt-[7px] md:pb-0.5 md:left-[13px] md:top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="lg:w-[915px] md:w-[627px] text-brandGray-normal md:text-sm font-light font-['Lexend'] leading-snug">
                        純銀92.5%
                        (925
                        silver)、天然綠松石(natural turquoise)</div>
                </div>
                <div class="lg:w-[915px] md:w-[627px] h-[0px] md:left-[13px] md:top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="lg:w-[928px] md:w-[640px] md:h-[93px] relative  overflow-hidden">
                <div
                    class="lg:w-[915px] md:w-[39px] md:h-[21px] md:px-[3px] py-px md:left-[13px] md:top-[7px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center inline-flex overflow-hidden">
                    <div
                        class="md:w-[33px] md:h-[19px] text-center text-white text-sm font-light font-['Lexend'] leading-snug">
                        規格<br /></div>
                </div>
                <div
                    class="lg:w-[915px] md:w-[627px] md:pt-[7px] md:pb-0.5 md:left-[13px] md:top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="lg:w-[915px] md:w-[627px] text-brandGray-normal md:text-sm md:font-light font-['Lexend'] leading-snug">
                        公制圍10號
                        (Metric
                        circumference No.10 )</div>
                </div>
                <div class="lg:w-[915px] md:w-[627px] h-[0px] md:left-[13px] md:top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="lg:w-[928px] md:w-[640px] md:h-[93px] relative  overflow-hidden">
                <div
                    class="md:left-[16px] md:top-[8px] absolute bg-brandGray-normal rounded-[5px] flex-col justify-start items-start gap-2.5 inline-flex overflow-hidden">
                    <div class="text-center text-white md:text-sm md:font-light font-['Lexend'] leading-snug">出貨說明</div>
                </div>
                <div
                    class="lg:w-[915px] md:w-[627px] md:pt-[7px] md:pb-0.5 md:left-[13px] md:top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="lg:w-[915px] md:w-[627px] text-brandGray-normal md:text-sm md:font-light font-['Lexend'] leading-snug">
                        預購商品出貨約21工作天(不含假日)，建議與現貨商品分開下單</div>
                </div>
                <div class="lg:w-[915px] md:w-[627px] h-[0px] md:left-[13px] md:top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
            <div class="lg:w-[928px] md:w-[640px] md:h-[93px] relative  overflow-hidden">
                <div
                    class="md:px-[3px] py-px md:left-[13px] md:top-[7px] absolute bg-brandGray-normal rounded-[5px] justify-center items-center gap-2.5 inline-flex overflow-hidden">
                    <div class="text-center text-white md:text-sm md:font-light font-['Lexend'] leading-snug">其他補充</div>
                </div>
                <div
                    class="lg:w-[915px] md:w-[627px] md:pt-[7px] md:pb-0.5 md:left-[13px] md:top-[35px] absolute justify-center items-center inline-flex overflow-hidden">
                    <div class="lg:w-[915px] md:w-[627px] text-brandGray-normal md:text-sm md:font-light font-['Lexend'] leading-snug">
                        飾品皆手工製作，誤差值
                        ±0.5公分皆為正常範圍</div>
                </div>
                <div class="lg:w-[915px] md:w-[627px] h-[0px] md:left-[13px] md:top-[77px] absolute border border-brandGray-lightActive">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
    <script>
        $(document).ready(function () {
            $("[data-svg-wrapper] rect").remove();

            function updatePath() {
                

                

                if (window.innerWidth < 768) {
                    // 當螢幕小於 768px (手機) 時，使用這個 `d` 值
                    // pathElement.setAttribute("d", "M10 10L40 40");
                } else if (window.innerWidth < 1200) {
                    // 當螢幕 768px ~ 1023px (平板) 時，使用這個 `d` 值
                    $("#svgcolor").attr("viewBox", "0 0 123 32");
                    $("#color1").attr("d", "M16 28.5C22.9036 28.5 28.5 22.9036 28.5 16C28.5 9.09644 22.9036 3.5 16 3.5C9.09644 3.5 3.5 9.09644 3.5 16C3.5 22.9036 9.09644 28.5 16 28.5Z");
                    $("#color2").attr("d", "M62 28.5C68.9036 28.5 74.5 22.9036 74.5 16C74.5 9.09644 68.9036 3.5 62 3.5C55.0964 3.5 49.5 9.09644 49.5 16C49.5 22.9036 55.0964 28.5 62 28.5Z");
                    $("#color3").attr("d", "M108 28.5C114.904 28.5 120.5 22.9036 120.5 16C120.5 9.09644 114.904 3.5 108 3.5C101.096 3.5 95.5 9.09644 95.5 16C95.5 22.9036 101.096 28.5 108 28.5Z");
                    $("#color4").attr("d", "M108 28.5C114.904 28.5 120.5 22.9036 120.5 16C120.5 9.09644 114.904 3.5 108 3.5C101.096 3.5 95.5 9.09644 95.5 16C95.5 22.9036 101.096 28.5 108 28.5Z");
                
                } else {
                    // 當螢幕 >= 1024px (桌面) 時，使用這個 `d` 值
                    $("#svgcolor").attr("viewBox", "0 0 183 52");
                    $("#color1").attr("d", "M26.0013 46.8333C37.5072 46.8333 46.8346 37.5059 46.8346 26C46.8346 14.494 37.5072 5.16663 26.0013 5.16663C14.4954 5.16663 5.16797 14.494 5.16797 26C5.16797 37.5059 14.4954 46.8333 26.0013 46.8333Z");
                    $("#color2").attr("d", "M92.0013 46.8333C103.507 46.8333 112.835 37.5059 112.835 26C112.835 14.494 103.507 5.16663 92.0013 5.16663C80.4954 5.16663 71.168 14.494 71.168 26C71.168 37.5059 80.4954 46.8333 92.0013 46.8333Z");
                    $("#color3").attr("d", "M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z");
                    $("#color4").attr("d", "M158.001 46.8333C169.507 46.8333 178.835 37.5059 178.835 26C178.835 14.494 169.507 5.16663 158.001 5.16663C146.495 5.16663 137.168 14.494 137.168 26C137.168 37.5059 146.495 46.8333 158.001 46.8333Z");
                }
            }

            // 監聽螢幕縮放
            window.addEventListener("resize", updatePath);

            // 頁面載入時先執行一次
            updatePath();


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
            $("#decrese").click(function () {
                if (quantity > 1) {
                    quantity--;
                    $("#quantity").text(quantity.toString().padStart(2, '0'));
                }
            })
            // 監聽增加數量按鈕點擊
            $("#add").click(function () {

                quantity++;
                $("#quantity").text(quantity.toString().padStart(2, '0'));

            })

            // 監聽產品需知按鈕點擊
            $("#info").click(function () {
                $("#show-img-content").addClass("hidden");
                $("#info-content").removeClass("hidden")
                $("#info-text").addClass("text-brandRed-normal")
                $("#show-img-text").removeClass("text-brandRed-normal")
                $(this).addClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
                $("#show-img").removeClass("shadow-[inset_0px_-3px_0px_0px_rgba(220,53,69,1.00)]")
            })

            // 監聽產品展示圖按鈕點擊
            $("#show-img").click(function () {
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