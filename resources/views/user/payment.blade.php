@extends('layouts.with_sidebar')

@section('title', '付款資訊')
@section('meta_description', '管理您的付款方式')
@section('meta_keywords', '付款資訊, 信用卡, 會員中心')
@section('breadcrumb_title', '付款資訊')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGray-normal mb-3 sm:mb-0">付款資訊</h1>
            <button type="button" class="px-3 py-1.5 sm:px-4 sm:py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal whitespace-nowrap">
                新增付款方式
            </button>
        </div>
        
        <!-- 付款方式列表 -->
        <div class="space-y-4">
            <!-- 信用卡 1 -->
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-4 flex flex-wrap justify-between items-center">
                    <div class="flex items-center">
                        <i class="icon-[mdi--credit-card] w-6 h-6 text-brandGray-normal mr-2"></i>
                        <h3 class="font-medium text-brandGray-normal">信用卡</h3>
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
                        <p class="text-brandGray-normal">**** **** **** 1234</p>
                        <p class="text-sm text-brandGray-normalLight">到期日: 12/25</p>
                        <p class="text-sm text-brandGray-normalLight">持卡人: 王小明</p>
                    </div>
                </div>
            </div>
            
            <!-- 信用卡 2 -->
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="bg-brandGray-lightLight p-4 flex flex-wrap justify-between items-center">
                    <div class="flex items-center">
                        <i class="icon-[mdi--credit-card] w-6 h-6 text-brandGray-normal mr-2"></i>
                        <h3 class="font-medium text-brandGray-normal">信用卡</h3>
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
                        <p class="text-brandGray-normal">**** **** **** 5678</p>
                        <p class="text-sm text-brandGray-normalLight">到期日: 09/24</p>
                        <p class="text-sm text-brandGray-normalLight">持卡人: 王小明</p>
                    </div>
                    <div class="mt-3">
                        <button class="text-sm text-brandBlue-normal hover:text-brandBlue-normalHover">設為預設</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 付款安全說明 -->
        <div class="mt-8 p-4 bg-brandGray-lightLight rounded-lg">
            <h3 class="text-lg font-medium text-brandGray-normal mb-2">付款安全說明</h3>
            <p class="text-sm text-brandGray-normalLight mb-2">
                我們使用業界標準的加密技術來保護您的付款資訊安全。您的信用卡資訊將被加密存儲，我們不會儲存您的 CVV 安全碼。
            </p>
            <p class="text-sm text-brandGray-normalLight">
                如有任何付款相關問題，請聯繫我們的客服團隊：service@example.com
            </p>
        </div>
    </div>
@endsection 