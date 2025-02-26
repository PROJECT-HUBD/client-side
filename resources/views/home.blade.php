@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', '首頁')
@section('meta_keywords', '首頁, home, homepage')


@section('content')
<div class="mt-[200px]">
    <!-- banner 輪播圖 -->
    <section class="max-w-full h-[736px] overflow-hidden border-b-2 shadow-[0_15px_0_0_brandGray-normalLight] flex flex-col">
        <div class="relative w-full h-[600px] overflow-hidden flex justify-center items-start gap-5 mb-10">
            <!-- 左側圖片 -->
            <div class="w-[720px] h-[600px] flex-shrink-0">
                <a href=""><img src="{{ asset('images/home_test1.JPG') }}" alt="" class="w-full h-full object-cover"></a>
            </div>
            <!-- 中間圖片 -->
            <div class="w-[720px] h-[600px] flex-shrink-0 z-10">
                <a href=""><img src="{{ asset('images/home_test2.JPG') }}" alt="" class="w-full h-full object-cover"></a>
            </div>
            <!-- 右側圖片 -->
            <div class="w-[720px] h-[600px] flex-shrink-0">
                <a href=""><img src="{{ asset('images/home_test3.JPG') }}" alt="" class="w-full h-full object-cover"></a>
            </div>
        </div>


        <!-- progress + btn -->
        <div class="max-w-[1440px] h-[50px] flex justify-senter items-center px-[100px]">
            <div class="flex justify-center items-center me-[300px]">
                <div class="step1 w-[120px] h-[1px] bg-brandRed-normal"></div>
                <div class="step1 w-[12px] h-[12px] bg-brandRed-normal rounded-full"></div>
                <div class="step2 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                <div class="step2 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                <div class="step3 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                <div class="step3 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                <div class="step4 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                <div class="step4 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                <div class="step5 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                <div class="step5 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
                <div class="step6 w-[120px] h-[1px] bg-brandGray-normalLight"></div>
                <div class="step6 w-[12px] h-[12px] bg-brandGray-normalLight rounded-full"></div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <button type="button" class="w-[50px] h-[50px] border-2 rounded-full border-brandGray-normalLight flex justify-center items-center"><span class="w-5 h-5 text-brandGray-normalLight icon-[ep--arrow-left-bold]"></span></button>
                <button type="button" class="w-[50px] h-[50px] border-2 rounded-full border-brandRed-normal flex justify-center items-center"><span class="w-5 h-5 text-brandRed-normal icon-[ep--arrow-right-bold]"></span></button>
            </div>
        </div>
    </section>

    <!-- 主打商品 -->
    <section class="h-[1050px] flex justify-center items-center">
        <div class="w-[50%] h-full  flex justify-center items-center">
            <!-- 商品圖＋描述＋價錢 -->
            <div class="w-[600px] h-[920px] flex flex-col justify-center items-center gap-5">
                <div class="w-full h-10 flex  justify-start items-center gap-5">
                    <p class="text-[30px] font-black text-brandGray-normal">主打商品</p>
                    <div class="w-[90px] h-[36px] font-semibold bg-brandRed-normal flex justify-center items-center text-brandGray-lightLight">10% OFF</div>
                </div>
                <div class="w-full h-[580px]">
                    <img src="{{ asset('images/home_test5.JPG')}}" alt="" class="w-full h-full object-contain">
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
                        <button type="button" class="w-[300px] h-[58px] text-[24px] text-semibold text-brandGray-lightLight flex justify-center items-center bg-brandRed-normal rounded-md hover:bg-brandRed-lightActive">直接購買&nbsp;<span class="w-[24px] h-[24px] text-brandGray-lightLight icon-[ep--arrow-right-bold]"></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-[50%] h-full ps-[55px] overflow-hidden">
            <!-- 商品圖＋轉盤 -->
            <div class="absolute top-[158px] left-[180px] w-[790px] h-[810px] border-[90px] border-brandRed-light rounded-full"></div>
        </div>


    </section>
</div>


@endsection

@push('scripts')
<!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
@endpush