@extends('layouts.with_sidebar')

@section('title', '個人檔案')
@section('meta_description', '管理您的個人資料、密碼和通知設定')
@section('meta_keywords', '個人檔案, 會員中心, 帳號設定')
@section('breadcrumb_title', '個人檔案')

@section('main_content')
    <div class="w-full space-y-5">
        <!-- 電子郵件設定區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">電子郵件</h2>
            
            <div class="flex items-center space-x-2">
                <div class="w-full md:w-1/2">
                    <div class="relative">
                        <input type="email" name="email" id="email" value="{{ auth()->user()->email ?? '' }}" 
                            class="w-full h-[50px] px-5 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" 
                            placeholder="Email *" readonly>
                    </div>
                </div>
                <button type="button" class="h-[42px] px-5 py-2 text-white bg-[#dc3545] rounded-md hover:bg-[#c82333] focus:outline-none">
                    變更電子郵件
                </button>
            </div>
            
            <p class="mt-3 text-sm text-gray-500">變更電子郵件將寄發驗證信件，且需要重新登入。</p>
        </div>
        
        <!-- 密碼設定區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">密碼設定</h2>
            
            <button type="button" class="h-[42px] px-5 py-2 text-[#dc3545] border border-[#dc3545] rounded-md hover:bg-[#dc3545] hover:text-white focus:outline-none">
                變更密碼
            </button>
            
            <p class="mt-3 text-sm text-gray-500">變更密碼將寄發通知信件，且需要重新登入。</p>
        </div>
        
        <!-- 電話號碼設定區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">電話號碼</h2>
            
            <div class="flex items-center space-x-2">
                <div class="w-full md:w-1/2">
                    <div class="relative">
                        <input type="tel" name="phone" id="phone" value="{{ auth()->user()->phone ?? '' }}" 
                            class="w-full h-[50px] px-5 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" 
                            placeholder="手機號碼">
                    </div>
                </div>
                <button type="button" class="h-[42px] px-5 py-2 text-[#62697f] border border-[#62697f] rounded-md hover:bg-[#62697f] hover:text-white focus:outline-none">
                    更新電話號碼
                </button>
            </div>
        </div>
        
        <!-- 生日設定區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">生日設定</h2>
            
            <div class="flex items-center space-x-2">
                <div class="flex items-center space-x-2">
                    <input type="text" name="birth_year" id="birth_year" 
                        class="w-[77px] h-[50px] px-5 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" 
                        placeholder="年">
                    <span class="text-[#252b42]">/</span>
                    <input type="text" name="birth_month" id="birth_month" 
                        class="w-[54px] h-[50px] px-5 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" 
                        placeholder="月">
                    <span class="text-[#252b42]">/</span>
                    <input type="text" name="birth_day" id="birth_day" 
                        class="w-[54px] h-[50px] px-5 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500" 
                        placeholder="日">
                </div>
                <button type="button" class="h-[42px] px-5 py-2 text-[#62697f] border border-[#62697f] rounded-md hover:bg-[#62697f] hover:text-white focus:outline-none">
                    更新生日
                </button>
            </div>
            
            <p class="mt-3 text-sm text-gray-500">生日資訊將用於提供您生日專屬優惠。</p>
        </div>
        
        <!-- 社群帳號連結區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">社群帳號</h2>
            
            <div class="flex items-center space-x-4 mb-3">
                <i class="icon-[mdi--facebook] w-6 h-6 text-[#252b42]"></i>
                <button type="button" class="h-[42px] px-5 py-2 text-[#62697f] border border-[#62697f] rounded-md hover:bg-[#62697f] hover:text-white focus:outline-none w-[425px]">
                    連結 Facebook 帳號
                </button>
            </div>
            
            <div class="flex items-center space-x-4">
                <i class="icon-[mdi--google] w-6 h-6 text-[#252b42]"></i>
                <div class="flex items-center space-x-2 w-[425px]">
                    <input type="email" name="google_email" id="google_email" 
                        class="w-[252px] h-[42px] px-5 py-2 bg-gray-200 border border-gray-300 rounded-md focus:outline-none" 
                        placeholder="Email *" readonly>
                    <button type="button" class="h-[42px] px-5 py-2 text-white bg-[#62697f] rounded-md hover:bg-[#4e5466] focus:outline-none w-[160px]">
                        解除連結
                    </button>
                </div>
            </div>
        </div>
        
        <!-- 通知設定區塊 -->
        <div class="p-4 bg-white rounded-md shadow-sm">
            <h2 class="mb-3 text-lg font-medium text-[#252b42]">通知設定</h2>
            
            <div class="flex items-center">
                <label class="flex items-center space-x-3 cursor-pointer">
                    <div class="relative">
                        <input type="checkbox" class="sr-only">
                        <div class="w-[45px] h-[25px] bg-white border border-[#62697f] rounded-full"></div>
                        <div class="absolute left-[4px] top-[3px] w-[19px] h-[19px] bg-[#62697f] rounded-full transition"></div>
                    </div>
                    <span class="text-gray-500">接收最新優惠及活動通知</span>
                </label>
            </div>
        </div>
    </div>
    
    <form id="profile-form" action="/user/user_profile/update" method="POST" class="hidden">
        @csrf
        @method('PUT')
        <input type="hidden" name="email" value="{{ auth()->user()->email ?? '' }}">
        <input type="hidden" name="phone" id="form_phone" value="{{ auth()->user()->phone ?? '' }}">
        <input type="hidden" name="birth_date" id="form_birth_date" value="{{ auth()->user()->birth_date ?? '' }}">
        <input type="hidden" name="notification_enabled" id="form_notification_enabled" value="{{ auth()->user()->notification_enabled ?? '0' }}">
    </form>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 電話號碼更新
            document.querySelector('button:contains("更新電話號碼")').addEventListener('click', function() {
                document.getElementById('form_phone').value = document.getElementById('phone').value;
                document.getElementById('profile-form').submit();
            });
            
            // 生日更新
            document.querySelector('button:contains("更新生日")').addEventListener('click', function() {
                const year = document.getElementById('birth_year').value;
                const month = document.getElementById('birth_month').value;
                const day = document.getElementById('birth_day').value;
                document.getElementById('form_birth_date').value = `${year}-${month}-${day}`;
                document.getElementById('profile-form').submit();
            });
            
            // 通知設定切換
            const notificationToggle = document.querySelector('input[type="checkbox"]');
            notificationToggle.addEventListener('change', function() {
                document.getElementById('form_notification_enabled').value = this.checked ? '1' : '0';
                document.getElementById('profile-form').submit();
            });
        });
    </script>
@endsection 