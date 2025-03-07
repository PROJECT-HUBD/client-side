<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> 驗證 Verify</title>
    <!-- Vite + Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Lexend']">
    <main
        class="flex justify-center items-center min-h-screen bg-cover bg-center h-screen w-full max-md:px-5 max-md:py-24"
        style="background-image: url('{{ asset('images/bg.jpg') }}');">

        {{-- 遮罩 --}}
        <div class="object-cover absolute inset-0 size-full bg-gray-100 bg-opacity-50 bg-cover bg-center"></div>

        <section
            class="relative flex flex-col justify-center items-center bg-white border border-solid border-[#e4e4e4] 
                mx-auto 
                w-full max-w-[992px] 
                xl:max-w-[992px] 
                lg:w-[992px] lg:min-h-[500px] 
                md:w-[90vw] md:aspect-[992/693] 
                sm:w-[85vw] sm:aspect-[992/693] 
                transition-all duration-300 ease-in-out p-8 max-md:p-6 max-sm:p-4 max-sm:m-5">

            <header
                class="flex items-center gap-2 mb-6 text-2xl font-semibold text-gray-500 max-md:mb-5 max-sm:mb-4 
                     w-full max-w-[320px]">
                <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                    class="object-contain h-[46px] w-[46px] rounded-full" alt="Verify Logo" />
                <h1 class="text-2xl font-semibold leading-9 text-gray-500">Verify</h1>
            </header>

            <form method="POST" action="{{ route('myverify.code') }}"
                class="flex flex-col w-full max-w-[320px] scale-100 transition-transform 
                       xl:mx-auto 
                       lg:scale-100 
                       max-lg:scale-[.85] 
                       max-md:scale-[.75] 
                       max-sm:scale-[.65] 
                       mx-auto">
                @csrf
                <p class="mb-3 text-base tracking-widest leading-6 text-black opacity-50 text-left">
                    我們將驗證碼寄送到您的信箱，<br />
                    請輸入驗證碼完成註冊！
                </p>

                <!-- 限制輸入框寬度，調整高度 -->
                <div class="mb-9 w-full max-w-[320px]">
                    <input type="text" placeholder="請輸入驗證碼" name="verification_code"
                        class="px-5 py-3 w-full text-base font-light rounded-md border border-solid border-neutral-200 text-neutral-400" />

                    @if ($errors->has('verification_code'))
                        <p class="text-red-500">{{ $errors->first('verification_code') }}</p>
                    @endif
                </div>

                <div class="flex flex-col gap-2.5 w-full max-w-[320px]">
                    <!-- 驗證按鈕 (高度統一) -->
                    <button type="submit"
                        class="px-0 py-3 w-full text-base font-bold tracking-wide text-center text-white bg-gray-500 rounded-md cursor-pointer border-[none] hover:bg-gray-600 transition-colors">
                        驗證
                    </button>
                    
                    <!-- 返回上一步 (高度統一) -->
                    <a href="{{ route('myregister') }}"
                    class="px-0 py-3 w-full text-base font-bold tracking-wide text-center text-gray-500 rounded-md border border-gray-500 border-solid cursor-pointer hover:bg-gray-100 transition-colors">
                    返回上一步
                </a>
            </div>
        </form>
        
        <form method="POST" action="{{ route('resend-verification-code') }}">
            @csrf
            <button type="submit"
                class="block mt-2 text-sm font-medium hover:underline text-center text-gray-500">
                重新寄送驗證碼
            </button>
        </form>
        </section>
    </main>
</body>
