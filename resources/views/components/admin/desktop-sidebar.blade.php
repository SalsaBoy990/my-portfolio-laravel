<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200 flex justify-start items-center"
            href="{{ route('dashboard') }}">
            <svg class="w-5 h-auto mr-2" viewBox="0 0 31 57" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M30.3669 24.3717C30.5949 24.7097 30.5949 25.1522 30.3669 25.4902L18.0082 43.8105C17.4565 44.6284 16.1792 44.2378 16.1792 43.2513L16.1792 6.61065C16.1792 5.62406 17.4565 5.23352 18.0082 6.05141L30.3669 24.3717Z"
                    fill="#3E50B4" />
                <path
                    d="M0.377257 32.0509C0.149267 31.713 0.149267 31.2704 0.377258 30.9325L12.7359 12.6122C13.2877 11.7943 14.5649 12.1848 14.5649 13.1714L14.5649 49.812C14.5649 50.7986 13.2877 51.1891 12.7359 50.3712L0.377257 32.0509Z"
                    fill="#CA4164" />
            </svg>
            Admin
        </a>
        <ul class="mt-6">
            <li
                class="relative px-6 py-3 {{ request()->routeIs('dashboard') ? 'bg-blue-50' : '' }}">
                <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('dashboard') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                    href="{{ route('dashboard') }}">
                    <x-icon.home></x-icon.home>
                    <span class="ml-4">{{ __('Dashboard') }}</span>
                </a>
            </li>
        </ul>
        <ul>
            <li
                class="relative px-6 py-3 {{ request()->routeIs('meta.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('meta.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('meta.index')}}">
                    <x-icon.cog></x-icon.cog>
                    <span class="ml-4">{{ __("Site settings") }}</span>
                </a>
            </li>

            <li
                class="relative px-6 py-3 {{ request()->routeIs('skill.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('skill.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('skill.index')}}">
                    <x-icon.briefcase></x-icon.briefcase>
                    <span class="ml-4">{{ __("Skills") }}</span>
                </a>
            </li>

            <li
                class="relative px-6 py-3 {{ request()->routeIs('project.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('project.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('project.index')}}">
                    <x-icon.services></x-icon.services>
                    <span class="ml-4">{{ __("Projects") }}</span>
                </a>
            </li>


            @if (auth()->user()->role === 'admin')
            <li
                class="relative px-6 py-3 {{ request()->routeIs('user.index') ? 'bg-blue-50' : '' }}">
                <a class="inline-flex items-center w-full text-sm {{ request()->routeIs('user.index') ? 'font-bold text-gray-800' : 'font-semibold' }} transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    href="{{ route('user.index')}}">
                    <x-icon.users></x-icon.users>
                    <span class="ml-4">{{ __("Users") }}</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</aside>