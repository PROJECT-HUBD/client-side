@extends('layouts.app')

@section('title', '購物車')
@section('meta_description', '購物車')
@section('meta_keywords', '購物車')

@section('content')
<section class="mt-[150px] ">
  <!-- 麵包屑 -->
  <x-breadcrumb :items="[
             ['name' => '首頁', 'url' => route('home')],
             ['name' => '購物車'],
         ]" />
<style>
  .body {
    /* border: 1px black solid; */
    background-color: white;

  }

  #hiddenArticle {
    display: none;
  }

  .checkbox:checked {
    background-color: #626981;

  }

  .allCheckbox:checked {
    background-color: #626981;

  }
</style>


<div class="body flex flex-col items-center lg:mx-[120px] md:mx-[60px] sm:mx-[20px]">
  <!------------------------------------- table ------------------------------->
  <div class="flex flex-col w-full ">
    <!------------------------------------- tableTitle ------------------------------->
    <header
      class="flex overflow-hidden gap-10 items-center self-stretch px-8 py-3 w-full text-base tracking-wide leading-7 bg-white rounded border border-solid shadow-sm border-[color:var(--Grey-Light,#F6F6F6)] text-zinc-700 max-md:px-5 max-md:max-w-full">
      <div class="flex gap-3.5 items-center self-stretch my-auto">
        <input class="allCheckbox checkbox  rounded h-[25px] w-[25px] background-color-brandBlue-normal" type="checkbox" checked>
        <span class="self-stretch my-auto ">全選</span>
      </div>
    </header>
    <!------------------------------------- tableCell ------------------------------->
    <div class="productRow">

    </div>
    <section id="hiddenArticle" class=" flex items-end w-full max-md:max-w-full">


      <!-- <article 
          class="flex overflow-hidden flex-wrap gap-10 justify-between items-center px-8 py-8 bg-white rounded shadow-sm  min-w-60 max-md:px-5 max-md:max-w-full">-->
      <!-- tablerowleft -->
      <!-- <div class="row-left-part flex gap-5 items-center self-stretch my-auto min-w-60">
           
            <div class="checkboxClass flex gap-3.5 items-center self-stretch my-auto w-[25px]">
              <input class="checkbox  rounded h-[25px] w-[25px]" type="checkbox">
            </div>
            <div class="flex gap-6 items-center self-stretch my-auto min-w-60 text-neutral-700">
              <img class="product_img flex shrink-0 cover my-auto h-[104px] w-[104px]"
                src="{{ asset('images/products/PS01_B01.jpg') }} "
                alt="Product Image" /> -->
      <!-- product_detail -->
      <!-- <div class="self-stretch my-auto w-[213px]">
                <h3 class="product_name text-lg leading-none">女裝百褶拼接寬鬆上衣</h3>
                <div class="flex flex-col items-start mt-3 max-w-full text-sm whitespace-nowrap w-[191px] rounded">
                  <select class="productVarientDropdown flex gap-10 justify-between items-center px-3 py-1 w-40 rounded bg-neutral-100 max-w-40 border border-none">
                    <option value="">black-S</option>
                    <option value="">black-M</option>
                    <option value="">black-L</option>
                    <option value="">white-S</option>
                    <option value="">white-M</option>
                    <option value="">white-L</option>
                  </select>
                </div>
              </div>
            </div>
          </div> -->
      <!-- tableRowRight -->
      <!-- <div class="row-right-part flex gap-10 items-center self-stretch my-auto min-w-60">
            count -->
      <!-- <div class="flex items-center self-stretch my-auto text-2xl font-medium text-center whitespace-nowrap text-zinc-700">
              <button class="buttonMinus self-stretch px-2.5 py-3 my-auto capitalize border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]" aria-label="Decrease quantity">-</button>
              <div type="text" value="01" class="quantity self-stretch p-2.5 py-4 my-auto border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] text-zinc-500 w-[100px] text-center" aria-label="Quantity">1</div>
              <button class="buttonPlus self-stretch px-2.5 my-auto capitalize border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]" aria-label="Increase quantity">+</button>
            </div> -->
      <!-- price -->
      <!-- <div class="flex flex-col justify-center self-stretch my-auto text-base">
              <p class="discount_price text-red-700">$650</p>
              <p class="product_price mt-3 text-zinc-700" >$950</p>
            </div>
          </div>
        </article>    -->


    </section>
  </div>
  <!------------------------------------- Coupon&Count ------------------------------->
  <section
    class=" flex gap-10 justify-end mt-7 max-w-full rounded bg-neutral-100 ml-auto">
    <div
      class="overflow-hidden py-8 pr-6 pl-6 rounded min-w-60 w-[470px] max-md:px-5">

      <select class="flex overflow-hidden gap-5 justify-between px-6 py-3 w-full text-sm tracking-wide leading-7 whitespace-nowrap bg-white rounded-md border border-solid border-zinc-300 text-neutral-500 max-md:pr-5 decoration-none">
        <!-- <option value="" selected hidden>請選擇折扣券</option> -->
        <option value="生日券" selected hidden>生日券</option>
        <option value="新會員首單9折">新會員首單9折</option>
        <option value="春季特賣8折">春季特賣8折</option>
        <option value="滿$500折$50">滿$500折$50</option>
        <option value="全站免運費">全站免運費</option>
        <option value="指定商品買一送一">指定商品買一送一</option>
        <option value="VIP會員85折">VIP會員85折</option>
        <option value="週年慶全館75折">週年慶全館75折</option>
      </select>


      <div
        class="flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap text-zinc-700 max-md:max-w-full">
        <span class="gap-1 self-stretch w-[171px]">商品金額</span>
        <span class="totalPrice">$1750</span>
      </div>
      <div
        class="festivalMinusSession flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap max-md:max-w-full">
        <span class="text-zinc-700">活動特惠</span>
        <span class="festivalMinus text-red-700">九折</span>
      </div>
      <div
        class="flex gap-10 justify-between items-start mt-5 w-full text-base whitespace-nowrap max-md:max-w-full">
        <span class="text-zinc-700">優惠券折扣</span>
        <span class="couponMinus text-red-700">-$100</span>
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
    class="flex no-wrap  gap-10 justify-between items-start mt-7 max-w-full text-2xl tracking-normal leading-none whitespace-nowrap w-[1920px]">
    <!-- 繼續購物 -->
    <a href="{{ route('home') }}"
    
      class="keepShoping flex overflow-hidden gap-4 items-center px-8 py-4 font-semibold bg-gray-500 rounded-md text-neutral-100 max-md:px-5">
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c952c62e6cb99f0e5fac8a2b72bd495f5e660b6e2fc4c7c02951f27ad1e2d261?placeholderIfAbsent=true&apiKey=29bdb496da09449eb579968368248119"
        class="object-contain shrink-0 self-stretch my-auto aspect-[0.58] w-[15px]"
        alt="Back arrow" />
      <span class=" self-stretch my-auto">繼續購物</span>
    </a>
    <!-- 去買單 -->

    <a href="{{ route('check_out') }}"

      class="goToCheckOut flex overflow-hidden gap-4 items-center py-4 pr-5 pl-8 font-bold text-white bg-red-500 rounded-md min-h-[62px] w-[150px] max-md:pl-5">
      <span class=" self-stretch my-auto">去買單</span>
      <img
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/01358f71e96d7239da8d986d8c3bbfd60d8b98845b483c92c503485ebb51f59f?placeholderIfAbsent=true&apiKey=29bdb496da09449eb579968368248119"
        class="object-contain shrink-0 self-stretch my-auto w-3.5 aspect-[0.56]"
        alt="Forward arrow" />
    </a>
  </div>
