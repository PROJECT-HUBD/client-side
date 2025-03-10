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
    <section class="max-w-[1440px]">
        <div class="w-full flex flex-col justify-center items-center text-brandGray-normal mb-[100px]">
            <p class="text-[30px]">364</p>
            <p class="text-[30px] mb-[20px]">HAPPY UNBIRTHDAY</p>
            <p class="text-[20px] font-light">SINCE 2020</p>
        </div>

        <!-- 商品卡片區 -->
        <section class="w-full h-[4800px] md:h-[1580px] lg:h-[1240px] flex flex-col justify-start items-center mb-[60px]">
            <!-- 商品十二個 -->
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
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品5 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品6 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品7 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品8 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品9 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>
                <!-- 商品10 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品11 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
                    <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                        <img src="{{asset('images/home_test6.JPG')}}" alt="飾品商品圖" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                        <p class="text-brandGray-darker">Navajo 綠松石十字星戒</p>
                        <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">5980</span></p>
                    </div>
                </a>

                <!-- 商品12 -->
                <a href="" class="w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-5">
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
    </section>
</section>
@endsection

@push('scripts')
<!-- jQuery 內容 -->

@endpush