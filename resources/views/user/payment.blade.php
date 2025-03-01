@extends('layouts.with_sidebar')

@section('title', '付款資訊')
@section('meta_description', '管理您的付款方式')
@section('meta_keywords', '付款資訊, 信用卡, 會員中心')
@section('breadcrumb_title', '付款資訊')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-brandGray-normal">付款資訊</h1>
            <button type="button" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                新增付款方式
            </button>
        </div>
        
        <!-- 付款方式列表 -->
        <div class="space-y-6">
            <!-- 信用卡 -->
            <div class="border border-brandGray-light rounded-lg p-4">
                <div class="flex flex-wrap md:flex-nowrap justify-between items-start">
                    <div>
                        <div class="flex items-center mb-2">
                            <i class="icon-[mdi--credit-card] w-6 h-6 text-brandBlue-normal"></i>
                            <h3 class="ml-2 text-lg font-semibold text-brandGray-normal">信用卡</h3>
                            <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brandRed-light text-brandRed-normal">
                                預設付款方式
                            </span>
                        </div>
                        <p class="text-sm text-brandGray-normalLight">卡號: **** **** **** 1234</p>
                        <p class="text-sm text-brandGray-normalLight">持卡人: 王小明</p>
                        <p class="text-sm text-brandGray-normalLight">到期日: 12/25</p>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button type="button" class="px-3 py-1.5 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">編輯</button>
                        <button type="button" class="px-3 py-1.5 border border-brandRed-lightActive text-brandRed-normal rounded-md hover:bg-brandRed-light">刪除</button>
                    </div>
                </div>
            </div>
            
            <!-- LINE Pay -->
            <div class="border border-brandGray-light rounded-lg p-4">
                <div class="flex flex-wrap md:flex-nowrap justify-between items-start">
                    <div>
                        <div class="flex items-center mb-2">
                            <i class="icon-[mdi--line] w-6 h-6 text-brandGray-normal"></i>
                            <h3 class="ml-2 text-lg font-semibold text-brandGray-normal">LINE Pay</h3>
                        </div>
                        <p class="text-sm text-brandGray-normalLight">連結帳號: user123@gmail.com</p>
                        <p class="text-sm text-brandGray-normalLight">連結時間: 2023-10-15</p>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button type="button" class="px-3 py-1.5 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">設為預設</button>
                        <button type="button" class="px-3 py-1.5 border border-brandRed-lightActive text-brandRed-normal rounded-md hover:bg-brandRed-light">解除連結</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 新增付款方式表單 (預設隱藏) -->
        <div class="mt-8 border border-brandGray-light rounded-lg p-6 hidden">
            <h2 class="text-xl font-semibold text-brandGray-normal mb-4">新增付款方式</h2>
            
            <!-- 付款方式選擇 -->
            <div class="mb-6">
                <div class="flex space-x-4">
                    <button type="button" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md">信用卡</button>
                    <button type="button" class="px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">LINE Pay</button>
                    <button type="button" class="px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">Apple Pay</button>
                </div>
            </div>
            
            <!-- 信用卡表單 -->
            <form>
                <div class="mb-4">
                    <label for="card_number" class="block text-sm font-medium text-brandGray-normal mb-1">卡號</label>
                    <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="card_holder" class="block text-sm font-medium text-brandGray-normal mb-1">持卡人姓名</label>
                        <input type="text" id="card_holder" name="card_holder" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    </div>
                    <div>
                        <label for="expiry_date" class="block text-sm font-medium text-brandGray-normal mb-1">到期日 (MM/YY)</label>
                        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="cvv" class="block text-sm font-medium text-brandGray-normal mb-1">安全碼 (CVV)</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123" class="w-1/4 px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="is_default_payment" name="is_default_payment" class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    <label for="is_default_payment" class="ml-2 block text-sm text-brandGray-normal">設為預設付款方式</label>
                </div>
                
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">取消</button>
                    <button type="submit" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">儲存付款方式</button>
                </div>
            </form>
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