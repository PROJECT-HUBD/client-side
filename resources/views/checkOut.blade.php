@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
  * {
    /* border: 1px solid red; */
  }
</style>
<main
  class="flex flex-wrap gap-10 items-start pt-10 pr-24 pb-20 pl-32 max-md:px-5">
  <!-- 確認地址與付款方式 -->
  <section class="grow shrink min-w-60 w-[495px] max-md:max-w-full">
    <div class="w-full max-w-[607px] max-md:max-w-full">
      <header
        class="flex flex-wrap gap-10 justify-between items-center w-full whitespace-nowrap max-md:max-w-full">
        <h1 class="gap-2.5 self-stretch my-auto text-3xl text-zinc-700">
          確認收件人地址
        </h1>
        <button
          class="overflow-hidden self-stretch pt-2.5 my-auto text-base font-bold tracking-wide leading-none text-center text-gray-500 underline underline rounded-md decoration-auto decoration-solid underline-offset-auto w-[131px]">
          變更收件人與地址
        </button>
      </header>

      <select class="mt-4 py-4 w-full text-base text-zinc-500 max-md:max-w-full flex flex-wrap gap-5 justify-between    max-md:px-5 ">
       

          <option value="1">台中市北區崇德路一段163號1樓 - 劉尚廉 (+886) 939022222</option>
          <option value="2">台南市東區大同路二段50巷12號 - 謝武言 (+886) 939357229</option>
          <option value="3">新北市板橋區文化路二段168號 - 陳玉文 (+886) 9463572558</option>


        
      </select>
    </div>

    <section class="mt-12 max-w-full w-[607px] max-md:mt-10">
      <h2 class="text-3xl text-zinc-700 max-md:max-w-full">付款方式</h2>
      <select class="mt-9 w-full max-w-[607px] max-md:max-w-full">

        <option selected hidden>請選擇付款方式</option>
        <option value="">信用卡付款</option>
        <option value="">ATM轉帳</option>

      </select>
    </section>

    <button
      class="overflow-hidden px-10 py-4 mt-12 w-full text-2xl font-bold tracking-normal leading-none text-center text-white whitespace-nowrap bg-red-500 rounded-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
      一鍵下訂
    </button>
  </section>
  <!------- 訂單商品明細 ------>
  <section
    class="flex flex-col grow shrink rounded min-w-60 w-[448px] max-md:max-w-full">
    <!-- 商品 -->
    <article
      class="flex overflow-hidden flex-wrap gap-10 justify-between items-center px-6 py-4 w-full bg-white rounded border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] max-md:px-5 max-md:max-w-full">
      <div
        class="flex gap-5 items-center self-stretch my-auto text-sm min-w-60 text-zinc-700">
        <div class="flex gap-6 items-center self-stretch my-auto min-w-60">
          <div
            class="flex shrink-0 self-stretch my-auto bg-zinc-700 h-[104px] w-[104px]"></div>
          <div class="self-stretch my-auto w-[214px]">
            <h3 class="text-lg leading-none text-neutral-700">
              LCD MonitorLCD Monitor
            </h3>
            <div
              class="flex flex-col items-start mt-1 max-w-full whitespace-nowrap w-[191px]">
              <div class="self-stretch py-1 w-40 rounded max-w-40">
                淺粉-100
              </div>
            </div>
            <p class="mt-1 leading-6">X 1</p>
          </div>
        </div>
      </div>
      <div class="flex gap-10 items-center self-stretch my-auto text-base">
        <div class="flex flex-col justify-center self-stretch my-auto">
          <p class="text-red-700">$650</p>
          <p class="mt-3 text-zinc-700">
            <span style="text-decoration: line-through">$650</span>
          </p>
        </div>
      </div>
    </article>
    <!-- count -->
    <section
      class="overflow-hidden self-center px-6 py-8 w-full rounded max-w-[560px] max-md:px-5 max-md:max-w-full">
      <div
        class="flex flex-wrap gap-10 justify-between items-start w-full text-base whitespace-nowrap text-zinc-700 max-md:max-w-full">
        <p class="gap-1 self-stretch w-[171px]">商品金額</p>
        <p>$1750</p>
      </div>
      <div
        class="flex flex-wrap gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap max-md:max-w-full">
        <p class="text-zinc-700">活動特惠</p>
        <p class="text-red-700">-$100</p>
      </div>
      <div
        class="flex flex-wrap gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap text-zinc-700 max-md:max-w-full">
        <p class="gap-2.5 self-stretch w-16">運費</p>
        <p class="text-right">Free</p>
      </div>
      <div
        class="mt-5 w-full rotate-[8.742277657347563e-8rad] max-md:max-w-full">
        <hr
          class="z-10 shrink-0 h-px border border-solid bg-zinc-700 border-zinc-700 max-md:max-w-full" />
      </div>
      <div
        class="flex flex-wrap gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap max-md:max-w-full">
        <p class="gap-2.5 self-stretch w-16 text-zinc-700">小計</p>
        <p class="text-red-700">$1650</p>
      </div>
    </section>
  </section>
</main>

@endsection
@push('scripts')
<!-- jQuery 內容 -->
@endpush