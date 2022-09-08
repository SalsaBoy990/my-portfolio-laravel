<div class="flex justify-center">
    <div>
        <div class="dropdown relative" x-data="{flagDropdownOpen: false}">

            <button class="
          dropdown-toggle active:shadow-lg active:text-white
          transition duration-150 ease-in-out flex items-center whitespace-nowrap
        " type="button" aria-expanded="false" @click="flagDropdownOpen = ! flagDropdownOpen">
                <span class="border-2 border-gray-500 box-border">
                    <img class="h-4"
                        src="{{ asset('storage/images/flags/' . $current_locale . '-flag.jpg' ) }}"
                        alt="flag">
                </span>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down"
                    class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                    </path>
                </svg>
            </button>

            <ul x-show="flagDropdownOpen" class="dropdown-menu min-w-max absolute bg-white text-base z-50 
          list-none text-left rounded-lg shadow-lg m-0 mt-2 bg-clip-padding border-none"
                @click.outside="flagDropdownOpen = false" aria-labelledby="dropdownMenuButton1">

                @foreach ($available_locales as $locale_name => $available_locale)
                @if ($available_locale !== $current_locale)

                <li>
                    <a class="block box-border border-2 border-gray-500" title="{{ $locale_name }}"
                        href="{{ route('lang.index', $available_locale) }}">
                        <img class="h-4"
                            src="{{ asset('storage/images/flags/' . $available_locale . '-flag.jpg' ) }}"
                            alt="{{ $locale_name }}">
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>