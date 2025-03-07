@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', '首頁')
@section('meta_keywords', '首頁, home')


@section('content')
<section class="mt-[200px] md:mt-[260px] lg:mt-[200px] w-full">
    <!-- go top btn -->


    <!-- banner 輪播圖 -->
    <section class="w-full h-[415px] md:h-[440px] lg:h-[600px] overflow-hidden border-b-2 shadow-[0_15px_0_0_brandGray-normalLight] flex flex-col mb-[60px]">
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
    <section class="w-full h-[680px] md:h-[820px] lg:h-[960px] flex md:flex-col lg:flex-row justify-center items-center mb-[60px]">
        <div class="w-[550px] h-full md:w-[550px] lg:w-[50%] flex justify-center items-start lg:ps-[90px]">
            <div class="md:w-[550px] h-full md:h-[820px] flex flex-col justify-center items-center gap-14">
                <div class="w-full h-10 flex justify-start items-center">
                    <!-- 主打商品 標題 -->
                    <p class="text-[32px] font-semibold text-brandGray-normal">主打商品&nbsp;&nbsp;<span class="font-normal">Hit Items</span></p>
                </div>
                <div class="w-full flex justify-between lg:justify-center items-center">
                    <button type="button" class="lg:hidden preBtn w-[50px] h-[50px] border-2 rounded-full border-brandRed-normal flex justify-center items-center active:opacity-50"><span class="w-5 h-5 text-brandRed-normal icon-[ep--arrow-left-bold]"></span></button>
                    <!-- 商品圖片 -->
                    <div class="flex justify-center items-center w-[350px] md:w-[400px] lg:w-[400px] h-[350px] md:h-[400px] lg:h-[400px]">
                        <img src="{{asset('images/home_test5.JPG')}}" alt="主打商品" class="targetImg w-full h-full object-cover" loading="lazy">
                    </div>
                    <button type="button" class="lg:hidden nextBtn w-[50px] h-[50px] border-2 rounded-full border-brandRed-normal flex justify-center items-center active:opacity-50"><span class="w-5 h-5 text-brandRed-normal icon-[ep--arrow-right-bold]"></span></button>
                </div>

                <div class="w-full h-full md:h-[266px]">
                    <div class="md:pb-[28px]">
                        <!-- 商品名稱 -->
                        <p class="text-brandGray-normal text-[24px] mb-5">輕熟初秋防風純亞麻棉披風</p>
                        <!-- 商品描述 -->
                        <p class="hidden md:block text-brandGray-normalLight text-[14px]">
                            Material | 925 silver | natural opal size | Metric circumference No.10（公制圍 10 號）
                            飾品皆手工製作，誤差值 ±0.5 公分皆為正常範圍。預購商品出貨約 21 工作天（不含假日），建議與現貨商品分開下單</p>
                    </div>
                    <div class="pb-[28px] text-[24px]">
                        <!-- 價格 -->
                        <p>NT$&nbsp;<span>5980</span></p>
                    </div>
                    <div class="md:w-full md:h-[50px] flex justify-center md:justify-between items-center md:gap-5">
                        <!-- 顏色 -->
                        <div class="md:h-full hidden md:flex justify-start items-center gap-[10px]">
                            <div class="w-[38px] h-[38px] bg-brandGray-light border-2 border-brandGray-normalLight rounded-full"></div>
                            <div class="w-[38px] h-[38px] bg-brandGray-darker border-2 border-brandGray-normalLight rounded-full"></div>
                        </div>
                        <!-- 尺寸 -->
                        <div class="hidden md:flex text-[24px] text-brandGray-normal justify-center items-center gap-3">
                            <div class="w-[50px] h-[50px] flex justify-center items-center">L</div>
                            <div class="w-[50px] h-[50px] flex justify-center items-center">M</div>
                            <div class="w-[50px] h-[50px] flex justify-center items-center">S</div>
                        </div>
                        <!-- 查看商品按鈕 -->
                        <a href="" class="w-full md:w-[250px] h-[50px] text-[20px] text-semibold text-brandGray-lightLight flex justify-center items-center bg-brandRed-normal rounded-md hover:opacity-80">商品詳情&nbsp;<span class="w-[20px] h-[20px] text-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 轉盤區 -->
        <div class="hidden lg:block relative w-[50%] h-full ps-[55px] overflow-hidden">
            <div class="absolute top-[80px] left-[120px] w-[750px] h-[750px] border-[95px] border-brandRed-light rounded-full"></div>
            <div class="roulette6 cursor-pointer absolute z-30 top-0 left-[380px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test7.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette1 rouletteTarget absolute z-30 top-[150px] left-[80px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-normal rounded-full">
                <img src="{{asset('images/home_test5.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette2 cursor-pointer absolute z-30 top-[500px] left-[80px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test6.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette3 cursor-pointer absolute z-30 bottom-[40px] left-[380px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test9.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette4 cursor-pointer absolute z-30 top-[500px] left-[700px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src=" {{asset('images/home_test10.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
            <div class="roulette5 cursor-pointer absolute z-30 top-[150px] left-[700px] w-[250px] h-[250px] bg-brandGray-lightLight border-8 border-brandRed-light rounded-full hover:opacity-80 activer:opacity-50">
                <img src="{{asset('images/home_test11.JPG')}}" alt="主打商品圖" class="w-full h-full object-cover rounded-full">
            </div>
        </div>
    </section>

    <!-- 分類卡片區 -->
    <section class="w-full min-h-[1220px] md:min-h-[600px] md:h-[600px] flex justify-center items-center mb-[80px]">
        <div class="w-full h-full flex flex-col md:flex-row justify-center items-center gap-5">
            <!-- 左邊 單張 -->
            <div class="relative w-full md:w-[360px] lg:w-[620px] h-full">
                <img src="{{asset('images/lessons1.JPG')}}" alt="銀黏土課程" class="w-full h-full object-cover">
                <!-- 紅色文字區塊 -->
                <div class="absolute left-0 bottom-0 w-full lg:w-[420px] h-[238px] bg-[#DC7881] opacity-80 flex justify-center items-center">
                    <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                        <p class=" font-semibold text-[24px]">銀黏土課程</p>
                        <p class=" font-normal text-[24px] mb-5">Sliver Clay Lessons</p>
                        <a href=""><button type="button" class="w-[137px] h-[52px] font-semibold border-2 border-brandGray-lightLight rounded-lg hover:bg-brandRed-normal active:opacity-50">了解更多</button></a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[620px] h-full flex flex-col justify-start items-center gap-5">
                <!-- 右邊 上面 -->
                <div class="w-full h-[290px] relative flex justify-center items-center">
                    <img src="{{asset('images/lessons2.JPG')}}" alt="飾品圖" class="w-full h-full object-cover">
                    <!-- 紅色文字區塊 -->
                    <div class="absolute w-full md:w-[348px] h-[153px] left-0 bottom-0 bg-[#DC7881] opacity-80 flex justify-center items-center pt-[35px]">
                        <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                            <p class="text-[24px] mb-5"><span class="font-semibold">飾品</span>&nbsp;&nbsp;<span class="font-nornal">Accessories</span></p>
                            <a href="{{ route('categories_accessories')}}"><button tpe="button" class="w-[137px] h-[52px] font-semibold  border-2 border-brandGray-lightLight rounded-lg hover:bg-brandRed-normal active:opacity-50">了解更多</button></a>
                        </div>
                    </div>
                </div>
                <!-- 右邊 下面 -->
                <div class="w-full h-[290px] relative flex justify-center items-center">
                    <img src="{{asset('images/lessons3.JPG')}}" alt="服飾圖" class="w-full h-full object-cover">
                    <!-- 紅色文字區塊 -->
                    <div class="absolute w-full md:w-[348px] h-[153px] left-0 bottom-0 bg-[#DC7881] opacity-80 flex justify-center items-center pt-[35px]">
                        <div class="w-[225px] h-[136px] text-brandGray-lightLight">
                            <p class="text-[24px] mb-5"><span class="font-semibold">服飾</span>&nbsp;&nbsp;<span class="font-nornal">Clothes</span></p>
                            <a href="{{ route('categories_clothes')}}"><button type="button" class="w-[137px] h-[52px] font-semibold  border-2 border-brandGray-lightLight rounded-lg hover:bg-brandRed-normal active:opacity-50">了解更多</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- slogan -->
    <section class="w-full h-[52px] md:h-[80px] flex justify-center items-center mb-[80px]">
        <div class="w-full h-full flex justify-center items-center gap-6 md:gap-14">
            <div class="w-[28px] md:w-[40px] h-[28px] md:h-[40px]"><span class="w-full h-full bg-brandRed-normal icon-[mage--star-moving-fill]"></span></div>
            <div class="w-[220px] md:w-[380px] h-full text-[18px] md:text-[24px] text-brandGray-dark flex flex-col justify-center items-center">
                <p>你依舊閃閃發亮，</p>
                <p>在非生日的 364 個日子裡</p>
            </div>
            <div class="w-[28px] md:w-[40px] h-[28px] md:h-[40px]"><span class="w-full h-full bg-brandRed-normal icon-[mage--star-moving-fill]"></span></div>
        </div>
    </section>

    <!-- banner -->
    <section class="w-full h-[334px] md:h-[376px] lg:h-[580px] mb-[60px]">
        <div class="w-full h-[108px] md:h-[233px] lg:h-[400px]"><img src="{{asset('images/home_banner.JPG')}}" alt="品牌橫幅" class="w-full h-full object-cover"></div>
        <!-- 小圖示區 -->
        <div class="w-full flex justify-center items-center py-10 shadow-md">
            <div class="md:w-[760px] lg:w-[1066px] grid grid-cols-2 md:grid-cols-4 gap-5 md:gap-[40px] lg:gap-[142px] justify-center items-center">
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
    <section class="w-full h-[1170px] md:h-[420px] lg:h-[494px] flex flex-col justify-center items-center mb-[60px]">
        <!-- 標題 -->
        <div class="w-[250px] md:w-[770px] lg:w-[1230px] h-[50px] md:h-[56px] flex item-center mb-[28px]">
            <div class="w-full flex justify-start items-center font-semibold text-brandGray-normal text-[28px] md:text-[30px]">
                <p>飾品&nbsp;&nbsp;<span class="hidden md:inline-block">Accessories</span></p>
            </div>
            <a href="{{route('product_details')}}" class="w-full text-[20px] flex justify-end items-center font-normal text-brandGray-normal md:text-[20px] hover:opacity-80 active:opacity-50">
                <p class="hover:text-brandRed-normal flex justify-center items-center">更多商品&nbsp;&nbsp;<span class="w-6 h-6 icon-[ep--arrow-right-bold]"></span></p>
            </a>
        </div>
        <!-- 商品四個 -->
        <div class="w-full md:w-[770px] h-full lg:w-[1230px] lg:h-[418px] grid md:grid-cols-3 lg:grid-cols-4 justify-center items-center gap-5">
            <!-- 商品1 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>

            <!-- 商品2 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>

            <!-- 商品3 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>

            <!-- 商品4 -->
            <a href="" class="lg:flex w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>
        </div>
    </section>


    <!-- 商品卡片區 服飾 -->
    <section class="w-full h-[1170px] md:h-[420px] lg:h-[494px] flex flex-col justify-center items-center mb-[60px]">
        <!-- 標題 -->
        <div class="w-[250px] md:w-[770px] lg:w-[1230px] h-[50px] md:h-[56px] flex item-center mb-[28px]">
            <div class="w-full flex justify-start items-center font-semibold text-brandGray-normal text-[28px] md:text-[30px]">
                <p>服飾&nbsp;&nbsp;<span class="hidden md:inline-block">Clothes</span></p>
            </div>
            <a href="{{route('product_details')}}" class="w-full text-[20px] flex justify-end items-center font-normal text-brandGray-normal md:text-[20px] hover:opacity-80 active:opacity-50">
                <p class="hover:text-brandRed-normal flex justify-center items-center">更多商品&nbsp;&nbsp;<span class="w-6 h-6 icon-[ep--arrow-right-bold]"></span></p>
            </a>
        </div>
        <!-- 商品四個 -->
        <div class="w-full md:w-[770px] h-full lg:w-[1230px] lg:h-[418px] grid md:grid-cols-3 lg:grid-cols-4 justify-center items-center gap-5">
            <!-- 商品1 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>
            <!-- 商品2 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>
            <!-- 商品3 -->
            <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>
            <!-- 商品4 -->
            <a href="" class="lg:flex w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                    <img src="{{asset('images/home_test4.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                </div>
                <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                    <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                </div>
            </a>
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