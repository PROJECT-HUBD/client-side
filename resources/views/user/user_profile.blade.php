@extends('layouts.with_sidebar')

@section('title', '個人檔案')
@section('meta_description', '管理您的個人資料、密碼和通知設定')
@section('meta_keywords', '個人檔案, 會員中心, 帳號設定')
@section('breadcrumb_title', '個人檔案')

@section('main_content')
    <div class="w-full p-6 bg-white rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold text-brandGray-normal mb-6">個人檔案</h1>
        
        <!-- 個人資料表單 -->
        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-brandGray-normal mb-1">姓名</label>
                    <input type="text" id="name" name="name" value="王小明" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-brandGray-normal mb-1">電子郵件</label>
                    <input type="email" id="email" name="email" value="example@gmail.com" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal" readonly>
                    <p class="mt-1 text-xs text-brandGray-normalLight">電子郵件為您的登入帳號，無法修改</p>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-brandGray-normal mb-1">手機號碼</label>
                    <input type="tel" id="phone" name="phone" value="0912-345-678" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                <div>
                    <label for="birthday" class="block text-sm font-medium text-brandGray-normal mb-1">生日</label>
                    <input type="date" id="birthday" name="birthday" value="1990-01-01" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                <div>
                    <label for="gender" class="block text-sm font-medium text-brandGray-normal mb-1">性別</label>
                    <select id="gender" name="gender" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                        <option value="male">男性</option>
                        <option value="female">女性</option>
                        <option value="other">其他</option>
                        <option value="prefer_not_to_say">不願透露</option>
                    </select>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    儲存變更
                </button>
            </div>
        </form>
        
        <hr class="my-8 border-brandGray-light">
        
        <!-- 密碼設定 -->
        <h2 class="text-xl font-semibold text-brandGray-normal mb-4">密碼設定</h2>
        <form>
            <div class="space-y-4 mb-6">
                <div>
                    <label for="current_password" class="block text-sm font-medium text-brandGray-normal mb-1">目前密碼</label>
                    <input type="password" id="current_password" name="current_password" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
                <div>
                    <label for="new_password" class="block text-sm font-medium text-brandGray-normal mb-1">新密碼</label>
                    <input type="password" id="new_password" name="new_password" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                    <p class="mt-1 text-xs text-brandGray-normalLight">密碼必須至少包含 8 個字符，並包含字母和數字</p>
                </div>
                <div>
                    <label for="confirm_password" class="block text-sm font-medium text-brandGray-normal mb-1">確認新密碼</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border border-brandGray-lightActive rounded-md focus:outline-none focus:ring-1 focus:ring-brandBlue-normal">
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    更新密碼
                </button>
            </div>
        </form>
        
        <hr class="my-8 border-brandGray-light">
        
        <!-- 通知設定 -->
        <h2 class="text-xl font-semibold text-brandGray-normal mb-4">通知設定</h2>
        <form>
            <div class="space-y-4 mb-6">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="email_notifications" name="email_notifications" type="checkbox" checked class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="email_notifications" class="font-medium text-brandGray-normal">電子郵件通知</label>
                        <p class="text-brandGray-normalLight">接收有關訂單更新、促銷活動和新產品的電子郵件</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="sms_notifications" name="sms_notifications" type="checkbox" class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="sms_notifications" class="font-medium text-brandGray-normal">簡訊通知</label>
                        <p class="text-brandGray-normalLight">接收有關訂單狀態和重要更新的簡訊</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="marketing_notifications" name="marketing_notifications" type="checkbox" checked class="h-4 w-4 text-brandBlue-normal focus:ring-brandBlue-normal border-brandGray-lightActive rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="marketing_notifications" class="font-medium text-brandGray-normal">行銷通知</label>
                        <p class="text-brandGray-normalLight">接收有關特別優惠、折扣和促銷活動的通知</p>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-brandBlue-normal text-white rounded-md hover:bg-brandBlue-normalHover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandBlue-normal">
                    儲存設定
                </button>
            </div>
        </form>
    </div>
@endsection 