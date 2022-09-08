<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('New Project') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                <h2 class="text-lg md:text-xl font-bold text-gray-900 px-6 mt-5 mb-5">
                    {{ __("Add new project") }}
                </h2>

                <form action="{{ route('project.store')}}" method="POST"
                    enctype="multipart/form-data" accept-charset="UTF-8" autocomplete="off"
                    class="px-6 py-6 w-full relative">
                    @method("POST")
                    @csrf

                    <x-jet-validation-errors class="mb-4" />

                    <div class="mb-5">
                        <x-jet-label for="language" value="{{ __('Language:') }}" />
                        <select
                            class="form-select appearance-none block w-full px-3 py-1.5
                            text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300 rounded transition ease-in-out m-0
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="{{ __(" Select language") }}" name="language" id="language">

                            <option selected>{{ __("Select the language") }}</option>

                            @foreach ($available_locales as $key => $value)
                            @if ($value === 'hu')
                            <option value="{{ $value }}">{{ __("Hungarian") }}</option>
                            @else
                            <option value="{{ $value }}">{{ __("English") }}</option>
                            @endif
                            @endforeach

                        </select>

                        <x-jet-input-error for="language" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title"
                            class="block mt-1 bg-gray-50 w-full {{ $errors->has('title') ? ' border-rose-400' : '' }}"
                            type="text" name="title" :value="old('title')" autofocus />
                        <x-jet-input-error for="title" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="client" value="{{ __('Client') }}" />
                        <x-jet-input id="client"
                            class="block mt-1 bg-gray-50 w-full {{ $errors->has('client') ? ' border-rose-400' : '' }}"
                            type="text" name="client" :value="old('client')" autofocus />
                        <x-jet-input-error for="client" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="content" value="{{ __('Content:') }}" />
                        <textarea name="content" rows="5" id="project-content-editor"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('content') }}</textarea>
                        <x-jet-input-error for="content" class="mt-2" />
                    </div>

                    <div class="mb-5">
                        <x-jet-label for="links" value="{{ __('Links:') }}" />
                        <textarea name="links" rows="5" id="project-links-editor"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('links') }}</textarea>
                        <x-jet-input-error for="links" class="mt-2" />
                    </div>

                    <div class="flex flex-col md:flex-row">
                        <div class="mb-5">

                            <x-jet-label for="cover_image" value="{{ __('Cover image') }}" />

                            <div class="mb-3 mt-1 w-96">
                                <input
                                    class="form-control block w-full px-3 py-1.5
                                    text-sm font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding border border-solid 
                                    {{ $errors->has('cover_image') ? ' border-rose-400' : 'border-gray-300' }} 
                                    rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    type="file" id="cover_image" name="cover_image" autofocus>
                            </div>
                            <x-jet-input-error for="cover_image" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-jet-button type="submit" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                                active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                                disabled:opacity-25 transition">{{ __("Add project") }}
                        </x-jet-button>

                        <a href="{{ route('project.index')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                                rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                                active:bg-gray-700 active:text-gray-50 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>