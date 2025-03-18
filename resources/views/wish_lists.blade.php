@extends('layouts.app')

@section('title', '收藏清單')
@section('meta_description', '收藏清單')
@section('meta_keywords', '收藏清單')


@section('content')
<section class="mt-[150px]">
    <!-- 麵包屑 -->
    <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '飾品'],
         ]" />

    <section class="px-32 pb-5 max-md:px-5 max-md:py-10">
        <!-- List Header -->
        <section
            class="px-8 py-3 mb-5 text-base bg-white rounded border border-solid border-neutral-100 shadow-[0px_1px_13px_rgba(0,0,0,0.05)] text-zinc-700">
            總計 6 件商品
        </section>

        <!-- Product Grid -->
        <section class="grid gap-5 grid-cols-[repeat(2,1fr)] max-md:grid-cols-[1fr]">
            <!-- Product Card 1 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>
                    <div
                        class="inline-flex gap-2 items-center px-3 py-1 mb-3 text-sm rounded bg-neutral-100 text-neutral-700">
                        <span>淺粉-100</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Product Card 2 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>

                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Product Card 3 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>
                    <div
                        class="inline-flex gap-2 items-center px-3 py-1 mb-3 text-sm rounded bg-neutral-100 text-neutral-700">
                        <span>淺粉-100</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Product Card 4 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>
                    <div
                        class="inline-flex gap-2 items-center px-3 py-1 mb-3 text-sm rounded bg-neutral-100 text-neutral-700">
                        <span>淺粉-100</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Product Card 5 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>
                    <div
                        class="inline-flex gap-2 items-center px-3 py-1 mb-3 text-sm rounded bg-neutral-100 text-neutral-700">
                        <span>淺粉-100</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Product Card 6 -->
            <article
                class="flex px-8 py-1.5 bg-white rounded shadow-[0px_1px_13px_rgba(0,0,0,0.05)] max-sm:flex-col max-sm:items-center max-sm:p-4 max-sm:text-center">
                <div class="mr-6 bg-zinc-700 h-[104px] w-[104px]"></div>
                <div class="flex-1">
                    <h2 class="mb-3 text-lg text-neutral-700">LCD MonitorLCD Monitor</h2>
                    <div
                        class="inline-flex gap-2 items-center px-3 py-1 mb-3 text-sm rounded bg-neutral-100 text-neutral-700">
                        <span>淺粉-100</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <p class="text-base text-stone-300">備註:請分開包裝，獨立出貨</p>
                </div>
                <div class="flex flex-col justify-between items-end max-sm:items-center">
                    <div class="flex gap-3 mb-5">
                        <span class="text-base text-red-700">$650</span>
                        <span class="text-base line-through text-zinc-700">$650</span>
                    </div>
                    <div class="flex gap-3 max-sm:mt-4">
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Remove from wishlist">
                            <i class="ti ti-trash"></i>
                        </button>
                        <button
                            class="flex justify-center items-center bg-white border border-solid cursor-pointer border-black border-opacity-10 h-[41px] rounded-[300px] shadow-[4px_4px_4px_rgba(0,0,0,0.05)] w-[41px]"
                            aria-label="Add to cart">
                            <i class="ti ti-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </article>
        </section>
    </section>
</section>




@endsection


@push('scripts')
<!-- <script type="module" src="{{ asset('resources/js/home.js') }}"></script> -->
@endpush