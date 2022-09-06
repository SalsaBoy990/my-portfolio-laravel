<header class="header flex items-center justify-center relative">

    <div class="brand absolute top-7 left-8 flex flex-row gap-2 items-center z-10">
        <x-landing.logo></x-landing.logo>
        <span class="text-base sm:text-xl font-bold text-white tracking-wide font-exo">
            {{ $fullName }}</span>
    </div>

    <div class="absolute top-6 right-6 z-50">
        @include('partials/language_switcher')
    </div>

    <div
        class="top-action-buttons flex flex-row absolute top-14 right-2 sm:right-6 z-50 justify-end">
        <ul class="action-buttons z-40 text-right">
            <li class="mb-2">
                <a href="{{ asset($cv) }}" download
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-main-400 hover:bg-main-600 focus:ring-4 focus:ring-main-400 font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <x-icon.download></x-icon.download>
                    {{ __("Download CV") }}
                </a>
            </li>
            <li class="pt-0">
                <a href="mailto:{{ $emailAddress }}"
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-violet-red hover:bg-darkpurple focus:ring-4 focus:ring-violet-red font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <x-icon.contact></x-icon.contact>
                    <span>{{ __("Contact Me") }}</span>
                </a>

            </li>
        </ul>
    </div>


    <div class="hero-text text-left self-center justify-self-center z-10 px-6 sm:px-5 md:px-0">
        <h1
            class="text-3xl mb-2 sm:mb-0 mobile:text-3xl sm:text-4xl md:text-56px text-white font-serif leading-tight">
            {{ __($title) }}
        </h1>
        <p class="text-lg mobile:text-xl md:text-2xl text-white80pc font-medium">
            {{ __($subtitle) }}
        </p>

        <div
            class="my-4 text-sm inline-flex items-center py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-semibold bg-gray-200 text-red-800 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
            <span class="inline-block ml-1">{{ __("Still under development!")}}</span>
        </div>


        <div class="action-bottons-laptop-below mt-6">
            <nav>
                <a href="{{ asset($cv) }}" download
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-main-400 hover:bg-main-600 focus:ring-4 focus:ring-main-400 font-medium rounded-md text-sm px-5 py-2.5 mr-3 mb-3 focus:outline-none">
                    <x-icon.download></x-icon.download>
                    {{ __("Download CV") }}
                </a>
                <a href="mailto:{{ $emailAddress }}"
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-violet-red hover:bg-darkpurple focus:ring-4 focus:ring-violet-red font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <x-icon.download></x-icon.download>
                    <span>{{ __("Contact Me") }}</span>
                </a>
            </nav>
        </div>
    </div>

    <div class="header-image flex justify-center absolute top-4 bottom-0 h-full w-full z-0">
        <img src="{{ asset('storage/images/header.jpg') }}" class="object-cover"
            alt="darkblue illustration background">
    </div>


</header>