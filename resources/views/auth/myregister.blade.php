{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;600&family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-['Lexend']">
    <main
      class="flex overflow-hidden relative flex-col justify-center items-center p-0 min-h-screen bg-white"
    >
      <img
        src="https://placehold.co/1440x1080/f5f5f5/f5f5f5"
        alt=""
        class="object-cover absolute inset-0 opacity-10 size-full"
      />

      <section
        class="flex relative flex-col justify-center items-center p-16 w-full bg-white border border-solid border-[#e4e4e4] max-w-[992px] max-md:p-10 max-md:max-w-screen-md max-sm:p-5 max-sm:max-w-full"
      >
        <header
          class="flex gap-3.5 items-center mb-24 text-2xl font-semibold text-gray-500 max-md:mb-16 max-sm:mb-10 max-sm:text-xl"
        >
          <img
            src="https://placehold.co/46x46/626981/626981"
            alt=""
            class="object-contain aspect-square rounded-[800px] w-[46px] max-sm:w-9"
          />
          <h1>Register</h1>
        </header>

        <form class="flex flex-col w-full max-w-[299px] max-sm:w-full">
          <input
            type="email"
            placeholder="請輸入電子信箱"
            class="px-5 py-3 w-full text-sm rounded-md border border-solid border-[#e4e4e4] text-neutral-400 max-sm:w-full"
            aria-label="Email address"
          />

          <div
            class="flex gap-3.5 items-center mt-2 text-base tracking-wide leading-7 text-zinc-500"
          >
            <label class="flex gap-3.5 items-center cursor-pointer">
              <input type="checkbox" class="sr-only peer" />
              <span
                class="bg-white rounded-md border border-solid border-zinc-300 h-[25px] w-[25px] inline-block peer-checked:bg-gray-500 peer-checked:border-gray-500 relative"
              >
                <span
                  class="absolute inset-0 flex items-center justify-center opacity-0 peer-checked:opacity-100 text-white"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </span>
              </span>
              <span class="text-zinc-500">
                我同意網站
                <a href="#" class="text-gray-500 cursor-pointer">隱私權政策</a>
              </span>
            </label>
          </div>
        </form>

        <div
          class="flex flex-col mt-24 text-sm font-bold tracking-wide leading-loose text-center w-[299px] max-sm:w-full"
        >
          <button
            type="button"
            class="p-2.5 w-full text-white bg-gray-500 rounded-md cursor-pointer max-sm:w-full"
          >
            下一步
          </button>
          <button
            type="button"
            class="p-2.5 mt-4 w-full text-gray-500 rounded-md border border-solid cursor-pointer border-[#626981] max-sm:w-full"
          >
            返回登入
          </button>
        </div>
      </section>
    </main>
  </body> --}}


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

{{-- 
        <section
                class="flex relative flex-col justify-center px-80 py-36 w-full bg-white border border-solid border-[#E4E4E4] min-h-[693px] max-md:px-5 max-md:py-24 max-md:max-w-full">
          
                <header class="flex gap-3.5 items-center self-start text-2xl font-semibold text-gray-500 whitespace-nowrap">
                <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                    alt="Logo"
                    class="object-contain shrink-0 self-stretch my-auto aspect-square rounded-[800px] w-[46px]" />
                <h1 class="self-stretch my-auto">Register</h1>
                </header>

                <form class="flex flex-col mt-24 w-full max-w-[299px] max-md:mt-10">
                <div class="overflow-hidden w-full text-sm font-light leading-loose text-neutral-400">
                    <input type="email" placeholder="請輸入電子信箱"
                        class="overflow-hidden w-full px-5 py-3 rounded-md border border-solid border-[#E4E4E4] max-md:px-5 font-['Montserrat',_-apple-system,_Roboto,_Helvetica,_sans-serif] font-normal"
                        required />
                </div>

                <div class="flex gap-3.5 items-center self-start mt-2 text-base tracking-wide leading-7 text-zinc-500">
                    <input type="checkbox" id="privacy-policy"
                        class="appearance-none flex shrink-0 self-stretch my-auto bg-white rounded-md border border-solid border-zinc-300 h-[25px] w-[25px] cursor-pointer"
                        required />
                    <label for="privacy-policy" class="self-stretch my-auto cursor-pointer">
                        我同意網站
                        <span class="underline">隱私權政策</span>
                    </label>
                </div>
                </form>

             <div class="mt-24 max-w-full w-[299px] max-md:mt-10">
                <button type="submit"
                    class="overflow-hidden px-16 py-2.5 w-full text-sm font-bold tracking-wide leading-loose text-center text-white bg-gray-500 rounded-md max-md:px-5">
                    下一步
                </button>

                <button type="button"
                    class="overflow-hidden px-5 py-2.5 mt-4 w-full text-sm font-bold tracking-wide leading-loose text-center text-gray-500 rounded-md border border-solid border-[#626981]">
                    返回登入
                </button>
                </div>
        </section> --}}

        <section
            class="relative flex flex-col justify-center items-center bg-white border border-solid border-[#E4E4E4] 
             w-full max-w-[992px] aspect-[992/693] 
            lg:max-w-[calc(100vh*1.432)] lg:max-h-[calc(100vw*0.698)] lg:w-[992px] lg:h-[693px]">

            <header class="flex gap-3.5 items-center -ml-32 text-2xl font-semibold text-gray-500 whitespace-nowrap">
                <img src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
                    alt="Logo"
                    class="object-contain shrink-0 self-stretch my-auto aspect-square rounded-[800px] w-[46px]" />
                <h1 class="self-stretch my-auto">Register</h1>
            </header>

            <form class="flex flex-col mt-24 w-full max-w-[299px] max-md:mt-10">
                <div class="overflow-hidden w-full text-sm font-light leading-loose text-neutral-400">
                    <input type="email" placeholder="請輸入電子信箱"
                        class="overflow-hidden w-full px-5 py-3 rounded-md border border-solid border-[#E4E4E4] max-md:px-5 font-['Montserrat',_-apple-system,_Roboto,_Helvetica,_sans-serif] font-normal"
                        required />
                </div>

                <div class="flex gap-3.5 items-center self-start mt-2 text-base tracking-wide leading-7 text-zinc-500">
                    <input type="checkbox" id="privacy-policy"
                        class="appearance-none flex shrink-0 self-stretch my-auto bg-white rounded-md border border-solid border-zinc-300 h-[25px] w-[25px] cursor-pointer"
                        required />
                    <label for="privacy-policy" class="self-stretch my-auto cursor-pointer">
                        我同意網站
                        <span class="underline">隱私權政策</span>
                    </label>
                </div>
            </form>

            <div class="mt-24 max-w-full w-[299px] max-md:mt-10">
                <button type="submit"
                    class="overflow-hidden px-16 py-2.5 w-full text-sm font-bold tracking-wide leading-loose text-center text-white bg-gray-500 rounded-md max-md:px-5">
                    下一步
                </button>

                <button type="button"
                    class="overflow-hidden px-5 py-2.5 mt-4 w-full text-sm font-bold tracking-wide leading-loose text-center text-gray-500 rounded-md border border-solid border-[#626981]">
                    返回登入
                </button>
            </div>
        </section>

    </main>
</body>
