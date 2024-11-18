<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- tailwind script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/f494d78729.js" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased dark:bg-zinc-900 dark:text-white/50">
    <header class="lg:grid-cols-3 pt-5 pr-10">
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a
                href="{{ url('/dashboard') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium hover:text-blue-700 dark:hover:text-white ">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium hover:text-blue-700 dark:hover:text-white ">Log in <i class="fa-solid fa-caret-right text-sm" style="margin-left: 5px; "></i>
            </a>
            @if (Route::has('register'))
            <a
                type="button"
                href="{{ route('register') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-zinc-800  bg-white rounded-full  hover:bg-zinc-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-zinc-100 dark:focus:ring-zinc-700 dark:bg-zinc-800 dark:text-zinc-400  dark:hover:text-white dark:hover:bg-zinc-700">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <!-- footer -->
    @include('components.footer')
</body>

</html>