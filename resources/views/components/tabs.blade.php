@php
$tabIndex = 0;
@endphp

<div class="border-b border-gray-200">
    <!-- Tabs 標籤區 -->
    <div class="flex space-x-4" id="tabs-nav">
        @foreach($tabs as $index => $tab)
        <button data-index="{{ $index }}"
            class="tab-button px-4 py-2 focus:outline-none text-gray-500 hover:text-blue-500">
            {{ $tab }}
        </button>
        @endforeach
    </div>

    <!-- Tabs 內容區 -->
    <div class="mt-4" id="tabs-content">
        {{ $slot }}
    </div>
</div>

@push('scripts')
<!-- <script type="module" src="{{ asset('resources/js/tabs.js') }}"></script> -->
<script>
    $(document).ready(function() {
        $(".tab-button").click(function() {
            let index = $(this).data("index");

            // 切換 active 樣式
            $(".tab-button")
                .removeClass("text-blue-500 border-b-2 border-brandRed-normal")
                .addClass("text-brandRed-normal");
            $(this).addClass(
                "text-brandRed-normal border-b-2 border-brandRed-normal"
            );

            // 顯示對應的 tab 內容
            $(".tab-content").addClass("hidden");
            $("#tab-" + index).removeClass("hidden");
        });

        // 預設啟動第一個 Tab
        $(".tab-button:first").addClass("text-brandRed-normal border-b-2 border-brandRed-normal");
        $(".tab-content:not(:first)").addClass("hidden");
    });
</script>
@endpush