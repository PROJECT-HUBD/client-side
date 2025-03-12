@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
    * {
        /* border: 1px solid red; */
    }
</style>

<div class="flex flex-col items-center justify-center w-full  min-h-full gap-5">
    <img class="h-[260px]" src="{{ asset('images/system_maintenance/maintain.png')   }}" alt="">
    <p class="text-[36px] text-brandGrey-normal font-lexend font-semibold">系統維護中</p>
    <p class="text-[24px] text-brandGrey-normal font-normal">目前系統正在加速開發，期待與您見面~</p>
    <a href="{{ route('home') }}"
        class="flex overflow-hidden items-center py-4  font-bold text-white bg-red-500 rounded-md min-h-[56px] w-[176px] ">
        <span class="goHome self-stretch my-auto mx-auto ">回到首頁</span>
    </a>
</div>
@endsection
@push('scripts')
<!-- jQuery 內容 -->
@endpush