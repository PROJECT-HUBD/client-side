@extends('layouts.app')

@section('title', '飾品')
@section('meta_description', '商品分類：飾品')
@section('meta_keywords', 'accessories, 飾品')

@section('content')
<section class="mt-[150px]">
    <!-- 麵包屑 -->
    <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '飾品'],
         ]" />

    <!-- 標題文字 -->
    <section class="w-[1440px]">
        <div class="w-full flex flex-col justify-center items-center text-brandGray-normal mb-[100px]">
            <p class="text-[30px]">364</p>
            <p class="text-[30px] mb-[20px]">HAPPY UNBIRTHDAY</p>
            <p class="text-[20px] font-light">SINCE 2020</p>
        </div>

        <!-- tabs -->
        <div class="w-full h-[54px] flex justify-center items-center">
            @php
            $tabs = ['異世界2000', '水晶晶戒指'];
            @endphp

            <x-tabs :tabs="$tabs">
                <div class="tab-content mb-10" id="tab-0"></div>
                <div class="tab-content mb-10 hidden" id="tab-1"></div>
            </x-tabs>
        </div>

        <!-- 商品卡片區 -->
        <section class="w-full h-[890px] grid grid-cols-4 px-[105px] gap-[10px] mb-[120px]">
            <!-- 商品1 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品2 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品3 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品4 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>

            <!-- 第二排 -->
            <!-- 商品5 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品6 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品7 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
            <!-- 商品8 -->
            <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test10.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                    <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                </div>
            </a>
        </section>

        <!-- 為您推薦區 -->
        <section class="w-full h-[480px] flex flex-col justify-center items-center gap-5">
            <div class="w-full px-[105px]  flex justify-start items-center">
                <p class="text-[30px] text-brandGray-normal font-semibold">為您推薦</p>
            </div>
            <section class="w-full  grid grid-cols-4 px-[105px] gap-[10px] mb-[120px]">
                <!-- 商品1 -->
                <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test11.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                    </div>
                </a>
                <!-- 商品2 -->
                <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test11.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                    </div>
                </a>
                <!-- 商品3 -->
                <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test11.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                    </div>
                </a>
                <!-- 商品4 -->
                <a href="" class="w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test11.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="text-brandGray-darker text-[20px]">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span>5980</span></p>
                    </div>
            </section>
        </section>

    </section>
</section>
@endsection

@push('scripts')
<!-- jQuery 內容 -->

@endpush