@php
$tabIndex = 0;
@endphp

<div class="w-full flex flex-col justify-center items-center">
    <!-- Tabs 標籤區 -->
    <div class="flex space-x-4 mb-5" id="tabs-nav">
        @foreach($tabs as $index => $tab)
        <button data-index="{{ $index }}"
            class="tab-button px-4 py-2 focus:outline-none text-brandGray-normalLight hover:text-brandRed-normal">
            {{ $tab }}
        </button>
        @endforeach
    </div>
    <div class="w-full h-[0.5px] bg-brandGray-lightHover"></div>

    <!-- Tabs 內容區 -->
    <div class="mt-4" id="tabs-content">
        {{ $slot }}
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $(".tab-button").click(function() {
            let index = $(this).data("index");

            // 切換 active 樣式
            $(".tab-button")
                .removeClass("text-brandRed-normal border-b-2 border-brandRed-normal")
                .addClass("text-brandGray-normalLight");
            $(this)
                .removeClass("text-brandGray-light")
                .addClass("text-brandRed-normal border-b-2 border-brandRed-normal");

            // 顯示對應的 tab 內容
            $(".tab-content").addClass("hidden");
            $("#tab-" + index).removeClass("hidden");
        });

        // 預設啟動第一個 Tab
        $(".tab-button:first")
            .removeClass("text-brandGray-normalLight")
            .addClass("text-brandRed-normal border-b-2 border-brandRed-normal");
        $(".tab-content:not(:first)").addClass("hidden");
    });
</script>
@endpush
