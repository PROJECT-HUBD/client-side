@extends('layouts.with_sidebar')

@section('title', '訂單詳情')
@section('meta_description', '查看您的訂單詳細資訊')
@section('meta_keywords', '訂單詳情, 購買記錄, 會員中心')
@section('breadcrumb_title', '訂單詳情')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGrey-normal">訂單詳情</h1>
            <a href="{{ route('user.orders') }}" class="px-3 py-1.5 sm:px-4 sm:py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light">
                返回訂單列表
            </a>
        </div>
        
        <!-- 訂單狀態追蹤 -->
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGrey-normal mb-4">訂單狀態</h2>
            <div class="relative">
                <!-- 進度條 -->
                <div class="hidden sm:block absolute left-0 top-1/2 w-full h-1 bg-brandGrey-light -translate-y-1/2 z-0"></div>
                
                <!-- 狀態點 -->
                <div class="flex justify-between relative z-10">
                    @php
                        $status = '';
                        $statusClass = '';
                        
                        if ($id == 1) {
                            $status = '已送達';
                            $statusClass = 'bg-brandBlue-normal text-white';
                        } elseif ($id == 2) {
                            $status = '已出貨';
                            $statusClass = 'bg-brandGreen-normal text-white';
                        } elseif ($id == 3) {
                            $status = '處理中';
                            $statusClass = 'bg-brandYellow-normal text-white';
                        } elseif ($id == 4) {
                            $status = '待付款';
                            $statusClass = 'bg-brandGrey-normal text-white';
                        } elseif ($id == 5) {
                            $status = '已取消';
                            $statusClass = 'bg-brandGrey-normal text-white';
                        }
                    @endphp
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-brandBlue-normal text-white flex items-center justify-center mb-2">
                            <i class="icon-[mdi--check] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGrey-normal text-center">訂單成立</span>
                        <span class="text-xs text-brandGrey-normalLight text-center">{{ $id == 5 ? '2023/10/01' : '2023/06/15' }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $id >= 2 && $id != 5 ? 'bg-brandBlue-normal text-white' : 'bg-brandGrey-light text-brandGrey-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $id >= 2 && $id != 5 ? 'check' : 'credit-card-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGrey-normal text-center">付款完成</span>
                        <span class="text-xs text-brandGrey-normalLight text-center">{{ $id >= 2 && $id != 5 ? '2023/06/15' : '-' }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $id >= 2 && $id != 5 ? 'bg-brandBlue-normal text-white' : 'bg-brandGrey-light text-brandGrey-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $id >= 2 && $id != 5 ? 'check' : 'package-variant-closed' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGrey-normal text-center">訂單處理</span>
                        <span class="text-xs text-brandGrey-normalLight text-center">{{ $id >= 2 && $id != 5 ? '2023/06/16' : '-' }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $id >= 2 && $id != 5 ? 'bg-brandBlue-normal text-white' : 'bg-brandGrey-light text-brandGrey-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $id >= 2 && $id != 5 ? 'check' : 'truck-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGrey-normal text-center">已出貨</span>
                        <span class="text-xs text-brandGrey-normalLight text-center">{{ $id >= 2 && $id != 5 ? '2023/06/17' : '-' }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $id == 1 ? 'bg-brandBlue-normal text-white' : 'bg-brandGrey-light text-brandGrey-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $id == 1 ? 'check' : 'home-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGrey-normal text-center">已送達</span>
                        <span class="text-xs text-brandGrey-normalLight text-center">{{ $id == 1 ? '2023/06/18' : '-' }}</span>
                    </div>
                </div>
            </div>
            
            <!-- 目前狀態 -->
            <div class="mt-6 p-3 rounded-lg {{ $id == 5 ? 'bg-brandGrey-lightLight' : 'bg-brandBlue-light' }}">
                <div class="flex items-center">
                    <i class="icon-[mdi--information-outline] w-5 h-5 mr-2 {{ $id == 5 ? 'text-brandGrey-normal' : 'text-brandBlue-normal' }}"></i>
                    <p class="{{ $id == 5 ? 'text-brandGrey-normal' : 'text-brandBlue-normal' }}">
                        @if ($id == 1)
                            您的訂單已於 2023/06/18 送達。如有任何問題，請聯繫客服。
                        @elseif ($id == 2)
                            您的訂單已於 2023/06/17 出貨，預計 1-2 天內送達。
                        @elseif ($id == 3)
                            您的訂單正在處理中，我們將盡快為您出貨。
                        @elseif ($id == 4)
                            您的訂單已建立，請於 24 小時內完成付款，以免訂單自動取消。
                        @elseif ($id == 5)
                            您的訂單已於 2023/10/02 取消。取消原因：尺寸選擇錯誤
                        @endif
                    </p>
                </div>
            </div>
        </div>
        
        <!-- 訂單資訊 -->
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGrey-normal mb-4">訂單資訊</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-brandGrey-normal mb-2">基本資訊</h3>
                    <div class="bg-brandGrey-lightLight p-4 rounded-lg">
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">訂單編號：</span>
                            <span class="text-brandGrey-normal">{{ $id == 5 ? 'ORD-20231001-005' : 'ORD20230615' . str_pad($id, 3, '0', STR_PAD_LEFT) }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">訂購日期：</span>
                            <span class="text-brandGrey-normal">{{ $id == 5 ? '2023/10/01' : '2023/06/15' }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">付款方式：</span>
                            <span class="text-brandGrey-normal">{{ $id == 4 ? '待選擇' : '信用卡 (末四碼: 1234)' }}</span>
                        </p>
                        <p class="text-sm">
                            <span class="text-brandGrey-normalLight">訂單狀態：</span>
                            <span class="px-2 py-0.5 rounded-full text-xs font-medium {{ $statusClass }}">
                                {{ $status }}
                            </span>
                        </p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-medium text-brandGrey-normal mb-2">收件資訊</h3>
                    <div class="bg-brandGrey-lightLight p-4 rounded-lg">
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">收件人：</span>
                            <span class="text-brandGrey-normal">王小明</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">聯絡電話：</span>
                            <span class="text-brandGrey-normal">0912-345-678</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGrey-normalLight">收件地址：</span>
                            <span class="text-brandGrey-normal">台北市信義區信義路五段7號</span>
                        </p>
                        <p class="text-sm">
                            <span class="text-brandGrey-normalLight">配送方式：</span>
                            <span class="text-brandGrey-normal">宅配</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 商品明細 -->
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGrey-normal mb-4">商品明細</h2>
            <div class="border border-brandGrey-light rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-brandGrey-light">
                        <thead class="bg-brandGrey-lightLight">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGrey-normal uppercase tracking-wider">商品</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGrey-normal uppercase tracking-wider">單價</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGrey-normal uppercase tracking-wider">數量</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGrey-normal uppercase tracking-wider">小計</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-brandGrey-light">
                            @if ($id == 1)
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-16 w-16 bg-brandGrey-lightLight rounded-md overflow-hidden">
                                                <img src="https://via.placeholder.com/64" alt="商品圖片" class="h-full w-full object-cover">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-brandGrey-normal">精品皮夾</div>
                                                <div class="text-sm text-brandGrey-normalLight">顏色: 黑色</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">$2,500</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">1</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">$2,500</td>
                                </tr>
                            @elseif ($id == 2)
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-16 w-16 bg-brandGrey-lightLight rounded-md overflow-hidden">
                                                <img src="https://via.placeholder.com/64" alt="商品圖片" class="h-full w-full object-cover">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-brandGrey-normal">高級皮革外套</div>
                                                <div class="text-sm text-brandGrey-normalLight">尺寸: XL / 顏色: 棕色</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">$3,200</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">1</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">$3,200</td>
                                </tr>
                            @elseif ($id == 3 || $id == 4 || $id == 5)
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-16 w-16 bg-brandGrey-lightLight rounded-md overflow-hidden">
                                                <img src="https://via.placeholder.com/64" alt="商品圖片" class="h-full w-full object-cover">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-brandGrey-normal">{{ $id == 5 ? '運動休閒鞋' : '休閒襯衫' }}</div>
                                                <div class="text-sm text-brandGrey-normalLight">{{ $id == 5 ? '尺寸: 42 / 顏色: 黑白' : '尺寸: M / 顏色: 藍色' }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">${{ $id == 5 ? '1,450' : '980' }}</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">1</td>
                                    <td class="px-4 py-4 text-sm text-brandGrey-normal">${{ $id == 5 ? '1,450' : '980' }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                
                <!-- 金額摘要 -->
                <div class="bg-brandGrey-lightLight px-4 py-4">
                    <div class="flex justify-end">
                        <div class="w-full sm:w-64">
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-brandGrey-normalLight">商品小計：</span>
                                <span class="text-sm text-brandGrey-normal">
                                    ${{ $id == 1 ? '2,500' : ($id == 2 ? '3,200' : ($id == 5 ? '1,450' : '980')) }}
                                </span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-brandGrey-normalLight">運費：</span>
                                <span class="text-sm text-brandGrey-normal">$60</span>
                            </div>
                            @if ($id == 1)
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-brandGrey-normalLight">優惠券折抵：</span>
                                    <span class="text-sm text-brandRed-normal">-$100</span>
                                </div>
                            @endif
                            <div class="flex justify-between pt-2 border-t border-brandGrey-light">
                                <span class="text-base font-medium text-brandGrey-normal">總計：</span>
                                <span class="text-base font-medium text-brandGrey-normal">
                                    ${{ $id == 1 ? '2,460' : ($id == 2 ? '3,260' : ($id == 5 ? '1,510' : '1,040')) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 操作按鈕 -->
        <div class="flex flex-wrap justify-end gap-3">
            @if ($id == 1)
                <a href="{{ route('user.orders.review', $id) }}" class="flex items-center justify-center px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--star-outline] w-5 h-5 mr-1 inline-block"></i>
                    評價商品
                </a>
                <a href="{{ route('user.orders.return', $id) }}" class="flex items-center justify-center px-4 py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light">
                    <i class="icon-[mdi--cash-refund] w-5 h-5 mr-1 inline-block"></i>
                    申請退貨
                </a>
            @elseif ($id == 2)
                <a href="#" class="flex items-center justify-center px-4 py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light">
                    <i class="icon-[mdi--truck-outline] w-5 h-5 mr-1 inline-block"></i>
                    查詢物流
                </a>
            @elseif ($id == 3)
                <form action="{{ route('user.orders.cancel', $id) }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center justify-center px-4 py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light" onclick="return confirm('確定要取消此訂單嗎？')">
                        <i class="icon-[mdi--close-circle-outline] w-5 h-5 mr-1 inline-block"></i>
                        取消訂單
                    </button>
                </form>
            @elseif ($id == 4)
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--credit-card-outline] w-5 h-5 mr-1 inline-block"></i>
                    前往付款
                </a>
                <form action="{{ route('user.orders.cancel', $id) }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center justify-center px-4 py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light" onclick="return confirm('確定要取消此訂單嗎？')">
                        <i class="icon-[mdi--close-circle-outline] w-5 h-5 mr-1 inline-block"></i>
                        取消訂單
                    </button>
                </form>
            @elseif ($id == 5)
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--cart-outline] w-5 h-5 mr-1 inline-block"></i>
                    重新購買
                </a>
            @endif
            
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-brandGrey-lightActive text-brandGrey-normal rounded-md hover:bg-brandGrey-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGrey-light">
                <i class="icon-[mdi--printer-outline] w-5 h-5 mr-1 inline-block"></i>
                列印訂單
            </a>
        </div>
    </div>
@endsection 