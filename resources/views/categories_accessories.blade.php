@extends('layouts.app')

@section('title', '飾品')
@section('meta_description', '商品分類：飾品')
@section('meta_keywords', 'accessories, 飾品')

@section('content')
<!-- HTML 內容 -->
<section class="mt-[170px]">
    <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '飾品'],
         ]" />
</section>
@endsection

@push('scripts')
<!-- jQuery 內容 -->

@endpush