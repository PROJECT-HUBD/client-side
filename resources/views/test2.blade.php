@extends('layouts.app')

@section('title', '測試頁2')

@section('content')
<div class="container p-8">
    <h2 class="text-2xl text-indigo-500 mb-8">測試頁2</h2>

    <div class="container">
        <p class="mb-5">頁籤元件測試</p>
        <x-tabs :tabs="['短袖', '長袖／毛衣', '外套夾克']">
            <div id="tab-0" class="tab-content">
                <h2 class="text-lg font-bold">我是短袖</h2>
                <p>Apple Apple Apple</p>
            </div>

            <div id="tab-1" class="tab-content">
                <h2 class="text-lg font-bold">我是長袖</h2>
                <p>Banana Banana Banana</p>
            </div>

            <div id="tab-2" class="tab-content">
                <h2 class="text-lg font-bold">我是外套</h2>
                <p>Melon Melon Melon</p>
            </div>
        </x-tabs>
    </div>

</div>
@endsection

@push('scripts')
<!-- jQuery 內容 -->
@endpush