@extends('layouts.app')

@section('title', '服飾')
@section('meta_description', '商品分類：服飾')
@section('meta_keywords', '衣服, 服飾')

@section('content')
<section class="mt-[150px]">
    <!-- 麵包屑 -->
    <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '服飾'],
         ]" />

    <!-- 標題文字 -->
    <section class="w-full">
        <!-- tabs -->
        <x-tabs :tabs="['短袖', '長袖／毛衣', '外套／夾克']">
            <div x-show="activeTab === 0">
                <p>123</p>
            </div>
            <div x-show="activeTab === 1">
                <!-- 商品卡片區 長袖 -->
                <section class="product-section w-full flex flex-col justify-start items-center mt-36 md:mt-20">
                    <div class="w-full md:w-[770px] lg:w-[1230px] h-[418px] grid md:grid-cols-3 lg:grid-cols-4 justify-center items-center gap-5">
                        @foreach($longs as $index => $long)
                        <!-- 商品 -->
                        <a href="{{route('product_details')}}" class="product-card w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-10 mb-52 md:mb-20">
                            <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                                <img src="{{$long->product_img}}" alt="{{$long->product_name}}" class="w-full h-[250px] md:h-full object-cover">
                            </div>
                            <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                                <p class="text-brandGray-darker">{{$long->product_name}}</p>
                                <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">{{$long->product_price}}</span></p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
            </div>
            <div x-show="activeTab === 2">
                <!-- 商品卡片區 外套 -->
                <section class="product-section w-full flex flex-col justify-start items-center mt-36 md:mt-20">
                    <div class="w-full md:w-[770px] lg:w-[1230px] h-[418px] grid md:grid-cols-3 lg:grid-cols-4 justify-center items-center gap-5">
                        @foreach($jackets as $index => $jacket)
                        <!-- 商品 -->
                        <a href="{{route('product_details')}}" class="product-card w-[250px] lg:w-[300px] h-[250px] md:h-full flex flex-col justify-center items-center hover:opacity-80 gap-10 mb-52 md:mb-20">
                            <div class="relative w-full h-[250px] lg:w-[300px] lg:h-[300px]">
                                <img src="{{$jacket->product_img}}" alt="{{$jacket->product_name}}" class="w-full h-[250px] md:h-full object-cover">
                            </div>
                            <div class="w-full h-[74px] flex flex-col justify-center items-start gap-5 text-[20px]">
                                <p class="text-brandGray-darker">{{$jacket->product_name}}</p>
                                <p class="text-brandGray-normal text-[18px]">NT$&nbsp;<span id="price">{{$jacket->product_price}}</span></p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>
            </div>
        </x-tabs>
    </section>
</section>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        function updateSectionHeight() {
            let totalItems = $(".product-card").length; // 取得商品總數
            let itemsPerRow = 4; // 預設一列 4 個商品（對應 lg:grid-cols-4）
            let windowWidth = $(window).width();

            // RWD 判斷：不同螢幕寬度的 `grid-cols`
            if (windowWidth < 1024) { // md:grid-cols-3
                itemsPerRow = 3;
            }
            if (windowWidth < 768) { // 手機顯示單列
                itemsPerRow = 1;
            }

            // 計算行數（無條件進位）
            let totalRows = Math.ceil(totalItems / itemsPerRow);
            let newHeight = totalRows * 250; // 每列 1600px

            // 設定高度
            $(".product-section").css("height", newHeight + "px");
        }

        // 初始化
        updateSectionHeight();

        // 監聽視窗縮放，調整高度
        $(window).resize(function() {
            updateSectionHeight();
        });
    });
</script>
@endpush