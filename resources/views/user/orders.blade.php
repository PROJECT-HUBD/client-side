@extends('layouts.with_sidebar')

@section('title', '我的訂單')
@section('meta_description', '查看和管理您的所有訂單')
@section('meta_keywords', '訂單, 購買記錄, 會員中心')
@section('breadcrumb_title', '我的訂單')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-brandGrey-normal mb-6">我的訂單</h1>
        
        <!-- 訂單篩選與搜尋 -->
        <div class="mb-6">
            <div class="flex flex-col md:flex-row flex-wrap">
                <!-- 狀態篩選 -->
                <div class="w-full md:w-auto md:flex-grow">
                    <!-- 大螢幕用按鈕篩選 -->
                    <div class="hidden md:block mb-4">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-brandGrey-normal font-medium mr-2">狀態：</span>
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('user.orders', ['status' => 'all']) }}" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md">全部</a>
                                <a href="{{ route('user.orders', ['status' => 'pending']) }}" class="px-4 py-2 bg-brandGrey-light text-brandGrey-normal rounded-md hover:bg-brandGrey-lightHover">待付款</a>
                                <a href="{{ route('user.orders', ['status' => 'processing']) }}" class="px-4 py-2 bg-brandGrey-light text-brandGrey-normal rounded-md hover:bg-brandGrey-lightHover">處理中</a>
                                <a href="{{ route('user.orders', ['status' => 'shipped']) }}" class="px-4 py-2 bg-brandGrey-light text-brandGrey-normal rounded-md hover:bg-brandGrey-lightHover">已出貨</a>
                                <a href="{{ route('user.orders', ['status' => 'completed']) }}" class="px-4 py-2 bg-brandGrey-light text-brandGrey-normal rounded-md hover:bg-brandGrey-lightHover">已完成</a>
                                <a href="{{ route('user.orders', ['status' => 'cancelled']) }}" class="px-4 py-2 bg-brandGrey-light text-brandGrey-normal rounded-md hover:bg-brandGrey-lightHover">已取消</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 小螢幕用下拉選單篩選 -->
                    <div class="md:hidden mb-4">
                        <label for="status_filter" class="block text-brandGrey-normal font-medium mb-2">狀態：</label>
                        <select id="status_filter" class="w-full px-3 py-2 border border-brandGrey-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal pr-8" onchange="window.location.href=this.value">
                            <option value="{{ route('user.orders', ['status' => 'all']) }}">全部</option>
                            <option value="{{ route('user.orders', ['status' => 'pending']) }}">待付款</option>
                            <option value="{{ route('user.orders', ['status' => 'processing']) }}">處理中</option>
                            <option value="{{ route('user.orders', ['status' => 'shipped']) }}">已出貨</option>
                            <option value="{{ route('user.orders', ['status' => 'completed']) }}">已完成</option>
                            <option value="{{ route('user.orders', ['status' => 'cancelled']) }}">已取消</option>
                        </select>
                    </div>
                </div>
                
                <!-- 搜尋欄位 -->
                <div class="relative w-full md:w-64 lg:w-72 xl:w-80 md:mt-0 md:ml-4">
                    <input type="text" placeholder="搜尋訂單編號" class="w-full pl-10 pr-4 py-2 border border-brandGrey-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--magnify] w-5 h-5 text-brandGrey-normalLight absolute left-3 top-2.5"></i>
                </div>
            </div>
        </div>
        
        <!-- 訂單列表 -->
        <div class="space-y-6">
            <!-- 訂單 1 - 已完成 -->
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="bg-brandGrey-lightLight p-4 border-b border-brandGrey-light">
                    <div class="flex flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-brandGrey-normal">訂單編號: ORD-20231105-001</h3>
                            <p class="text-sm text-brandGrey-normalLight">訂購日期: 2023-11-05 14:30</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-brandGrey-light text-brandGrey-normal">
                                已完成
                            </span>
                            <p class="text-sm font-medium text-brandGrey-normal mt-1">NT$ 2,580</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="space-y-4">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">簡約風格長袖上衣</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: M / 顏色: 黑色</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 1,280</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">休閒寬鬆牛仔褲</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: 30 / 顏色: 藍色</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 1,300</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between items-center border-t border-brandGrey-light pt-4">
                        <div class="mb-3 sm:mb-0">
                            <p class="text-sm text-brandGrey-normalLight">付款方式: 信用卡</p>
                            <p class="text-sm text-brandGrey-normalLight">配送方式: 宅配</p>
                        </div>
                        <div class="flex w-full sm:w-auto space-x-2">
                            <a href="{{ route('user.orders.detail', 1) }}" class="flex-1 sm:flex-none px-4 py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light">查看詳情</a>
                            <a href="#" class="flex-1 sm:flex-none px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">再次購買</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 訂單 2 - 處理中 -->
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="bg-brandGrey-lightLight p-4 border-b border-brandGrey-light">
                    <div class="flex flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-brandGrey-normal">訂單編號: ORD-20231028-002</h3>
                            <p class="text-sm text-brandGrey-normalLight">訂購日期: 2023-10-28 09:15</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-brandBlue-light text-brandBlue-normal">
                                處理中
                            </span>
                            <p class="text-sm font-medium text-brandGrey-normal mt-1">NT$ 1,750</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="space-y-4">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">時尚針織毛衣</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: L / 顏色: 米色</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 1,750</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between items-center border-t border-brandGrey-light pt-4">
                        <div class="mb-3 sm:mb-0">
                            <p class="text-sm text-brandGrey-normalLight">付款方式: 信用卡</p>
                            <p class="text-sm text-brandGrey-normalLight">配送方式: 宅配</p>
                        </div>
                        <div class="flex w-full sm:w-auto space-x-2">
                            <a href="{{ route('user.orders.detail', 2) }}" class="flex-1 sm:flex-none px-4 py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light">查看詳情</a>
                            <a href="#" class="flex-1 sm:flex-none px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">查詢物流</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 訂單 3 - 待付款 -->
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="bg-brandGrey-lightLight p-4 border-b border-brandGrey-light">
                    <div class="flex flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-brandGrey-normal">訂單編號: ORD-20231115-003</h3>
                            <p class="text-sm text-brandGrey-normalLight">訂購日期: 2023-11-15 16:45</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-brandRed-light text-brandRed-normal">
                                待付款
                            </span>
                            <p class="text-sm font-medium text-brandGrey-normal mt-1">NT$ 3,200</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="space-y-4">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">高級皮革外套</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: XL / 顏色: 棕色</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 3,200</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between items-center border-t border-brandGrey-light pt-4">
                        <div class="mb-3 sm:mb-0">
                            <p class="text-sm text-brandGrey-normalLight">付款方式: 待選擇</p>
                            <p class="text-sm text-brandGrey-normalLight">配送方式: 宅配</p>
                        </div>
                        <div class="flex w-full sm:w-auto space-x-2">
                            <button class="flex-1 sm:flex-none px-4 py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light">查看詳情</button>
                            <button class="flex-1 sm:flex-none px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">前往付款</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 訂單 4 - 已出貨 -->
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="bg-brandGrey-lightLight p-4 border-b border-brandGrey-light">
                    <div class="flex flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-brandGrey-normal">訂單編號: ORD-20231110-004</h3>
                            <p class="text-sm text-brandGrey-normalLight">訂購日期: 2023-11-10 10:20</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-brandBlue-light text-brandBlue-normal">
                                已出貨
                            </span>
                            <p class="text-sm font-medium text-brandGrey-normal mt-1">NT$ 980</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="space-y-4">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">休閒棉質T恤</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: S / 顏色: 白色</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 2</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 980</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between items-center border-t border-brandGrey-light pt-4">
                        <div class="mb-3 sm:mb-0">
                            <p class="text-sm text-brandGrey-normalLight">付款方式: 信用卡 (未付款)</p>
                            <p class="text-sm text-brandGrey-normalLight">配送方式: 宅配</p>
                        </div>
                        <div class="flex w-full sm:w-auto space-x-2">
                            <a href="{{ route('user.orders.detail', 4) }}" class="flex-1 sm:flex-none px-4 py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light">查看詳情</a>
                            <a href="#" class="flex-1 sm:flex-none px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">前往付款</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 訂單 5 - 已取消 -->
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="bg-brandGrey-lightLight p-4 border-b border-brandGrey-light">
                    <div class="flex flex-wrap justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-brandGrey-normal">訂單編號: ORD-20231001-005</h3>
                            <p class="text-sm text-brandGrey-normalLight">訂購日期: 2023-10-01 18:30</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-brandGrey-light text-brandGrey-normal">
                                已取消
                            </span>
                            <p class="text-sm font-medium text-brandGrey-normal mt-1">NT$ 1,450</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <div class="space-y-4">
                        <div class="flex flex-wrap md:flex-nowrap items-center gap-4">
                            <div class="w-20 h-20 bg-brandGrey-light rounded-md flex-shrink-0">
                                <img src="https://via.placeholder.com/80" alt="商品圖片" class="w-full h-full object-cover rounded-md" loading="lazy">
                            </div>
                            <div class="flex-grow">
                                <h4 class="text-md font-medium text-brandGrey-normal">運動休閒鞋</h4>
                                <p class="text-sm text-brandGrey-normalLight">尺寸: 42 / 顏色: 黑白</p>
                                <p class="text-sm text-brandGrey-normalLight">數量: 1</p>
                            </div>
                            <div class="text-right">
                                <p class="text-md font-medium text-brandGrey-normal">NT$ 1,450</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-wrap justify-between items-center border-t border-brandGrey-light pt-4">
                        <div class="mb-3 sm:mb-0">
                            <p class="text-sm text-brandGrey-normalLight">取消原因: 尺寸選擇錯誤</p>
                            <p class="text-sm text-brandGrey-normalLight">取消日期: 2023-10-02</p>
                        </div>
                        <div class="flex w-full sm:w-auto space-x-2">
                            <a href="{{ route('user.orders.detail', 5) }}" class="flex-1 sm:flex-none px-4 py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light">查看詳情</a>
                            <a href="#" class="flex-1 sm:flex-none px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover">重新購買</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 分頁 -->
        <div class="mt-8 flex justify-center">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-4 py-2 border border-brandGrey-lightActive bg-white text-brandGrey-normal rounded-l-md hover:bg-brandGrey-light">上一頁</a>
                <a href="#" class="px-4 py-2 border-t border-b border-brandGrey-lightActive bg-brandBlue-normal text-white hover:bg-brandBlue-normalHover">1</a>
                <a href="#" class="px-4 py-2 border border-brandGrey-lightActive bg-white text-brandGrey-normal rounded-r-md hover:bg-brandGrey-light">下一頁</a>
            </nav>
        </div>
    </div>
@endsection 