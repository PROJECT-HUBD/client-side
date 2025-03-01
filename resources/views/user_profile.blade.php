@extends('layouts.with_sidebar')

@section('title', '個人檔案')
@section('meta_description', '個人檔案')
@section('meta_keywords', '個人檔案')


// 將側邊欄選單項目傳遞給視圖
View::share('sidebarItems', $sidebarItems);
@endphp

@section('main_content')
    <!-- 登入信箱 -->
@endsection



@push('scripts')
<!-- jQuery 內容 -->
<script>
    $('#btn').on('click', ()=>{
        $('#text').append('22222, ')
    })
</script>
@endpush