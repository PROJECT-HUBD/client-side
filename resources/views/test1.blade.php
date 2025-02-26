@extends('layouts.app')

@section('title', '測試頁1')
@section('meta_description', '這是測試頁1')
@section('meta_keywords', '測試')

@section('content')
    <!-- HTML 內容 -->
    {{-- <button type="button" id="btn" class="text-brandRed-light bg-brandRed-normal font-lexend font-semibold p-3 rounded-md hover:opacity-80 active:opacity-50 mb-10">測試點擊</button>
 <p id="text" class="text-xl mb-10"></p> --}}



    <body class="font-['Lexend']">
        <main
            class="flex overflow-hidden relative flex-col justify-center items-center px-56 py-48 min-h-screen text-sm font-light bg-neutral-100 max-md:px-5 max-md:py-24 max-sm:px-5 max-sm:py-12">
            <div class="object-cover absolute inset-0 size-full bg-cover bg-center"></div>

            <section
                class="flex relative w-full bg-white border border-solid border-[#e4e4e4] max-w-[992px] max-md:flex-col max-md:max-w-[496px]">
                <div class="object-cover w-[496px] max-md:w-full max-md:h-[300px] bg-gray-200"></div>

                <div
                    class="flex flex-col items-start px-24 pt-16 pb-32 bg-white w-[496px] max-md:px-5 max-md:py-10 max-md:w-full max-sm:px-4 max-sm:py-8">
                    <header class="flex gap-3.5 items-center text-2xl font-semibold text-gray-500">
                        <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                            alt="Logo" class="object-contain h-[46px] rounded-[800px] w-[46px]" />
                        <h1 class="text-2xl">Login</h1>
                    </header>

                    <form class="flex relative flex-col gap-6 mt-11 w-full max-w-[299px]">
                        <input type="text" placeholder="信箱或手機號碼"
                            class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                            aria-label="Email or phone number" />

                        {{-- <div class="relative">
                            <input type="password" placeholder="密碼"
                                class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                                aria-label="Password" />
                            <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/da6d51fd298722d7d87f4c2d819667fe6bb826fc0609ee1eea9369ae1e77c8af?placeholderIfAbsent=true"
                                alt="Toggle password visibility"
                                class="absolute right-3 w-4 h-4 top-[10px] cursor-pointer" />
                        </div> --}}

                        {{-- <div class="absolute right-0 text-xs opacity-50 bottom-[-18px] text-zinc-700">
                            <a href="#" class="underline">忘記密碼</a>
                        </div> --}}
                    </form>

                    <div class="mt-11 w-full">
                        {{-- <button type="button"
                            class="p-2.5 mb-4 font-bold text-center text-white bg-gray-500 rounded-md w-full">
                            登入
                        </button> --}}
                        <button type="button"
                            class="p-2.5 font-bold text-center text-gray-500 rounded-md border border-solid border-[#626981] w-full">
                            註冊會員
                        </button>
                    </div>

                    <div class="flex gap-4 justify-center items-center mt-11 text-stone-300 w-full">
                        <div class="h-px bg-stone-300 w-[60px]"></div>
                        <span>OR</span>
                        <div class="h-px bg-stone-300 w-[60px]"></div>
                    </div>

                    <div class="flex gap-3 justify-between mt-11 w-full max-sm:flex-col">
                        <button type="button"
                            class="flex gap-1.5 items-center justify-center px-5 py-2.5 w-36 font-bold rounded-md border border-solid border-[#e4e4e4] text-neutral-400 max-sm:w-full">
                            <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/fb19455a0a422cfb2a3eb30c07a5e40459425ecf9618d0b06bc991c0f73981c3?placeholderIfAbsent=true"
                                alt="Facebook" class="w-6 h-6" />
                            <span>Facebook</span>
                        </button>
                        <button type="button"
                            class="flex gap-1.5 items-center justify-center px-5 py-2.5 w-36 font-bold rounded-md border border-solid border-[#e4e4e4] text-neutral-400 max-sm:w-full">
                            <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/c36d786440e210ccb17b58017526e5be051508a6db263f1fdb55af586e621dde?placeholderIfAbsent=true"
                                alt="Line" class="w-6 h-6" />
                            <span>Line</span>
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </body>


    <!-- icon 使用 https://icon-sets.iconify.design/-->
    {{-- <div><span class="w-12 h-12 icon-[jam--alert]"></span></div> --}}
    {{-- <div><span class="w-12 h-12 bg-sky-400 icon-[jam--alert]"></span></div> --}}
@endsection

@push('scripts')
    <!-- jQuery 內容 -->
    <script>
        $('#btn').on('click', () => {
            $('#text').append('123, ')
        })
    </script>
@endpush
