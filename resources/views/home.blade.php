@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', '首頁')
@section('meta_keywords', '首頁, home, homepage')


@section('content')
<div class="container p-8 font-lexend font-semibold">
    <h2 class="text-2xl text-indigo-500">安安，我是首頁</h2>
    <p class="mt-4">✦這是 Laravel + Vite + Tailwind CSS 的專案✦</p>
    <p class="mt-4 mb-20">大專加油，我們可以的ლ(╹◡╹ლ)</p>
</div>
@endsection

@push('scripts')
<!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
@endpush