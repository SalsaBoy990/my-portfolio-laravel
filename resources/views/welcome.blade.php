<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>András Gulácsi</title>

    <!-- Metas for social media-->
    <meta name="description" content="András Gulácsi's web developer portfolio website" />
    <meta property="og:title" content="András Gulácsi's Portfolio" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="András Gulácsi" />
    <meta property="og:description" content="András Gulácsi's web developer portfolio website" />
    <meta property="og:image" content="" />
    <meta property="og:type" content="website" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="András Gulácsi's Portfolio" />
    <meta name="twitter:creator" content="András Gulácsi" />
    <meta name="twitter:title" content="András Gulácsi's Portfolio" />
    <meta name="twitter:description" content="András Gulácsi's web developer portfolio website" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:image" content="" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5b71d5">
    <meta name="apple-mobile-web-app-title" content="Andr&aacute;s Gul&aacute;csi's Portfolio">
    <meta name="application-name" content="Andr&aacute;s Gul&aacute;csi's Portfolio">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-serif-text:400|exo:700,800|exo-2:400,500"
        rel="stylesheet" />

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])

</head>

<body class="antialiased dark-body">
    <div id="top"></div>
    <div class="h-10 hidden">
        @if (Route::has('login'))
        <div class="text-center leading-8">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="text-sm text-gray-100 dark:text-gray-500 underline">{{ __("Dashboard") }}</a>
            @else
            <a href="{{ route('login') }}"
                class="text-sm text-gray-100 dark:text-gray-500 underline">{{ __("Log in") }}</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-100 dark:text-gray-500 underline">{{ __("Register") }}</a>
            @endif
            @endauth
        </div>
        @endif

    </div>

    <div class="content">
        <x-header></x-header>
        <x-introduction></x-introduction>
        <x-skills></x-skills>
        <x-projects></x-projects>

        <div class="action-bottons-above-footer mb-6 flex flex-row justify-center">
            <nav>
                <a href="{{ asset('storage/pdf/andras.gulacsi.hungary.cv.2022.pdf') }}" download
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-main-400 hover:bg-main-600 focus:ring-4 focus:ring-main-400 font-medium rounded-md text-sm px-5 py-2.5 mr-3 mb-3 focus:outline-none">
                    <x-icon.download></x-icon.download>
                    {{ __("Download CV") }}
                </a>
                <a href="mailto:guland@protonmail.com"
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-violet-red hover:bg-darkpurple focus:ring-4 focus:ring-violet-red font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <x-icon.contact></x-icon.contact>
                    <span>{{ __("Contact Me") }}</span>
                </a>
            </nav>
        </div>

        <x-footer></x-footer>
    </div>
</body>

</html>