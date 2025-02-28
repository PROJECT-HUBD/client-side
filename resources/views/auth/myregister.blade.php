<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Page</title>
    <!-- Vite + Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-['Lexend']">
    <main
        class="flex overflow-hidden relative flex-col justify-center px-56 py-48 min-h-screen bg-cover bg-center  h-screen w-full  max-md:px-5 max-md:py-24 max-sm:px-5 max-sm:py-12 "
        style="background-image: url('{{ asset('images/bg.jpg') }}');">
        {{-- 遮罩 --}}
        <div class="object-cover absolute inset-0 size-full bg-gray-100 bg-opacity-50 bg-cover bg-center"></div>

{{-- 
     <section
                class="relative flex flex-col justify-center items-center bg-white border border-solid border-[#e4e4e4] 
                max-w-[992px] 
                md:w-[992px] md:h-[693px] 
                lg:w-[992px] lg:h-[693px] 
                max-md:w-[90vw] max-md:aspect-[992/693] 
                max-sm:w-[90vw] max-sm:aspect-[992/693]">
            
            <div
            class="flex flex-col items-center w-full max-w-[496px] scale-100 transition-transform 
                    md:scale-100 lg:scale-100 
                    max-md:scale-90 max-sm:scale-75">
    
            <!-- 標題和 LOGO -->
            <header class="flex gap-3.5 items-center text-2xl font-semibold text-gray-500">
                <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                    alt="Logo" class="object-contain h-[46px] rounded-[800px] w-[46px]" />
                <h1 class="text-2xl">Register</h1>
            </header>
    
            <!-- 表單區塊 -->
            <form class="flex flex-col mt-11 w-full max-w-[299px] max-md:mt-10">
                <input type="email" placeholder="請輸入電子信箱"
                    class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                    required />
    
                <div class="flex gap-3.5 items-center self-start mt-2 text-base tracking-wide leading-7 text-zinc-500">
                    <input type="checkbox" id="privacy-policy"
                        class="appearance-none flex shrink-0 self-stretch my-auto bg-white rounded-md border border-solid border-zinc-300 h-[25px] w-[25px] cursor-pointer"
                        required />
                    <label for="privacy-policy" class="self-stretch my-auto cursor-pointer">
                        我同意網站
                        <a class="underline" href="/">隱私權政策</a>
                    </label>
                </div>
            </form>
    
            <!-- 按鈕區塊 -->
            <div class="mt-11 w-full max-w-[299px]">
                <button type="submit"
                    class="p-2.5 mb-4 font-bold text-center text-white bg-gray-500 rounded-md w-full">
                    下一步
                </button>
    
                <button type="button"
                    class="p-2.5 font-bold text-center text-gray-500 rounded-md border border-solid border-[#626981] w-full">
                    返回登入
                </button>
            </div>
        </div>
    </section> --}}

    <section
    class="relative flex justify-center items-center bg-white border border-solid border-[#e4e4e4] 
                mx-auto 
                w-full max-w-[992px] 
                lg:w-[992px] lg:h-[693px] 
                md:w-[90vw] md:aspect-[992/693] 
                sm:w-[85vw] sm:aspect-[992/693] 
                transition-all duration-300 ease-in-out">
            
    <div
        class="flex flex-col items-center w-full max-w-[496px] scale-100 transition-transform 
                lg:scale-100 
                max-lg:scale-[.85] 
                max-md:scale-[.75] 
                max-sm:scale-[.65]">

        <!-- 標題和 LOGO -->
        <header class="flex gap-3.5 items-center text-2xl font-semibold text-gray-500">
            <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                alt="Logo" class="object-contain h-[46px] rounded-[800px] w-[46px]" />
            <h1 class="text-2xl">Register</h1>
        </header>

        <!-- 表單區塊 -->
        <form class="flex flex-col mt-11 w-full max-w-[299px] max-md:mt-10">
            <input type="email" placeholder="請輸入電子信箱"
                class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                required />

            <div class="flex gap-3.5 items-center self-start mt-2 text-base tracking-wide leading-7 text-zinc-500">
                <input type="checkbox" id="privacy-policy"
                    class="appearance-none flex shrink-0 self-stretch my-auto bg-white rounded-md border border-solid border-zinc-300 h-[25px] w-[25px] cursor-pointer"
                    required />
                <label for="privacy-policy" class="self-stretch my-auto cursor-pointer">
                    我同意網站
                    <a class="underline" href="/">隱私權政策</a>
                </label>
            </div>
        </form>

        <!-- 按鈕區塊 -->
        <div class="mt-11 w-full max-w-[299px]">
            <button type="submit"
                class="p-2.5 mb-4 font-bold text-center text-white bg-gray-500 rounded-md w-full">
                下一步
            </button>

            <button type="button"
                class="p-2.5 font-bold text-center text-gray-500 rounded-md border border-solid border-[#626981] w-full">
                返回登入
            </button>
        </div>
    </div>
</section>
    
    </main>
</body>
