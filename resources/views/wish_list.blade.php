@extends('layouts.app')

@section('title', 'wish list')
@section('meta_description', '收藏清單')
@section('meta_keywords', '收藏清單')


@section('content')


    <main class="px-32 pt-20 pb-5 max-md:px-5 max-md:py-10">
        <!-- Breadcrumb -->
        <nav class="gap-3 mb-5 text-sm text-black opacity-50" aria-label="Breadcrumb">
            <p>Home / 收藏清單</p>
        </nav>

        <!-- Livewire 收藏清單 -->
        @livewire('wishlist-component')

    </main>








@endsection


@push('scripts')
    <!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
@endpush
