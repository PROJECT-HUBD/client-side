@extends('layouts.app')

@section('content')
<div class="w-[1200px] mx-[120px] mt-[120px] pt-10 pb-[120px] justify-start items-start gap-10 inline-flex">
    <!-- 側邊欄 -->
    @include('layouts.sidebar')
    
    <!-- 主要內容 -->
    <div class="grow shrink basis-0 flex-col justify-start items-start gap-[19px] inline-flex">
        @yield('main_content')
    </div>
</div>
@endsection 