@extends('layouts.app')

@section('title', '服飾')
@section('meta_description', '商品分類：服飾')
@section('meta_keywords', '衣服, 服飾')

@section('content')
<section class="mt-[170px]">
    <!-- 麵包屑 -->
    <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '服飾'],
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
            $tabs = ['短袖', '長袖／毛衣', '外套／夾克'];
            @endphp

            <x-tabs :tabs="$tabs">
                <div class="tab-content mb-10" id="tab-0"></div>
                <div class="tab-content mb-10 hidden" id="tab-1"></div>
                <div class="tab-content mb-10 hidden" id="tab-2"></div>
            </x-tabs>
        </div>

        <!-- 商品卡片區 -->
        <section class="w-full h-[890px] grid grid-cols-4 px-[105px] gap-[10px] mb-[120px]">
            <!-- 第一排 -->
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>

            <!-- 第二排 -->
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
            <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                <div class="w-full h-[300px]"><img src="{{asset('images/home_test5.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                    <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                    <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                </div>
            </a>
        </section>

        <!-- 為您推薦區 -->
        <section class="w-full h-[480px] flex flex-col justify-center items-center gap-5">
            <div class="w-full px-[105px]  flex justify-start items-center"><p class="text-[30px] text-brandGray-normal font-semibold">為您推薦</p></div>
            <section class="w-full  grid grid-cols-4 px-[105px] gap-[10px] mb-[120px]">
                <!-- 第一排 -->
                <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test7.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                        <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
                <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test7.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                        <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
                <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test7.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                        <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
                <a href="" class="relative w-[300px] h-[418px] col-span-1 flex flex-col justify-start items-center gap-5 hover:opacity-90">
                    <div class="w-full h-[300px]"><img src="{{asset('images/home_test7.JPG')}}" alt="商品圖" class="w-full h-full object-cover"></div>
                    <div class="absolute top-0 right-0 w-[90px] h-[36px] bg-brandRed-normal text-brandGray-lightLight text-[16px] flex justify-center items-center">10% OFF</div>
                    <div class="w-full h-[74px] flex flex-col justify-center item-start test-[20px] gap-5">
                        <p class="prodsTitle text-brandGray-normal">Navajo 綠松石十字星戒</p>
                        <p><span class="price text-brandGray-normalLight line-through me-4">NT$&nbsp;5980</span><span class="priceDiscount text-brandRed-normal font-semibold">NT$&nbsp;5980</span></p>
                    </div>
                </a>
            </section>
        </section>

    </section>
</section>
@endsection

@push('scripts')
<!-- jQuery 內容 -->

@endpush