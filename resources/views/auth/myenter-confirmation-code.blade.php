<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enter Confirmation Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex justify-center items-center min-h-screen bg-gray-50">
    <main
      class="flex flex-col justify-center self-stretch px-80 py-32 text-sm leading-loose bg-white border border-solid border-[#E4E4E4] max-w-[992px] max-md:px-5 max-md:py-24"
    >
      <header
        class="flex gap-3.5 items-center w-full text-2xl font-semibold leading-9 text-gray-500"
      >
        <img
          src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/159e9f4ecf610330c5c778310757bf2a24227f9b658abbd411d0cc73d44f8cfa?placeholderIfAbsent=true"
          alt="Logo"
          class="object-contain shrink-0 self-stretch my-auto aspect-square rounded-[800px] w-[46px]"
        />
        <h1 class="my-auto w-[228px]">Enter Confirmation Code</h1>
      </header>

      <section
        class="overflow-hidden mt-28 w-full font-light whitespace-nowrap text-neutral-400 max-md:mt-10"
      >
        <input
          type="text"
          placeholder="請輸入驗證碼"
          class="overflow-hidden px-5 py-3 w-full rounded-md border border-solid border-[#E4E4E4] max-md:px-5"
        />
      </section>

      <section
        class="mt-28 w-full font-bold tracking-wide text-center whitespace-nowrap max-md:mt-10"
      >
        <button
          type="button"
          class="overflow-hidden px-16 py-2.5 w-full text-white bg-gray-500 rounded-md max-md:px-5"
        >
          重設密碼
        </button>
        <button
          type="button"
          class="overflow-hidden px-5 py-2.5 mt-4 w-full text-gray-500 rounded-md border border-solid border-[#626981]"
        >
          返回登入
        </button>
      </section>
    </main>
  </body>
</html>
