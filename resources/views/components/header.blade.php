<header class="header flex items-center justify-center relative">

    <div class="brand absolute top-7 left-8 flex flex-row gap-2 items-center z-10">
        <svg width="31" height="57" viewBox="0 0 31 57" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M30.3669 24.3717C30.5949 24.7097 30.5949 25.1522 30.3669 25.4902L18.0082 43.8105C17.4565 44.6284 16.1792 44.2378 16.1792 43.2513L16.1792 6.61065C16.1792 5.62406 17.4565 5.23352 18.0082 6.05141L30.3669 24.3717Z"
                fill="#3E50B4" />
            <path
                d="M0.377257 32.0509C0.149267 31.713 0.149267 31.2704 0.377258 30.9325L12.7359 12.6122C13.2877 11.7943 14.5649 12.1848 14.5649 13.1714L14.5649 49.812C14.5649 50.7986 13.2877 51.1891 12.7359 50.3712L0.377257 32.0509Z"
                fill="#CA4164" />
        </svg>
        <span class="text-base sm:text-xl font-bold text-white tracking-wide font-exo">
            {{ __("András Gulácsi") }}</span>
    </div>

    <div class="absolute top-6 right-6 z-50">
        @include('partials/language_switcher')
    </div>

    <div
        class="top-action-buttons flex flex-row absolute top-14 right-2 sm:right-6 z-50 justify-end">
        <ul class="action-buttons z-40 text-right">
            <li class="mb-2">
                <a href="{{ asset('storage/pdf/andras.gulacsi.hungary.cv.2022.pdf') }}" download
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-main-400 hover:bg-main-600 focus:ring-4 focus:ring-main-400 font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <svg class="mr-1 -ml-1 w-4 h-4" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_672_923)">
                            <path
                                d="M17.4163 8.25H13.7497V2.75H8.24967V8.25H4.58301L10.9997 14.6667L17.4163 8.25ZM4.58301 16.5V18.3333H17.4163V16.5H4.58301Z"
                                fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_672_923">
                                <rect width="22" height="22" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __("Download CV") }}</a>
            </li>
            <li class="pt-0">
                <a href="mailto:guland@protonmail.com"
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-violet-red hover:bg-darkpurple focus:ring-4 focus:ring-violet-red font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <svg class="mr-1 -ml-1 w-4 h-4" aria-hidden="true" focusable="false"
                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_672_926)">
                            <path
                                d="M18.333 3.66667H3.66634C2.65801 3.66667 1.84217 4.49167 1.84217 5.5L1.83301 16.5C1.83301 17.5083 2.65801 18.3333 3.66634 18.3333H18.333C19.3413 18.3333 20.1663 17.5083 20.1663 16.5V5.5C20.1663 4.49167 19.3413 3.66667 18.333 3.66667ZM18.333 7.33333L10.9997 11.9167L3.66634 7.33333V5.5L10.9997 10.0833L18.333 5.5V7.33333Z"
                                fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_672_926">
                                <rect width="22" height="22" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>{{ __("Contact Me") }}</span>
                </a>

            </li>
        </ul>
    </div>


    <div class="hero-text text-left self-center justify-self-center z-10 px-6 sm:px-5 md:px-0">
        <h1
            class="text-3xl mb-2 sm:mb-0 mobile:text-3xl sm:text-4xl md:text-56px text-white font-serif leading-tight">
            {{ __("A frontend & PHP Developer") }}
        </h1>
        <p class="text-lg mobile:text-xl md:text-2xl text-white80pc font-medium">
            {{ __("I create landing pages, websites, and e-commerce stores") }}
        </p>

        <div
            class="my-4 text-sm inline-flex items-center py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-semibold bg-gray-200 text-red-800 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
            <span
                class="inline-block ml-1">{{ __("Still under development!")}}</span>

        </div>


        <div class="action-bottons-laptop-below mt-6">
            <nav>
                <a href="{{ asset('storage/pdf/andras.gulacsi.hungary.cv.2022.pdf') }}" download
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-main-400 hover:bg-main-600 focus:ring-4 focus:ring-main-400 font-medium rounded-md text-sm px-5 py-2.5 mr-3 mb-3 focus:outline-none">
                    <svg class="mr-1 -ml-1 w-4 h-4" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_672_923)">
                            <path
                                d="M17.4163 8.25H13.7497V2.75H8.24967V8.25H4.58301L10.9997 14.6667L17.4163 8.25ZM4.58301 16.5V18.3333H17.4163V16.5H4.58301Z"
                                fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_672_923">
                                <rect width="22" height="22" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    {{ __("Download CV") }}</a>
                <a href="mailto:guland@protonmail.com"
                    class="text-white text-center inline-flex items-center tracking-wide uppercase bg-violet-red hover:bg-darkpurple focus:ring-4 focus:ring-violet-red font-medium rounded-md text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    <svg class="mr-1 -ml-1 w-4 h-4" aria-hidden="true" focusable="false"
                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_672_926)">
                            <path
                                d="M18.333 3.66667H3.66634C2.65801 3.66667 1.84217 4.49167 1.84217 5.5L1.83301 16.5C1.83301 17.5083 2.65801 18.3333 3.66634 18.3333H18.333C19.3413 18.3333 20.1663 17.5083 20.1663 16.5V5.5C20.1663 4.49167 19.3413 3.66667 18.333 3.66667ZM18.333 7.33333L10.9997 11.9167L3.66634 7.33333V5.5L10.9997 10.0833L18.333 5.5V7.33333Z"
                                fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_672_926">
                                <rect width="22" height="22" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span>{{ __("Contact Me") }}</span>
                </a>
            </nav>
        </div>
    </div>

    <div class="header-image flex justify-center absolute top-4 bottom-0 h-full w-full z-0"
        style="max-width: 1420px; left: 10px; right: 10px;">
        <img src="{{ asset('storage/images/header.jpg') }}" class="object-cover"
            alt="darkblue illustration background">
    </div>


</header>