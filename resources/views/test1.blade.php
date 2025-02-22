@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container p-8">
    <h2 class="text-2xl text-indigo-500 mb-8">測試頁1</h2>

    <div class="mb-20">
        <p class="mb-5">按鈕元件測試</p>
        <x-button type="sky-600">按鈕1</x-button>
        <x-button type="sky-400">按鈕2</x-button>
        <x-button type="sky-400">按鈕3</x-button>
        <x-button type="sky-300">按鈕4</x-button>
    </div>

</div>
@endsection

@push('scripts')
<!-- jQuery 內容 -->
@endpush