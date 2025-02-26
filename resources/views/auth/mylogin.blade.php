{{-- <x-guest-layout>
   
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
 
</x-guest-layout> --}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;600&family=Montserrat:wght@400;700&display=swap" />
    <!-- Vite + Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-['Lexend']">
    <main
        class="flex overflow-hidden relative flex-col justify-center items-center px-56 py-48 min-h-screen text-sm font-light bg-[url('{{ asset('images/bg.jpg') }}')] bg-cover bg-center  h-screen w-full  max-md:px-5 max-md:py-24 max-sm:px-5 max-sm:py-12">
       
        <div class="object-cover absolute inset-0 size-full bg-gray-100 bg-opacity-70 bg-cover bg-center"></div>

        <section class="flex relative w-full  border border-solid border-[#e4e4e4] max-w-[992px] max-md:flex-col max-md:max-w-[496px]">
            <div class="object-cover w-[496px] max-md:w-full max-md:h-[300px] bg-[url('{{ asset('images/bg.jpg') }}')] bg-cover w-full"></div>

            <div class="flex flex-col items-start px-24 pt-16 pb-32 bg-white w-[496px] max-md:px-5 max-md:py-10 max-md:w-full max-sm:px-4 max-sm:py-8">
                <header class="flex gap-3.5 items-center text-2xl font-semibold text-gray-500">
                    <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                        alt="Logo" class="object-contain h-[46px] rounded-[800px] w-[46px]" />
                    <h1 class="text-2xl">Login</h1>
                </header>



                <form method="POST" action="{{ route('login') }}" class="flex relative flex-col gap-6 mt-11 w-full max-w-[299px]">
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
