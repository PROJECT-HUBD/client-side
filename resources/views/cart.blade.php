@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="mt-[150px]">
  <!-- 麵包屑 -->
  <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '購物車'],
         ]" />

  <div class="flex flex-col items-center mx-[120px]">
    <!------------------------------------- table ------------------------------->
    <div class="flex flex-col items-center max-w-full ">
      <!------------------------------------- tableTitle ------------------------------->
      <header
        class="flex overflow-hidden gap-10 items-center self-stretch px-8 py-3 w-full text-base tracking-wide leading-7 bg-white rounded border border-solid shadow-sm border-[color:var(--Grey-Light,#F6F6F6)] text-zinc-700 max-md:px-5 max-md:max-w-full">
        <div class="flex gap-3.5 items-center self-stretch my-auto">
          <input class="allCheckbox rounded h-[25px] w-[25px]" type="checkbox">
          <span class="self-stretch my-auto">全選</span>
        </div>
      </header>
      <!------------------------------------- tableCell ------------------------------->
      <section class="productRow flex items-end w-full max-md:max-w-full">

        <article
          class="flex overflow-hidden flex-wrap gap-10 justify-between items-center px-8 py-8 bg-white rounded shadow-sm  min-w-60 w-[1200px] max-md:px-5 max-md:max-w-full">
          <!-- tablerowleft -->
          <div class="row-left-part flex gap-5 items-center self-stretch my-auto min-w-60">
            <!-- checkbox -->
            <div class="flex gap-3.5 items-center self-stretch my-auto w-[25px]">
              <input class="checkbox  rounded h-[25px] w-[25px]" type="checkbox">
            </div>
            <div
              class="flex gap-6 items-center self-stretch my-auto min-w-60 text-neutral-700">

              <img
                class="flex shrink-0 self-stretch my-auto bg-zinc-700 h-[104px] w-[104px]"></img>
              <!-- product_detail -->
              <div class="self-stretch my-auto w-[213px]">
                <h3 class="text-lg leading-none">LCD MonitorLCD Monitor</h3>
                <div
                  class="flex flex-col items-start mt-3 max-w-full text-sm whitespace-nowrap w-[191px] rounded">
                  <select
                    class="flex gap-10 justify-between items-center px-3 py-1 w-40 rounded bg-neutral-100 max-w-40 border border-none">
                    <option value="">黑色-S</option>
                    <option value="">黑色-M</option>
                    <option value="">黑色-L</option>
                  </select>
                </div>
                <p class="mt-3 text-base text-stone-300">
                  備註:請分開包裝，獨立出貨
                </p>
              </div>
            </div>
          </div>
          <!-- tablerowright -->
          <div class="row-right-part flex gap-10 items-center self-stretch my-auto min-w-60">
            <!-- count -->
            <div
              class="flex items-center self-stretch my-auto text-2xl font-medium text-center whitespace-nowrap text-zinc-700">
              <button
                class="buttonMinus self-stretch px-2.5  py-3 my-auto capitalize  border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]"
                aria-label="Decrease quantity">
                -
              </button>
              <div
                type="text"
                value="01"
                class="countNumber self-stretch p-2.5  py-4 my-auto border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] text-zinc-500 w-[100px] text-center"
                aria-label="Quantity">1</div>
              <button
                class="buttonPlus self-stretch px-2.5 my-auto capitalize border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]"
                aria-label="Increase quantity">
                +
              </button>
            </div>
            <!-- price -->
            <div
              class="flex flex-col justify-center self-stretch my-auto text-base">
              <p class="DiscountPrice text-red-700">`$650*{this.countNumber}`</p>
              <p class="mt-3 text-zinc-700" style="text-decoration: line-through">$950
              </p>
            </div>
          </div>
        </article>
      </section>
    </div>
    <!------------------------------------- Coupon&Count ------------------------------->
    <section
      class="flex gap-10 justify-end mt-7 max-w-full rounded bg-neutral-100 ml-auto">
      <div
        class="overflow-hidden py-8 pr-6 pl-6 rounded min-w-60 w-[470px] max-md:px-5">

        <select class="flex overflow-hidden gap-5 justify-between px-6 py-3 w-full text-sm tracking-wide leading-7 whitespace-nowrap bg-white rounded-md border border-solid border-zinc-300 text-neutral-500 max-md:pr-5 decoration-none">
          <option value="" selected hidden>請選擇折扣券</option>
          <option value="生日券">生日券</option>
          <option value="折一百">折一百</option>
        </select>


        <div
          class="flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap text-zinc-700 max-md:max-w-full">
          <span class="gap-1 self-stretch w-[171px]">商品金額</span>
          <span class="totalPrice">$1750</span>
        </div>
        <div
          class="flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap max-md:max-w-full">
          <span class="text-zinc-700">活動特惠</span>
          <span class="festivalMinus text-red-700">-100</span>
        </div>
        <div
          class="flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap text-zinc-700 max-md:max-w-full">
          <span class="gap-2.5 self-stretch w-16">運費</span>
          <span class="text-right">Free</span>
        </div>
        <div
          class="mt-5 w-full rotate-[8.742277657347563e-8rad] max-md:max-w-full">
          <div
            class="z-10 shrink-0 h-px border border-solid bg-zinc-700 border-zinc-700 max-md:max-w-full"></div>
        </div>
        <div
          class="flex gap-10 justify-between items-start mt-5 w-full whitespace-nowrap max-md:max-w-full">
          <span class="gap-2.5 self-stretch w-16 text-base text-zinc-700">小計</span>
          <span class="totalPriceWithDiscount text-3xl leading-none text-red-700">$1650</span>
        </div>
      </div>
    </section>
    <!------------------------------------------ bottomRow ----------------------------->
    <div
      class="flex flex-wrap px-[20px] gap-10 justify-between items-start mt-7 max-w-full text-2xl tracking-normal leading-none whitespace-nowrap w-[1201px]">
      <!-- 繼續購物 -->
      <a href="{{route('home')}}"
        class="flex overflow-hidden gap-4 items-center px-8 py-4 font-semibold bg-gray-500 rounded-md text-neutral-100 max-md:px-5">
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/c952c62e6cb99f0e5fac8a2b72bd495f5e660b6e2fc4c7c02951f27ad1e2d261?placeholderIfAbsent=true&apiKey=29bdb496da09449eb579968368248119"
          class="object-contain shrink-0 self-stretch my-auto aspect-[0.58] w-[15px]"
          alt="Back arrow" />
        <span class="self-stretch my-auto">繼續購物</span>
      </a>
      <!-- 去買單 -->
      <a href="{{route('check_out')}}"
        class="flex overflow-hidden gap-4 items-center py-4 pr-5 pl-8 font-bold text-white bg-red-500 rounded-md min-h-[62px] w-[150px] max-md:pl-5">
        <span class="self-stretch my-auto">去買單</span>
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/01358f71e96d7239da8d986d8c3bbfd60d8b98845b483c92c503485ebb51f59f?placeholderIfAbsent=true&apiKey=29bdb496da09449eb579968368248119"
          class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-[0.56]"
          alt="Forward arrow" />
      </a>
    </div>
  </div>

