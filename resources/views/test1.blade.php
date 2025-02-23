@extends('layouts.app')

@section('title', '測試頁1')
@section('meta_description', '這是測試頁1')
@section('meta_keywords', '測試')

@section('content')
<!-- HTML 內容 -->
 <button type="button" id="btn" class="text-brandRed-light bg-brandRed-normal font-lexend font-semibold p-3 rounded-md hover:opacity-80 active:opacity-50 mb-10">測試點擊</button>
 <p id="text" class="text-xl mb-10"></p>

 <!-- icon 使用 https://icon-sets.iconify.design/-->
<div><span class="w-12 h-12 icon-[jam--alert]"></span></div>
<div><span class="w-12 h-12 bg-sky-400 icon-[jam--alert]"></span></div>
@endsection

@push('scripts')
<!-- jQuery 內容 -->
<script>
    $('#btn').on('click', ()=>{
        $('#text').append('123, ')
    })
</script>
@endpush