</div>
</section >
@endsection
@push('scripts')

<!-- jQuery 內容 -->
<script>
  // <---------------------全選------------------------->
  // $(document).ready(function() {
  $(".allCheckbox").change(function() {
    $(".checkbox").prop("checked", $(this).prop("checked"));
  });
  // });
  // <---------------------接收商品資料------------------------->
  // var productList = [{
  //     product_img: "{{ asset('images/products/clothes/shorts/ps001_01_01.jpg') }}",
  //     product_name: "女裝百褶拼接寬鬆上衣",
  //     product_size: "S",
  //     product_color: "Black",
  //     quantity: 3,
  //     product_price: 1640,

  //   },
  //   {
  //     product_img: "{{ asset('images/products/clothes/shorts/ps002_01_01.jpg') }}",
  //     product_name: "女裝百褶拼接寬鬆上衣",
  //     product_size: "L",
  //     product_color: "Black",
  //     quantity: 3,
  //     product_price: 1380,

  //   },

  // ];

  // console.log(productList);
  // <---------------------接收商品資料_from_productAPI------------------------->
  $(document).ready(function() {
    $.ajax({
      url: '/getCartData', // 修改為正確的 URL
      method: 'GET',
      success: function(productList) {
        console.log(productList); // 顯示返回的商品數據
        // <---------------------將資料存入 localStorage-------------------------> 
        localStorage.setItem("productList", JSON.stringify(productList));
        let storedProductList = localStorage.getItem("productList");
        if (storedProductList) {
          console.log("從 localStorage 讀取的 productList:", JSON.parse(storedProductList));
          renderProductList(JSON.parse(storedProductList));
          updatePrices(); // 確保價格也會更新
        }
        // <---------------------// 處理加減（移除$符號並轉換為數字）-------------------------> 
        $(".buttonPlus").click(function() {
          // console.log("ok");

          let countElement = $(this).closest(".productRow>article").find(".quantity");
          // console.log(this);

          let count = parseInt(countElement.text()); // 獲取當前數量
          countElement.text(count + 1); // 增加數量
          updatePrices(); // 更新所有價格
        });

        $(".buttonMinus").click(function() {
          let countElement = $(this).closest(".productRow>article").find(".quantity");
          let count = parseInt(countElement.text()); // 獲取當前數量

          if (count > 1) {
            countElement.text(count - 1); // 減少數量
            updatePrices(); // 更新所有價格
          } else {
            if (confirm("請問你要刪除商品嗎?")) {
              $(this).closest(".productRow>article").remove(); // 刪除商品
            } else {
              countElement.text(1); // 設回1
            }
            updatePrices(); // 更新所有價格
          }
        });
        updatePrices();
      }, //end of success
      error: function(error) {
        console.log(error); // 如果有錯誤，顯示錯誤訊息
      } //end of error
    }) //end of Ajax
    // <---------------------// 渲染畫面-------------------------> 
    function renderProductList(productList) {
      //  console.log(productList);            
      for (let i = 0; i < productList.length; i++) {
        // console.log(i);
        let resultHTML = "";

        // 開始 article 標籤
        resultHTML += `<article class="flex overflow-hidden flex-wrap gap-10 justify-between items-center px-8  py-8 bg-white rounded shadow-sm  max-w-full　lg:gap-auto">`;

        // 開始 row-left-part
        resultHTML += `<div class="row-left-part flex gap-5 items-center self-stretch my-auto min-w-60">`;

        // checkbox
        resultHTML += `<div class="flex gap-3.5 items-center self-stretch my-auto w-[25px]">`;
        resultHTML += `<input class="checkbox rounded h-[25px] w-[25px]" type="checkbox" checked>`;
        resultHTML += `</div>`;

        // 商品圖片與詳細資訊
        resultHTML += `<div class="flex gap-6 items-center self-stretch my-auto min-w-60 text-neutral-700">`;
        resultHTML += `<img class="product_img flex shrink-0 cover my-auto h-[104px] w-[104px]" src="${productList[i].product_img}" alt="Product Image">`;

        // 產品資訊
        resultHTML += `<div class="self-stretch my-auto w-[213px]">`;
        resultHTML += `<h3 class="product_name text-lg leading-none">${productList[i].product_name}</h3>`;
        resultHTML += `<p class="product_id ">${productList[i].product_id}</p>`;

        // 產品選擇
        resultHTML += `<div class="flex flex-col items-start mt-3 max-w-full text-sm whitespace-flexwrap w-[100px] rounded">`;
        resultHTML += `<select name="product_color"  class="product_color flex gap-10 justify-between items-center px-3 py-1 w-32 rounded bg-neutral-100 max-w-40 border border-none">`;
        resultHTML += `<option  value="${productList[i].product_color}"  hidden>${productList[i].product_color}</option>`;
        resultHTML += `<option  value="Black">Black</option>`;
        resultHTML += `<option  value="Grey">Grey</option>`;
        resultHTML += `<option  value="White">White</option>`;
        resultHTML += `</select>`;
        resultHTML += `<select name="product_size"  class="product_size flex gap-10 justify-between items-center mt-2 px-3 py-1 w-32 rounded bg-neutral-100 max-w-40 border border-none">`;
        resultHTML += `<option value="${productList[i].product_size}" hidden>${productList[i].product_size}</option>`;
        resultHTML += `<option value="S">S</option>`;
        resultHTML += `<option value="M">M</option>`;
        resultHTML += `<option value="L">L</option>`;
        resultHTML += `</select>`;
        resultHTML += `</div>`; // 關閉選擇框

        resultHTML += `</div>`; // 關閉產品資訊
        resultHTML += `</div>`; // 關閉產品圖片與資訊

        resultHTML += `</div>`; // 關閉 row-left-part

        // 開始 row-right-part
        resultHTML += `<div class="row-right-part flex gap-10 items-center self-stretch my-auto min-w-60">`;

        // 數量調整
        resultHTML += `<div class="flex items-center self-stretch my-auto text-2xl font-medium text-center whitespace-nowrap text-zinc-700">`;

        resultHTML += `<button class="buttonMinus self-stretch px-2.5 py-3 my-auto capitalize border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]" aria-label="Decrease quantity">-</button>`;

        resultHTML += `<div type="text" value="01" class="quantity self-stretch p-2.5 py-4 my-auto border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] text-zinc-500 w-[100px] text-center" aria-label="Quantity">${Number(productList[i].quantity)}</div>`;

        resultHTML += `<button class="buttonPlus self-stretch px-2.5 my-auto capitalize border border-solid border-[color:var(--grey-light-hover,#E4E4E4)] h-[58px] w-[58px]" aria-label="Increase quantity">+</button>`;

        resultHTML += `</div>`; // 關閉數量調整

        // 價格顯示
        resultHTML += `<div class="flex flex-col justify-center self-stretch my-auto text-base">`;
        // resultHTML += `<p class="discount_price text-red-700">$${Number(productList[i].discount_price)}</p>`; // 强制转换为数字并格式化为两位小数
        resultHTML += `<p class="product_price mt-3 text-zinc-700" >$${Number(productList[i].product_price)}</p>`; // 强制转换为数字并格式化为两位小数
        resultHTML += `</div>`; // 關閉價格區塊

        resultHTML += `</div>`; // 關閉 row-right-part

        // 結束 article
        resultHTML += `</article>`;
        // 將結果累加到容器中
        $(".productRow").append(resultHTML);

      }
    }
    // <-----------------------------updatePrice_totalPriceWithDiscount--------------------------------->

    function updatePrices() {
      let totalPrice = 0;


      $(".productRow>article").each(function() {
        let checkbox = $(this).find("input[type='checkbox']");

        if (checkbox.is(":checked")) {
          let count = parseInt($(this).find(".quantity").text());
          let product_price = parseFloat($(this).find(".product_price").text().replace('$', ''));
          let price = product_price * count;
          totalPrice += price;
        }
      });



      // 處理活動特惠&優惠券折扣券（移除$符號並轉換為數字）
      let festivalMinusText = $(".cMinus").text().replace('$', '');
      let couponMinusText = $(".couponMinus").text().replace('$', '');
      let couponMinus = parseInt(couponMinusText) || 0; // 處理節慶折扣

      let totalPriceWithDiscount = totalPrice * 0.9 + couponMinus; // 計算折扣後的總價

      $(".totalPrice").text(`$${totalPrice.toFixed(0)}`); // 更新總金額
      $(".festivalMinus").text(`-$${totalPrice*0.1}`); // 更新活動特惠
      $(".totalPriceWithDiscount").text(`$${totalPriceWithDiscount.toFixed(0)}`); // 更新折扣後的總金額
    } //end of updatePrices()

    // **監聽 Checkbox 變更**
    $(document).on("change", "input[type='checkbox']", function() {
      updatePrices(); // ✅ 當 Checkbox 勾選/取消時，立即重新計算總價
    });
  }); //end of doucument ready
  // <-----------------------------click&SaveLocalStorage--------------------------------->
  
  $(document).ready(function() {
    // 點擊 "繼續購物" 按鈕
    $(".keepShoping").on('click', function() {
      saveDataToLocalStorage();
    });

    // 點擊 "結帳" 按鈕
    $(".goToCheckOut").on('click', function() {
      saveDataToLocalStorage();
    });


    // <----------------------------------儲存資料到 localStorage 的通用函數------------------------------------->
    function saveDataToLocalStorage() {
      let productList = [];

      $(".productRow>article").each(function() {
        let productData = {
          product_img: $(this).find(".product_img").attr("src"),
          product_name: $(this).find(".product_name").text(),
          product_id: $(this).find(".product_id").text().trim(),
          product_size: $(this).find(".product_size").val(),
          product_color: $(this).find(".product_color").val(),
          quantity: parseInt($(this).find(".quantity").text()),
          product_price: parseFloat($(this).find(".product_price").text().replace('$', ''))
        };

        productList.push(productData);
      });

      // 獲取總價資料
      let cartPrice = {
        totalPrice: parseFloat($(".body").find(".totalPrice").text().replace('$', '')), // 解析總價
        festivalMinus: parseFloat($(".festivalMinus").text().replace('$', '')), // 節慶折扣
        couponMinus: parseFloat($(".couponMinus").text().replace('$', '')), // 優惠券折扣
        totalPriceWithDiscount: parseFloat($(".body").find(".totalPriceWithDiscount").text().replace('$', '')) // 計算折扣後的總價
      };

      // 將資料儲存到 localStorage
      localStorage.setItem("productList", JSON.stringify(productList)); // 儲存商品資料
      localStorage.setItem("cartPrice", JSON.stringify(cartPrice)); // 儲存總價資料

      // 用來檢查儲存的資料（開發測試時使用）
      console.log("Product List: ", JSON.parse(localStorage.getItem("productList")));
      console.log("Cart Price: ", JSON.parse(localStorage.getItem("cartPrice")));
    }//saveCartToLocalStorage

  }); //end of doucument ready
  //  <----------------------------------儲存購物車資料到資料庫------------------------------------->
  $(document).ready(function() {
    // **監聽數量變更**
    $(document).on("click", ".buttonPlus, .buttonMinus", function() {
      let article = $(this).closest("article");
      let productId = article.find(".product_id").text().trim();
      let quantity = parseInt(article.find(".quantity").text());
      article.find(".quantity").text(quantity);
      updateCart(productId, quantity, article);
    });

    // **監聽尺寸變更**
    $(document).on("change", ".product_size", function() {
      let article = $(this).closest("article");
      let productId = article.find(".product_id").text().trim();
      let quantity = parseInt(article.find(".quantity").text());
      updateCart(productId, quantity, article);
    });

    // **監聽顏色變更**
    $(document).on("change", ".product_color", function() {
      let article = $(this).closest("article");
      let productId = article.find(".product_id").text().trim();
      let quantity = parseInt(article.find(".quantity").text());
      updateCart(productId, quantity, article);
    });

    // **更新購物車資訊**
    function updateCart(productId, quantity, article) {
      let productSize = article.find(".product_size").val();
      let productColor = article.find(".product_color").val();

      $.ajax({
        url: '/updateCart',
        method: 'POST',
        contentType: "application/json",
        data: JSON.stringify({
          product_id: productId,
          quantity: quantity,
          product_size: productSize,
          product_color: productColor
        }),
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          console.log("✅ 購物車更新成功:", response);
        },
        error: function(xhr, status, error) {
          console.error("❌ 更新購物車失敗:", status, error);
          console.error("📢 詳細錯誤訊息:", xhr.responseText);
        }
      });
    }
  });
</script>

@endpush