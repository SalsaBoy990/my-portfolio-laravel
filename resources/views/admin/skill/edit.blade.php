<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Edit skill') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                <h2 class="text-lg md:text-xl font-bold text-gray-900 px-6 mt-5 mb-5">
                    {{ $skill->title }}
                </h2>

                <form action="{{ route('skill.update', $skill->id)}}" method="POST"
                    enctype="application/x-www-form-urlencoded" accept-charset="UTF-8"
                    autocomplete="off" class="px-6 w-full relative">
                    @method("PUT")
                    @csrf

                    <x-jet-validation-errors class="mb-4" />

                    <div class="mb-5">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title"
                            class="block mt-1 bg-gray-50 w-full {{ $errors->has('title') ? ' border-rose-400' : '' }}"
                            type="text" name="title" :value="old('title') ?? $skill->title"
                            autofocus />
                        <x-jet-input-error for="title" class="mt-2" />
                    </div>
                    <div class="mb-5">
                        <x-jet-label for="language" value="{{ __('Language:') }}" />
                        <select
                            class="form-select appearance-none block w-full px-3 py-1.5
                            text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300 rounded transition ease-in-out m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="{{ __(" Select language") }}" name="language" id="language">
                            <option>{{ __("Select the language") }}</option>
                            @foreach ($available_locales as $key => $value)

                            @if ($value === 'hu')
                            <option {{ $value===$skill->language ? "selected" : "" }} value="{{
                                $value }}">{{ __("Hungarian") }}</option>
                            @else
                            <option {{ $value===$skill->language ? "selected" : "" }} value="{{
                                $value }}">{{ __("English") }}</option>
                            @endif
                            @endforeach
                        </select>
                        <x-jet-input-error for="language" class="mt-2" />
                    </div>
                    <div class="mb-5">
                        <x-jet-label for="bg_color" value="{{ __('Background color:') }}" />

                        <div class="flex flex-row gap-x-2 items-center"
                            x-data="{ selectedColor: '' }">
                            <select
                                class="form-select appearance-none block w-full px-3 py-1.5
                                text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                border border-solid border-gray-300 rounded transition ease-in-out m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label="{{ __(" Select the background color") }}"
                                name="bg_color" id="bg_color">

                                @foreach ($colors as $color)
                                <option {{ $color==$skill->bg_color ? "selected" : "" }} value="{{
                                    $color }}">{{ $color }}</option>
                                @endforeach

                            </select>
                            <div class="w-6 h-6 rounded-full {{ $skill->bg_color }}"
                                :class="selectedColor"></div>

                        </div>
                        <x-jet-input-error for="bg_color" class="mt-2" />
                    </div>


                    <div class="mb-5">
                        <x-jet-label for="content" value="{{ __('Content:') }}" />
                        <textarea name="content" rows="5" id="skill-content-editor"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('content') ?? $skill->content }}</textarea>
                        <x-jet-input-error for="content" class="mt-2" />
                    </div>
                    <div>
                        <x-jet-button type="submit" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                        rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                        active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                        disabled:opacity-25 transition">{{ __("Update skill") }}
                        </x-jet-button>

                        <a href="{{ route('skill.index')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                           rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                           active:bg-gray-700 active:text-gray-50 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                           disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>