@extends('layouts.with_sidebar')

@section('title', '訂單詳情')
@section('meta_description', '查看您的訂單詳細資訊')
@section('meta_keywords', '訂單詳情, 購買記錄, 會員中心')
@section('breadcrumb_title', '訂單詳情')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGray-normal">訂單詳情</h1>
            <a href="{{ route('user.orders') }}" class="px-3 py-1.5 sm:px-4 sm:py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
                返回訂單列表
            </a>
        </div>
        
        <!-- 訂單狀態追蹤 (已註釋) -->
        <!--
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGray-normal mb-4">訂單狀態</h2>
            <div class="relative">
        -->
                <!-- 進度條 -->
                <!--
                <div class="hidden sm:block absolute left-0 top-1/2 w-full h-1 bg-brandGray-light -translate-y-1/2 z-0"></div>
                -->
                <!-- 狀態點 -->
            <!--
                <div class="flex justify-between relative z-10">
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full bg-brandBlue-normal text-white flex items-center justify-center mb-2">
                            <i class="icon-[mdi--check] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGray-normal text-center">訂單成立</span>
                        <span class="text-xs text-brandGray-normalLight text-center">{{ $statusTimeline['created']['time'] }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $statusTimeline['paid']['completed'] ? 'bg-brandBlue-normal text-white' : 'bg-brandGray-light text-brandGray-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $statusTimeline['paid']['completed'] ? 'check' : 'credit-card-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGray-normal text-center">付款完成</span>
                        <span class="text-xs text-brandGray-normalLight text-center">{{ $statusTimeline['paid']['time'] }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $statusTimeline['processing']['completed'] ? 'bg-brandBlue-normal text-white' : 'bg-brandGray-light text-brandGray-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $statusTimeline['processing']['completed'] ? 'check' : 'package-variant-closed' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGray-normal text-center">訂單處理</span>
                        <span class="text-xs text-brandGray-normalLight text-center">{{ $statusTimeline['processing']['time'] }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $statusTimeline['shipped']['completed'] ? 'bg-brandBlue-normal text-white' : 'bg-brandGray-light text-brandGray-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $statusTimeline['shipped']['completed'] ? 'check' : 'truck-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGray-normal text-center">已出貨</span>
                        <span class="text-xs text-brandGray-normalLight text-center">{{ $statusTimeline['shipped']['time'] }}</span>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-8 h-8 rounded-full {{ $statusTimeline['completed']['completed'] ? 'bg-brandBlue-normal text-white' : 'bg-brandGray-light text-brandGray-normal' }} flex items-center justify-center mb-2">
                            <i class="icon-[mdi--{{ $statusTimeline['completed']['completed'] ? 'check' : 'home-outline' }}] w-5 h-5"></i>
                        </div>
                        <span class="text-sm text-brandGray-normal text-center">已送達</span>
                        <span class="text-xs text-brandGray-normalLight text-center">{{ $statusTimeline['completed']['time'] }}</span>
                    </div>
                </div>
            </div>
            -->
            
        <!-- 目前狀態 -->
        <div class="mb-8 p-4 rounded-lg {{ $order->trade_status == 'cancelled' ? 'bg-brandGray-lightLight' : 'bg-brandBlue-light' }}">
            <div class="flex items-center">
                <i class="icon-[mdi--information-outline] w-6 h-6 mr-3 {{ $order->trade_status == 'cancelled' ? 'text-brandGray-normal' : 'text-brandBlue-normal' }}"></i>
                <p class="text-base {{ $order->trade_status == 'cancelled' ? 'text-brandGray-normal' : 'text-brandBlue-normal' }}">
                    @if ($order->trade_status == 'completed')
                        您的訂單已送達。如有任何問題，請聯繫客服。
                    @elseif ($order->trade_status == 'shipped')
                        您的訂單已出貨，預計 1-2 天內送達。
                    @elseif ($order->trade_status == 'processing')
                        您的訂單正在處理中，我們將盡快為您出貨。
                    @elseif ($order->trade_status == 'pending')
                        您的訂單已建立，請於 24 小時內完成付款，以免訂單自動取消。
                    @elseif ($order->trade_status == 'cancelled')
                        您的訂單已取消。
                    @else
                        訂單狀態：{{ $order->status_name }}
                    @endif
                </p>
            </div>
        </div>
        
        <!-- 訂單資訊 -->
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGray-normal mb-4">訂單資訊</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-brandGray-normal mb-2">基本資訊</h3>
                    <div class="bg-brandGray-lightLight p-4 rounded-lg">
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">訂單編號：</span>
                            <span class="text-brandGray-normal">{{ $order->order_id }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">訂購日期：</span>
                            <span class="text-brandGray-normal">{{ $order->created_at->format('Y/m/d H:i') }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">付款方式：</span>
                            <span class="text-brandGray-normal">{{ $order->payment_method_name }}</span>
                        </p>
                        <p class="text-sm">
                            <span class="text-brandGray-normalLight">訂單狀態：</span>
                            <span class="px-2 py-0.5 rounded-full text-xs font-medium 
                                @if($order->trade_status == 'pending') bg-brandRed-light text-brandRed-normal
                                @elseif($order->trade_status == 'processing' || $order->trade_status == 'shipped') bg-brandBlue-light text-brandBlue-normal
                                @elseif($order->trade_status == 'completed') bg-brandGreen-light text-brandGreen-normal
                                @else bg-brandGray-light text-brandGray-normal
                                @endif">
                                {{ $order->status_name }}
                            </span>
                        </p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-sm font-medium text-brandGray-normal mb-2">收件資訊</h3>
                    <div class="bg-brandGray-lightLight p-4 rounded-lg">
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">收件人：</span>
                            <span class="text-brandGray-normal">{{ Auth::user()->name }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">聯絡電話：</span>
                            <span class="text-brandGray-normal">{{ Auth::user()->phone ?? '未設定' }}</span>
                        </p>
                        <p class="text-sm mb-2">
                            <span class="text-brandGray-normalLight">收件地址：</span>
                            <span class="text-brandGray-normal">{{ Auth::user()->address ?? '未設定' }}</span>
                        </p>
                        <p class="text-sm">
                            <span class="text-brandGray-normalLight">配送方式：</span>
                            <span class="text-brandGray-normal">宅配</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 商品明細 -->
        <div class="mb-8">
            <h2 class="text-lg font-medium text-brandGray-normal mb-4">商品明細</h2>
            <div class="border border-brandGray-light rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-brandGray-light">
                        <thead class="bg-brandGray-lightLight">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGray-normal uppercase tracking-wider">商品</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGray-normal uppercase tracking-wider">單價</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGray-normal uppercase tracking-wider">數量</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-brandGray-normal uppercase tracking-wider">小計</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-brandGray-light">
                            @foreach($order->items as $item)
                                <tr>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center">
                                            <!-- 商品預覽圖 (已註釋) -->
                                            <!--
                                            <div class="flex-shrink-0 h-16 w-16 bg-brandGray-lightLight rounded-md overflow-hidden">
                                                <img src="https://via.placeholder.com/64" alt="{{ $item->product_name }}" class="h-full w-full object-cover">
                                            </div>
                                            -->
                                            <div class="ml-0">
                                                <div class="text-sm font-medium text-brandGray-normal">{{ $item->product_name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-brandGray-normal">NT$ {{ number_format($item->product_price, 0) }}</td>
                                    <td class="px-4 py-4 text-sm text-brandGray-normal">{{ $item->quantity }}</td>
                                    <td class="px-4 py-4 text-sm text-brandGray-normal">NT$ {{ number_format($item->product_price * $item->quantity, 0) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- 金額摘要 -->
                <div class="bg-brandGray-lightLight px-4 py-4">
                    <div class="flex justify-end">
                        <div class="w-full sm:w-64">
                            @php
                                $subtotal = $order->items->sum(function($item) {
                                    return $item->product_price * $item->quantity;
                                });
                                $shipping = 60; // 固定運費
                                $discount = $subtotal + $shipping - $order->total_price_with_discount;
                            @endphp
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-brandGray-normalLight">商品小計：</span>
                                <span class="text-sm text-brandGray-normal">
                                    NT$ {{ number_format($subtotal, 0) }}
                                </span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-sm text-brandGray-normalLight">運費：</span>
                                <span class="text-sm text-brandGray-normal">NT$ {{ number_format($shipping, 0) }}</span>
                            </div>
                            @if($discount > 0)
                                <div class="flex justify-between mb-2">
                                    <span class="text-sm text-brandGray-normalLight">優惠券折抵：</span>
                                    <span class="text-sm text-brandRed-normal">-NT$ {{ number_format($discount, 0) }}</span>
                                </div>
                            @endif
                            <div class="flex justify-between pt-2 border-t border-brandGray-light">
                                <span class="text-base font-medium text-brandGray-normal">總計：</span>
                                <span class="text-base font-medium text-brandGray-normal">
                                    NT$ {{ number_format($order->total_price_with_discount, 0) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 操作按鈕 -->
        <div class="flex flex-wrap justify-end gap-3">
            @if ($order->trade_status == 'completed')
                <a href="{{ route('user.orders.return', $order->order_id) }}" class="flex items-center justify-center px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
                    <i class="icon-[mdi--cash-refund] w-5 h-5 mr-1 inline-block"></i>
                    申請退貨
                </a>
            @elseif ($order->trade_status == 'shipped')
                <a href="#" class="flex items-center justify-center px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
                    <i class="icon-[mdi--truck-outline] w-5 h-5 mr-1 inline-block"></i>
                    查詢物流
                </a>
            @elseif ($order->trade_status == 'processing')
                <form action="{{ route('user.orders.cancel', $order->order_id) }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center justify-center px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light" onclick="return confirm('確定要取消此訂單嗎？')">
                        <i class="icon-[mdi--close-circle-outline] w-5 h-5 mr-1 inline-block"></i>
                        取消訂單
                    </button>
                </form>
            @elseif ($order->trade_status == 'pending')
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--credit-card-outline] w-5 h-5 mr-1 inline-block"></i>
                    前往付款
                </a>
                <form action="{{ route('user.orders.cancel', $order->order_id) }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center justify-center px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light" onclick="return confirm('確定要取消此訂單嗎？')">
                        <i class="icon-[mdi--close-circle-outline] w-5 h-5 mr-1 inline-block"></i>
                        取消訂單
                    </button>
                </form>
            @elseif ($order->trade_status == 'cancelled')
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    <i class="icon-[mdi--cart-outline] w-5 h-5 mr-1 inline-block"></i>
                    重新購買
                </a>
            @endif
            
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-brandGray-lightActive text-brandGray-normal rounded-md hover:bg-brandGray-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandGray-light">
                <i class="icon-[mdi--printer-outline] w-5 h-5 mr-1 inline-block"></i>
                列印訂單
            </a>
        </div>
    </div>
@endsection 