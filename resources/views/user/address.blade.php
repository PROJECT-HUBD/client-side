@extends('layouts.with_sidebar')

@section('title', '收件地址')
@section('meta_description', '管理您的收件地址')
@section('meta_keywords', '收件地址, 配送地址, 會員中心')
@section('breadcrumb_title', '收件地址')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-brandGray-normal">收件地址</h1>
            <button type="button" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                新增地址
            </button>
        </div>
        
        <!-- 地址列表 -->
        <div class="space-y-6">
            <!-- 地址 1 -->
            <div class="border border-brandGray-light rounded-lg p-4">
                <div class="flex flex-wrap md:flex-nowrap justify-between items-start">
                    <div>
                        <div class="flex items-center mb-2">
                            <h3 class="text-lg font-semibold text-brandGray-normal">住家地址</h3>
                            <span class="ml-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brandRed-light text-brandRed-normal">
                                預設地址
                            </span>
                        </div>
                        <p class="text-sm text-brandGray-normalLight">王小明</p>
                        <p class="text-sm text-brandGray-normalLight">0912-345-678</p>
                        <p class="text-sm text-brandGray-normalLight">台北市信義區信義路五段7號</p>
                        <p class="text-sm text-brandGray-normalLight">郵遞區號: 110</p>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button type="button" class="px-3 py-1.5 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">編輯</button>
                        <button type="button" class="px-3 py-1.5 border border-brandRed-lightActive text-brandRed-normal rounded-md hover:bg-brandRed-light">刪除</button>
                    </div>
                </div>
            </div>
            
            <!-- 地址 2 -->
            <div class="border border-brandGray-light rounded-lg p-4">
                <div class="flex flex-wrap md:flex-nowrap justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-brandGray-normal mb-2">公司地址</h3>
                        <p class="text-sm text-brandGray-normalLight">王小明</p>
                        <p class="text-sm text-brandGray-normalLight">0912-345-678</p>
                        <p class="text-sm text-brandGray-normalLight">台北市內湖區瑞光路513巷</p>
                        <p class="text-sm text-brandGray-normalLight">郵遞區號: 114</p>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button type="button" class="px-3 py-1.5 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">設為預設</button>
                        <button type="button" class="px-3 py-1.5 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">編輯</button>
                        <button type="button" class="px-3 py-1.5 border border-brandRed-lightActive text-brandRed-normal rounded-md hover:bg-brandRed-light">刪除</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 新增地址表單 (預設隱藏) -->
        <div class="mt-8 border border-brandGray-light rounded-lg p-6 hidden">
            <h2 class="text-xl font-semibold text-brandGray-normal mb-4">新增收件地址</h2>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-brandGray-normal mb-1">收件人姓名</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-brandGray-normal mb-1">聯絡電話</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="address_type" class="block text-sm font-medium text-brandGray-normal mb-1">地址類型</label>
                    <select id="address_type" name="address_type" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                        <option value="home">住家地址</option>
                        <option value="company">公司地址</option>
                        <option value="other">其他</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div>
                        <label for="city" class="block text-sm font-medium text-brandGray-normal mb-1">縣市</label>
                        <select id="city" name="city" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                            <option value="taipei">台北市</option>
                            <option value="new_taipei">新北市</option>
                            <option value="taichung">台中市</option>
                            <!-- 其他縣市選項 -->
                        </select>
                    </div>
                    <div>
                        <label for="district" class="block text-sm font-medium text-brandGray-normal mb-1">區域</label>
                        <select id="district" name="district" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                            <option value="xinyi">信義區</option>
                            <option value="daan">大安區</option>
                            <option value="zhongshan">中山區</option>
                            <!-- 其他區域選項 -->
                        </select>
                    </div>
                    <div>
                        <label for="postal_code" class="block text-sm font-medium text-brandGray-normal mb-1">郵遞區號</label>
                        <input type="text" id="postal_code" name="postal_code" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-brandGray-normal mb-1">詳細地址</label>
                    <input type="text" id="address" name="address" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="is_default" name="is_default" class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    <label for="is_default" class="ml-2 block text-sm text-brandGray-normal">設為預設地址</label>
                </div>
                
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light">取消</button>
                    <button type="submit" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">儲存地址</button>
                </div>
            </form>
        </div>
    </div>
@endsection 