</body>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery 內容 -->
<script>
  // <---------------------全選------------------------->
  $(document).ready(function() {
    $(".allCheckbox").change(function() {
      $(".checkbox").prop("checked", $(this).prop("checked"));
    });
  });
  // // <------------------------Count---------------------------->
  // $(document).ready(function () {
  //     $(".buttonPlus").click(function () {
  //         let count = parseInt($(".countNumber").text()); // 取得數量
  //         $(".countNumber").text(count + 1); // 增加數量
  //     });

  //     $(".buttonMinus").click(function () {
  //         let count = parseInt($(".countNumber").text()); // 取得數量
  //         if (count > 1) {
  //             $(".countNumber").text(count - 1); // 減少數量
  //         } else {
  //             // 如果數量變成 0，彈出確認框
  //             if (confirm("請問你要刪除商品嗎?")) {
  //                 $(".productRow").remove(); // 刪除整個商品行
  //             } else {
  //                 $(".countNumber").text(1); // 取消則把數量設回 1
  //             }
  //         }
  //     });
  // });

  // // <--------------------CountPrice------------------------------------>
  // $(document).ready(function () {
  //     function updateDiscountPrice() {
  //         let count = parseInt($(".countNumber").text()); // 取得數量
  //         let price = 650 * count; // 計算總價
  //         $(".DiscountPrice").text(`$${price}`); // 更新顯示價格
  //     }

  //     $(".buttonPlus").click(function () {
  //         let count = parseInt($(".countNumber").text());
  //         $(".countNumber").text(count + 1);
  //         updateDiscountPrice(); // 更新價格
  //     });

  //     $(".buttonMinus").click(function () {
  //         let count = parseInt($(".countNumber").text());
  //         if (count > 1) {
  //             $(".countNumber").text(count - 1);
  //             updateDiscountPrice(); // 更新價格
  //         } else {
  //             if (confirm("請問你要刪除商品嗎?")) {
  //                 $(".productRow").remove();
  //             } else {
  //                 $(".countNumber").text(1);
  //                 updateDiscountPrice(); // 重新設回 1 並更新價格
  //             }
  //         }
  //     });

  //     // 初始化時更新價格
  //     updateDiscountPrice();
  // });
  // <-----------------------------totalPriceWithDiscount--------------------------------->
  $(document).ready(function() {
    function updatePrices() {
      let totalPrice = 0;

      // 遍歷所有 .countNumber，計算總價
      $(".productRow").each(function() {
        let count = parseInt($(this).find(".countNumber").text());
        let price = 650 * count; // 單價 650
        $(this).find(".DiscountPrice").text(`$${price}`); // 更新單項商品價格
        totalPrice += price; // 累加所有商品的價格
      });

      let festivalMinus = parseInt($(".festivalMinus").text()) || 0; // 取得節慶折扣，若無則為 0
      let totalPriceWithDiscount = totalPrice + festivalMinus; // 計算折扣後的總價

      $(".totalPrice").text(`$${totalPrice}`); // 更新總金額
      $(".totalPriceWithDiscount").text(`$${totalPriceWithDiscount}`); // 更新折扣後的總金額
    }

    $(".buttonPlus").click(function() {
      let countElement = $(this).closest(".productRow").find(".countNumber");
      let count = parseInt(countElement.text());
      countElement.text(count + 1);
      updatePrices(); // 更新所有價格
    });

    $(".buttonMinus").click(function() {
      let countElement = $(this).closest(".productRow").find(".countNumber");
      let count = parseInt(countElement.text());

      if (count > 1) {
        countElement.text(count - 1);
        updatePrices(); // 更新所有價格
      } else {
        if (confirm("請問你要刪除商品嗎?")) {
          $(this).closest(".productRow").remove(); // 刪除商品
        } else {
          countElement.text(1); // 設回 1
        }
        updatePrices(); // 更新所有價格
      }
    });

    // 初始化時先計算一次價格
    updatePrices();
  });
</script>

@endpush