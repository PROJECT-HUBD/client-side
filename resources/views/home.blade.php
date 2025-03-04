@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', '首頁')
@section('meta_keywords', '首頁, home')


@section('content')
<section class="mt-[200px]">
    <!-- banner 輪播圖 -->
    <section class="max-w-full h-[736px] overflow-hidden border-b-2 shadow-[0_15px_0_0_brandGray-normalLight] flex flex-col mb-[60px]">
        <div class="relative w-full h-[600px] overflow-hidden flex justify-center items-start gap-5 mb-10">
            <!-- 左側圖片 -->
            <div class="banner1 relative w-[720px] h-[600px] flex-shrink-0">
                <img src="{{ asset('images/home_test1.JPG') }}" alt="輪播圖" class=" w-full h-full object-cover">
                <div class="bannerMask1 hidden absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask1 hidden absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start px-[60px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="text-[24px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p>　不受型態拘束！獨一無二！比百變怪還百變的課程來了，</p>
                        <p>　快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="w-[50px] h-[50px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- 中間圖片 -->
            <div class="banner2 relative w-[720px] h-[600px] flex-shrink-0 z-1">
                <img src="{{ asset('images/home_test2.JPG') }}" alt="輪播圖" class="w-full h-full object-cover">
                <div class="bannerMask2 hidden absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask2 hidden absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start px-[60px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="text-[24px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p>　不受型態拘束！獨一無二！比百變怪還百變的課程來了，</p>
                        <p>　快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="w-[50px] h-[50px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- 右側圖片 -->
            <div class="banner3 relative  w-[720px] h-[600px] flex-shrink-0">
                <img src="{{ asset('images/home_test3.JPG') }}" alt="輪播圖" class=" w-full h-full object-cover">
                <div class="bannerMask3 hidden absolute z-20 top-0 left-0 w-full h-full bg-gradient-to-t from-brandGray-normal opacity-40"></div>
                <div class="bannerMask3 hidden absolute z-30 bottom-0 w-full h-[208px] flex flex-col justify-center items-start px-[60px] gap-[16px] pb-14">
                    <div class="text-brandGray-lightLight flex flex-col justify-center items-start gap-2">
                        <p class="text-[24px] font-semibold">【 New 】＋寶石吊墜課程＋</p>
                        <p>　不受型態拘束！獨一無二！比百變怪還百變的課程來了，</p>
                        <p>　快快呼朋引伴手牽手一起來 364 把屬於自己的吊墜帶回家吧！</p>
                    </div>
                    <a href="">
                        <div class="w-[140px] h-[50px] flex justify-start items-center ms-3 hover:opacity-80">
                            <div class="w-[50px] h-[50px] flex justify-center items-center rounded-full bg-brandRed-normal me-3"><span class="w-[9xp] h-[16px] bg-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></div>
                            <p class="text-brandGray-lightLight font-semibold">了解更多</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- progress + btn -->
        <div class="w-full h-[50px] flex items-center px-[100px]">
            <div class="flex w-[50%] justify-start">
                <div class="flex justify-center items-center">
                    <div class="progresBar1 w-[120px] h-[1px] bg-brandRed-normal"></div>
                    <div class="progresBar1 w-[12px] h-[12px] bg-brandRed-normal rounded-full"></div>
                    <div class="progresBar2 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                    <div class="progresBar2 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                    <div class="progresBar3 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                    <div class="progresBar3 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                </div>
            </div>
            <div class="flex w-[50%] justify-end">
                <div class="flex justify-center items-center gap-3">
                    <button type="button" class="preBtn w-[50px] h-[50px] border-2 rounded-full border-brandGray-normalLight flex justify-center items-center"><span class="w-5 h-5 text-brandGray-normalLight icon-[ep--arrow-left-bold]"></span></button>
                    <button type="button" class="nextBtn w-[50px] h-[50px] border-2 rounded-full border-brandRed-normal flex justify-center items-center"><span class="w-5 h-5 text-brandRed-normal icon-[ep--arrow-right-bold]"></span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 主打商品 -->
    <section class="h-[1050px] flex justify-center items-center mb-[80px]">
        <div class="w-[50%] h-full  flex justify-center items-center">
            <!-- 商品圖＋描述＋價錢 -->
            <div class="w-[600px] h-[920px] flex flex-col justify-center items-center gap-5">
                <div class="w-full h-10 flex  justify-start items-center gap-5">
                    <p class="text-[30px] font-black text-brandGray-normal">主打商品</p>
                    <div class="w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                </div>
                <div class="w-full h-[580px]">
                    <img src="{{ asset('images/home_test5.JPG')}}" alt="主打商品" class="targetImg w-full h-full object-cover" loading="lazy">
                </div>
                <div class="w-full h-[266px]">
                    <div class="pb-[28px]">
                        <p class="text-brandGray-normal text-[24px] mb-5">輕熟初秋防風純亞麻棉披風</p>
                        <p class="text-brandGray-normalLight text-[14px]">
                            Material | 925 silver | natural opal size | Metric circumference No.10（公制圍 10 號）
                            飾品皆手工製作，誤差值 ±0.5 公分皆為正常範圍。預購商品出貨約 21 工作天（不含假日），建議與現貨商品分開下單</p>
                    </div>
                    <div class="pb-[28px] flex items-center gap-[10px]">
                        <p class="text-brandGray-normal text-[24px]">NT$ 5980</p>
                        <p class="text-brandGray-lightActive text-[18px] line-through">NT$ 5980</p>
                    </div>
                    <div class="flex justify-start items-center gap-5">
                        <div class="flex justify-start items-center gap-[10px]">
                            <div class="w-[42px] h-[42px] bg-brandGray-light border-2 border-brandGray-normalLight rounded-full"></div>
                            <div class="w-[42px] h-[42px] bg-brandGray-darker border-2 border-brandGray-normalLight rounded-full"></div>
                        </div>
                        <div class="text-[24px] text-brandGray-normal flex justify-center items-center">
                            <div class="w-[50px] h-[50px] flex justify-center items-center">L</div>
                            <div class="w-[50px] h-[50px] flex justify-center items-center">M</div>
                            <div class="w-[50px] h-[50px] flex justify-center items-center">S</div>
                        </div>
                        <button type="button" class="w-[300px] h-[58px] text-[24px] text-semibold text-brandGray-lightLight flex justify-center items-center bg-brandRed-normal rounded-md hover:opacity-80">直接購買&nbsp;<span class="w-[24px] h-[24px] text-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 轉盤區 -->
        <div class="relative w-[50%] h-full ps-[55px] overflow-hidden">
            <div class="absolute top-[108px] left-[150px] w-[790px] h-[810px] border-[85px] border-brandRed-light rounded-full"></div>
            <div class="roulette6 cursor-pointer absolute z-30 top-0 left-[380px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test7.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette1 rouletteTarget absolute z-30 top-[190px] left-[60px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-normal rounded-full">
                <img src="{{asset('images/home_test5.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette2 cursor-pointer absolute z-30 top-[550px] left-[60px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test6.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette3 cursor-pointer absolute z-30 bottom-[30px] left-[380px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test9.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette4 cursor-pointer absolute z-30 top-[580px] left-[700px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src=" {{asset('images/home_test10.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette5 cursor-pointer absolute z-30 top-[190px] left-[700px] w-[295px] h-[295px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test11.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>

        </div>
    </section>

    <!-- 分類卡片區 -->
    <section class="w-full h-[640px] mb-[100px] flex justify-center items-center">
        <div class="w-[1260] flex justify-center items-center gap-5">
            <div class="relative w-[620px] h-[600px]">
                <img src="{{asset('images/lessons1.JPG')}}" alt="銀黏土課程" class="w-full h-full object-cover">
                <div class="absolute left-0 bottom-0 w-[420px] h-[238px] bg-brandRed-normal opacity-60 flex justify-center items-center">
                    <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                        <p class=" font-semibold text-[24px]">銀黏土課程</p>
                        <p class=" font-normal text-[24px] mb-5">Sliver Clay Lessons</p>
                        <button type="button" class="w-[137px] h-[52px] font-semibold  border-2 border-brandGray-lightLight rounded-lg active:opacity-50">了解更多</button>
                    </div>
                </div>
            </div>
            <div class="w-[620px] h-[600px] flex flex-col gap-5 justify-center items-center">
                <div class="w-full h-[290px] relative flex justify-center items-center">
                    <img src="{{asset('images/lessons2.JPG')}}" alt="飾品圖" class="w-full h-full object-cover">
                    <div class="absolute w-[348px] h-[153px] left-0 bottom-0 bg-brandRed-normal opacity-60 flex justify-center items-center pt-[35px]">
                        <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                            <p class="text-[24px] mb-5"><span class="font-semibold">飾品</span>&nbsp;&nbsp;<span class="font-nornal">Accessories</span></p>
                            <button tpe="button" class="w-[137px] h-[52px] font-semibold  border-2 border-brandGray-lightLight rounded-lg active:opacity-50">了解更多</button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[290px] relative flex justify-center items-center">
                    <img src="{{asset('images/lessons3.JPG')}}" alt="服飾圖" class="w-full h-full object-cover">
                    <div class="absolute w-[348px] h-[153px] left-0 bottom-0 bg-brandRed-normal opacity-60 flex justify-center items-center pt-[35px]">
                        <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                            <p class="text-[24px] mb-5"><span class="font-semibold">服飾</span>&nbsp;&nbsp;<span class="font-nornal">Clothes</span></p>
                            <button type="button" class="w-[137px] h-[52px] font-semibold  border-2 border-brandGray-lightLight rounded-lg active:opacity-50">了解更多</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- solgan -->
    <section class="w-full h-[80px] flex justify-center items-center mb-[100px]">
        <div class="w-[608px] flex justify-center items-center">
            <div class="w-[48px] h-[48px]"><span class="w-full h-full bg-brandRed-normal icon-[mage--star-moving-fill]"></span></div>
            <div class="w-full h-full text-[30px] text-brandGray-dark flex flex-col justify-center items-center">
                <p>你依舊閃閃發亮，</p>
                <p>在非生日的364個日子裡</p>
            </div>
            <div class="w-[48px] h-[48px]"><span class="w-full h-full bg-brandRed-normal icon-[mage--star-moving-fill]"></span></div>
        </div>
    </section>

    <!-- banner 2 -->
    <section class="w-full h-[580px] pt-10 mb-[60px]">
        <div class="w-full h-[400px]"><img src="{{asset('images/home_banner.JPG')}}" alt="品牌橫幅" class="w-full h-full object-cover"></div>
        <!-- 小圖示區 -->
        <div class="w-full flex justify-center items-center py-10 shadow-md">
            <div class="w-[1066px] grid grid-cols-4 gap-[142px] justify-center items-center">
                <div class="col-span-1 w-[170px] h-[60px] flex justify-center items-center gap-2">
                    <div class="w-[56px] h-[56px] flex justify-center items-center"><span class="w-[42px] h-[42px] bg-brandBlue-normal icon-[ion--gift-outline]"></span></div>
                    <div class="text-brandBlue-normal flex flex-col justify-center items-start">
                        <p>Handmade</p>
                        <p>Craft</p>
                    </div>
                </div>
                <div class="col-span-1 w-[170px] h-[60px] flex justify-center items-center gap-2">
                    <div class="w-[56px] h-[56px] flex justify-center items-center"><span class="w-[42px] h-[42px] bg-brandBlue-normal icon-[hugeicons--honour-star]"></span></div>
                    <div class="text-brandBlue-normal flex flex-col justify-center items-start">
                        <p>Hight</p>
                        <p>Quantity</p>
                    </div>
                </div>
                <div class="col-span-1 w-[170px] h-[60px] flex justify-center items-center gap-2">
                    <div class="w-[56px] h-[56px] flex justify-center items-center"><span class="w-[35px] h-[35px] bg-brandBlue-normal icon-[garden--smiley-stroke-12]"></span></div>
                    <div class="text-brandBlue-normal flex flex-col justify-center items-start">
                        <p>Hight</p>
                        <p>Satsification</p>
                    </div>
                </div>
                <div class="col-span-1 w-[170px] h-[60px] flex justify-center items-center gap-2">
                    <div class="w-[56px] h-[56px] flex justify-center items-center"><span class="w-[42px] h-[42px] bg-brandBlue-normal icon-[la--shipping-fast]"></span></div>
                    <div class="text-brandBlue-normal flex flex-col justify-center items-start">
                        <p>Flexable</p>
                        <p>Shipping</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 商品卡片區 飾品 -->
    <section class="w-full h-[494px] mb-[60px] flex flex-col justify-center items-center">
        <!-- 標題 -->
        <div class="w-[1230px] h-[56px] flex item-center gap-5 mb-[28px]">
            <div class="w-full flex justify-start items-center font-semibold text-brandGray-normal text-[30px]">
                <p>飾品&nbsp;&nbsp;<span>Accessories</span></p>
            </div>
            <div class="w-full flex justify-end items-center font-normal text-brandGray-normal text-[24px]">
                <p class="hover:text-brandRed-normal">更多商品</p>
            </div>
        </div>
        <!-- 商品四個 -->
        <div class="grid grid-cols-4 justify-center items-center w-[1230px] h-[418px] gap-5">
            <div class="col-span-1 flex flex-col justify-center items-center relative">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <!-- 商品卡片區 服飾 -->
    <section class="w-full h-[494px] mb-[120px] flex flex-col justify-center items-center px-[105px]">
        <!-- 標題 -->
        <div class="w-[1230px] h-[56px] flex item-center gap-5 mb-[28px]">
            <div class="w-full flex justify-start items-center font-semibold text-brandGray-normal text-[30px]">
                <p>服飾&nbsp;&nbsp;<span>Clothes</span></p>
            </div>
            <div class="w-full flex justify-end items-center font-normal text-brandGray-normal text-[24px]">
                <p class="hover:text-brandRed-normal">更多商品</p>
            </div>
        </div>
        <!-- 商品四個 -->
        <div class="grid grid-cols-4 justify-center items-center w-[1230px] h-[418px] gap-5">
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
            <div class="col-span-1 flex flex-col justify-center items-center relative ">
                <a href="" class="hover:opacity-80 flex flex-col justify-center items-center gap-5">
                    <div class="relative w-[300px] h-[300px]">
                        <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                        <div class="absolute top-0 right-0 w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                    </div>
                    <div class="w-[300px] h-[74px] flex flex-col justify-center item-center gap-5 text-[20px]">
                        <p>Navajo 綠松石十字星戒</p>
                        <p><span class="text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
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