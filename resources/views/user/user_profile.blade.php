@extends('layouts.with_sidebar')

@section('title', '個人檔案')
@section('meta_description', '管理您的個人資料')
@section('meta_keywords', '個人檔案, 會員中心')
@section('breadcrumb_title', '個人檔案')

@section('main_content')
    <div class="w-full p-4 sm:p-6 bg-white rounded-lg shadow-sm">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-brandGray-normal mb-2 sm:mb-0">個人檔案</h1>
            <button type="button" class="px-3 py-1.5 sm:px-4 sm:py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal whitespace-nowrap">
                編輯個人資料
            </button>
        </div>
        
        <!-- 個人資料 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-lg font-medium text-brandGray-normal mb-4">基本資料</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-brandGray-normalLight">姓名</p>
                        <p class="text-brandGray-normal">王小明</p>
                    </div>
                    <div>
                        <p class="text-sm text-brandGray-normalLight">電子郵件</p>
                        <p class="text-brandGray-normal break-all">wang.xiaoming@example.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-brandGray-normalLight">手機號碼</p>
                        <p class="text-brandGray-normal">0912-345-678</p>
                    </div>
                    <div>
                        <p class="text-sm text-brandGray-normalLight">生日</p>
                        <p class="text-brandGray-normal">1990/01/01</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h2 class="text-lg font-medium text-brandGray-normal mb-4">帳戶資訊</h2>
                <div class="space-y-3">
                    <div>
                        <p class="text-sm text-brandGray-normalLight">註冊日期</p>
                        <p class="text-brandGray-normal">2023/01/15</p>
                    </div>
                    <div>
                        <p class="text-sm text-brandGray-normalLight">最後登入</p>
                        <p class="text-brandGray-normal">2023/06/20</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 密碼管理 -->
        <div class="mt-8 pt-6 border-t border-brandGray-light">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4">
                <h2 class="text-lg font-medium text-brandGray-normal mb-2 sm:mb-0">密碼管理</h2>
                <button type="button" class="px-3 py-1.5 sm:px-4 sm:py-2 border border-brandBlue-lightActive text-brandBlue-normal rounded-md hover:bg-brandBlue-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-light whitespace-nowrap">
                    變更密碼
                </button>
            </div>
            <p class="text-sm text-brandGray-normalLight">
                上次密碼變更時間：2023/03/10
            </p>
        </div>
        
        <!-- 通知設定 -->
        <div class="mt-8 pt-6 border-t border-brandGray-light">
            <h2 class="text-lg font-medium text-brandGray-normal mb-4">通知設定</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" id="email_notification" checked class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3">
                        <label for="email_notification" class="text-brandGray-normal">電子郵件通知</label>
                        <p class="text-sm text-brandGray-normalLight">接收訂單更新、優惠活動等相關通知</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" id="sms_notification" class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3">
                        <label for="sms_notification" class="text-brandGray-normal">簡訊通知</label>
                        <p class="text-sm text-brandGray-normalLight">接收訂單狀態更新和重要通知</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" id="marketing_notification" checked class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3">
                        <label for="marketing_notification" class="text-brandGray-normal">行銷通知</label>
                        <p class="text-sm text-brandGray-normalLight">接收最新商品、促銷活動和專屬優惠資訊</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 