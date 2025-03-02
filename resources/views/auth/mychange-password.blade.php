<!doctype html>
<html lang="zh">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <main
      class="flex flex-col justify-center self-stretch px-80 py-36 text-sm bg-white border border-solid border-[#E4E4E4] max-w-[992px] max-md:px-5 max-md:py-24"
    >
      <header
        class="flex gap-3.5 items-center self-start text-2xl font-semibold text-gray-500"
      >
        <img
          src="https://cdn.builder.io/api/v1/image/assets/fff8f95ab9b14906ad7fee76d4c8586f/1267da5cf837b5e91979dfe723ae0379802d4c17a522389df443b9998a55efde?placeholderIfAbsent=true"
          alt="Logo"
          class="object-contain shrink-0 self-stretch my-auto aspect-square rounded-[800px] w-[46px]"
        />
        <h1 class="self-stretch my-auto">Change Password</h1>
      </header>

      <form
        class="flex flex-col justify-center mt-20 w-full font-light leading-loose whitespace-nowrap text-neutral-400 max-md:mt-10"
      >
        <div class="overflow-hidden w-full">
          <label for="new-password" class="sr-only">New Password</label>
          <input
            type="password"
            id="new-password"
            placeholder="請輸入新密碼"
            class="overflow-hidden px-5 py-3 w-full rounded-md border border-solid border-[#E4E4E4] max-md:px-5"
          />
        </div>

        <div class="overflow-hidden mt-5 w-full">
          <label for="confirm-password" class="sr-only"
            >Confirm New Password</label
          >
          <input
            type="password"
            id="confirm-password"
            placeholder="請再一次輸入新密碼"
            class="overflow-hidden px-5 py-3 w-full rounded-md border border-solid border-[#E4E4E4] max-md:px-5"
          />
        </div>
      </form>

      <section
        class="mt-20 w-full font-bold tracking-wide leading-loose text-center whitespace-nowrap max-md:mt-10"
      >
        <button
          type="submit"
          class="overflow-hidden px-16 py-2.5 w-full text-white bg-gray-500 rounded-md max-md:px-5"
        >
          確認
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
