<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>

    <!-- Vite + Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Lexend']">
    <main
        class="flex overflow-hidden relative flex-col justify-center items-center px-56 py-48 min-h-screen  bg-cover bg-center  h-screen w-full  max-md:px-5 max-md:py-24 max-sm:px-5 max-sm:py-12"
        style="background-image: url('{{ asset('images/bg.jpg') }}');">
        {{-- 遮罩 --}}
        <div class="object-cover absolute inset-0 size-full bg-gray-100 bg-opacity-50 bg-cover bg-center"></div>





        <section
            class="flex justify-center items-center relative border border-solid border-[#e4e4e4] 
        w-full max-w-[992px] 
        lg:w-[992px] lg:h-[693px] 
        md:w-[90vw] md:aspect-[992/693] 
        sm:w-[85vw] sm:aspect-[992/693] 
        transition-all duration-300 ease-in-out">

            <!-- 左側背景圖片區塊：在 <lg 隱藏 -->
            <div class="object-cover w-[496px] h-[693px] bg-cover bg-center 
        hidden lg:block"
                style="background-image: url('{{ asset('images/bg.jpg') }}');">
            </div>

            <!-- 右側表單內容區塊：等比縮小並居中對齊 -->
            <div
                class="flex flex-col items-center justify-center px-24 pt-16 pb-32 bg-white 
        w-[496px] h-full 
        mx-auto transition-transform 
        lg:scale-100 
        max-lg:scale-[.85] 
        max-md:scale-[.75] 
        max-sm:scale-[.65]">

                <header class="flex gap-3.5 items-center text-2xl font-semibold text-gray-500">
                    <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                        alt="Logo" class="object-contain h-[46px] rounded-[800px] w-[46px]" />
                    <h1 class="text-2xl">Login</h1>
                </header>

                <form method="POST" action="{{ route('login') }}"
                    class="flex relative flex-col gap-6 mt-11 w-full max-w-[299px]">
                    @csrf
                    <input type="text" placeholder="信箱" name="email"
                        class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                        aria-label="Email or phone number" />

                    <div class="relative">
                        <input type="password" placeholder="密碼" name="password"
                            class="px-5 py-2.5 w-full rounded-md border border-solid border-[#e4e4e4] text-neutral-400"
                            aria-label="Password" />
                        <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/da6d51fd298722d7d87f4c2d819667fe6bb826fc0609ee1eea9369ae1e77c8af?placeholderIfAbsent=true"
                            alt="Toggle password visibility"
                            class="absolute right-3 w-4 h-4 top-[10px] cursor-pointer" />
                    </div>

                    <div class="absolute right-0 text-xs opacity-50 bottom-[-18px] text-zinc-700">
                        <a href="#" class="underline">忘記密碼</a>
                    </div>
                </form>

                <div class="mt-11 w-full">
                    <button type="button"
                        class="p-2.5 mb-4 font-bold text-center text-white bg-gray-500 rounded-md w-full">
                        登入
                    </button>
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
