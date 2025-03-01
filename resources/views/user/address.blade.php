@extends('layouts.with_sidebar')

@section('title', '地址管理')
@section('meta_description', '管理您的收貨地址')
@section('meta_keywords', '地址管理, 收貨地址, 會員中心')
@section('breadcrumb_title', '地址管理')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGray-normal mb-3 sm:mb-0">地址管理</h1>
            <button type="button" class="px-3 py-1.5 sm:px-4 sm:py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal whitespace-nowrap">
                新增地址
            </button>
        </div>
        
        <!-- 地址列表 -->
        <div class="space-y-4">
            <!-- 地址 1 -->
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-4 flex flex-wrap justify-between items-center">
                    <div class="flex items-center">
                        <i class="icon-[mdi--map-marker] w-6 h-6 text-brandGray-normal mr-2"></i>
                        <h3 class="font-medium text-brandGray-normal">住家地址</h3>
                        <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brandBlue-light text-brandBlue-normal">
                            預設
                        </span>
                    </div>
                    <div class="flex space-x-2 mt-2 sm:mt-0">
                        <button class="text-brandGray-normalLight hover:text-brandGray-normal">
                            <i class="icon-[mdi--pencil] w-5 h-5"></i>
                        </button>
                        <button class="text-brandGray-normalLight hover:text-brandRed-normal">
                            <i class="icon-[mdi--delete] w-5 h-5"></i>
                        </button>
                    </div>
                </div>
                <div class="p-4">
                    <div class="space-y-2">
                        <p class="text-brandGray-normal">王小明</p>
                        <p class="text-brandGray-normal">0912-345-678</p>
                        <p class="text-brandGray-normal">台北市信義區信義路五段7號</p>
                        <p class="text-sm text-brandGray-normalLight">郵遞區號: 110</p>
                    </div>
                </div>
            </div>
            
            <!-- 地址 2 -->
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-4 flex flex-wrap justify-between items-center">
                    <div class="flex items-center">
                        <i class="icon-[mdi--map-marker] w-6 h-6 text-brandGray-normal mr-2"></i>
                        <h3 class="font-medium text-brandGray-normal">公司地址</h3>
                    </div>
                    <div class="flex space-x-2 mt-2 sm:mt-0">
                        <button class="text-brandGray-normalLight hover:text-brandGray-normal">
                            <i class="icon-[mdi--pencil] w-5 h-5"></i>
                        </button>
                        <button class="text-brandGray-normalLight hover:text-brandRed-normal">
                            <i class="icon-[mdi--delete] w-5 h-5"></i>
                        </button>
                    </div>
                </div>
                <div class="p-4">
                    <div class="space-y-2">
                        <p class="text-brandGray-normal">王小明</p>
                        <p class="text-brandGray-normal">0912-345-678</p>
                        <p class="text-brandGray-normal">台北市內湖區瑞光路513號</p>
                        <p class="text-sm text-brandGray-normalLight">郵遞區號: 114</p>
                    </div>
                    <div class="mt-3">
                        <button class="text-sm text-brandBlue-normal hover:text-brandBlue-normalHover">設為預設</button>
                    </div>
                </div>
            </div>
            
            <!-- 新增地址說明 -->
            <div class="mt-8 p-4 bg-brandGray-lightLight rounded-lg">
                <h3 class="text-lg font-medium text-brandGray-normal mb-2">地址管理說明</h3>
                <p class="text-sm text-brandGray-normalLight mb-2">
                    您可以新增多個收貨地址，並設定一個作為預設地址。預設地址將在結帳時自動選擇。
                </p>
                <p class="text-sm text-brandGray-normalLight">
                    每個地址都應包含完整的聯絡資訊，包括收件人姓名、電話號碼和詳細地址。
                </p>
            </div>
        </div>
    </div>
@endsection 