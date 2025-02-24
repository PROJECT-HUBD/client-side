<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 設定動態 SEO 標題與描述 -->
    <title>@yield('title', '預設網站標題')</title>
    <meta name="description" content="@yield('meta_description', '這是預設網站描述')">
    <meta name="keywords" content="@yield('meta_keywords', '預設關鍵字1, 預設關鍵字2')">

    <!-- 設定 favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Vite + Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-brandGray-light">

    <!-- nav -->
    @include('layouts.navigation')

    <!-- main -->
    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>

    <!-- footer -->
    @include('layouts.footer')
    
    @stack('scripts')
</body>

</html>