<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Edit settings') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('meta.update', $meta->id)}}" method="POST"
                    enctype="multipart/form-data" accept-charset="UTF-8" autocomplete="off"
                    class="px-8 py-6 max-w-3xl relative">
                    @method("PUT")
                    @csrf

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <x-jet-validation-errors class="mb-4" />

                    <div class="absolute top-5 right-5">
                        <a href="{{ route('meta.index')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                            rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                            active:bg-gray-700 active:text-gray-50 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                            disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                        <x-jet-button type="submit">{{ __("Save") }}</x-jet-button>
                    </div>

                    <!-- General settings -->
                    <div class="md:col-span-1 flex flex-col justify-between">
                        <div class="px-4 sm:px-0 mb-5">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ __("General settings") }}
                            </h3>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Setup your portfolio website details here") }}
                            </p>
                        </div>

                        <div class="mb-5">
                            <span class="text-sm text-gray-500">{{ __("Language:") }}</span>
                            <img class="h-3"
                                src="{{ asset('storage/images/flags/' . $meta->language . '-flag.jpg' ) }}"
                                alt="{{ $meta->language }}">
                        </div>

                        <fieldset>

                            <div class="mb-5">
                                <x-jet-label for="full_name" value="{{ __('Your name:') }}" />
                                <x-jet-input id="full_name"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('full_name') ? ' border-rose-400' : '' }}"
                                    type="text" name="full_name"
                                    :value="old('full_name') ?? $meta->full_name" autofocus />
                                <x-jet-input-error for="full_name" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="title" value="{{ __('Site title:') }}" />
                                <x-jet-input id="title"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('title') ? ' border-rose-400' : '' }}"
                                    type="text" name="title" :value="old('title') ?? $meta->title"
                                    autofocus />
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="subtitle" value="{{ __('Site subtitle:') }}" />
                                <x-jet-input id="subtitle"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('subtitle') ? ' border-rose-400' : '' }}"
                                    type="text" name="subtitle"
                                    :value="old('subtitle') ?? $meta->subtitle" autofocus />
                                <x-jet-input-error for="subtitle" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="greeting_headline"
                                    value="{{ __('Greeting headline:') }}" />
                                <x-jet-input id="greeting_headline"
                                    class="block mt-1 bg-gray-50 w-full {{ $errors->has('greeting_headline') ? ' border-rose-400' : '' }}"
                                    type="text" name="greeting_headline"
                                    :value="old('greeting_headline') ?? $meta->greeting_headline"
                                    autofocus />
                                <x-jet-input-error for="greeting_headline" class="mt-2" />
                            </div>

                            <div class="mb-5">
                                <x-jet-label for="greating_description"
                                    value="{{ __('Greating description:') }}" />
                                <textarea name="greating_description" id="text-editor-tiny-cme"
                                    rows="10"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $meta->greating_description }}</textarea>
                                <x-jet-input-error for="greating_description" class="mt-2" />
                            </div>

                            <div class="flex flex-col lg:flex-row gap-x-4 w-full mt-5">
                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="email_address"
                                        value="{{ __('E-mail address:') }}" />
                                    <x-jet-input id="email_address"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('email_address') ? ' border-rose-400' : '' }}"
                                        type="email" name="email_address"
                                        :value="old('email_address') ?? $meta->email_address"
                                        autofocus />
                                    <x-jet-input-error for="email_address" class="mt-2" />
                                </div>

                                <div class="mb-5 w-full lg:w-1/2">
                                    <x-jet-label for="github_link"
                                        value="{{ __('Your Github link:') }}" />
                                    <x-jet-input id="github_link"
                                        class="block mt-1 bg-gray-50 w-full {{ $errors->has('github_link') ? ' border-rose-400' : '' }}"
                                        type="url" name="github_link"
                                        :value="old('github_link') ?? $meta->github_link"
                                        autofocus />
                                    <x-jet-input-error for="github_link" class="mt-2" />
                                </div>
                            </div>

                            <div class="mb-5">

                                @if($meta->profile_photo)
                                <x-admin.image-preview :url="$meta->profile_photo_link"
                                    :alt="$meta->full_name"></x-admin.image-preview>
                                @endif
                                <x-jet-label for="profile_photo"
                                    value="{{ __('Your profile photo:') }}" />

                                <div class="mb-3 mt-1 w-96">
                                    <input
                                        class="form-control block w-full
                                        px-3
                                        py-1.5
                                        text-sm
                                        font-normal
                                      text-gray-700
                                       bg-white bg-clip-padding
                                        border border-solid 
                                        {{ $errors->has('profile_photo') ? ' border-rose-400' : 'border-gray-300' }} 
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="profile_photo" name="profile_photo"
                                        autofocus>
                                </div>
                                <x-jet-input-error for="profile_photo" class="mt-2" />
                            </div>


                            <div class="mb-5">

                                @if($meta->cv)
                                <span
                                    class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 font-semibold text-xs flex align-center w-max transition duration-300 ease">
                                    {{ $meta->cv_link }}
                                </span>

                                @endif
                                <x-jet-label for="cv" value="{{ __('Upload your CV in pdf:') }}" />

                                <div class="mb-3 mt-1 w-96">
                                    <input
                                        class="form-control block w-full
                                        px-3
                                        py-1.5
                                        text-sm
                                        font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding
                                        border border-solid 
                                        {{ $errors->has('cv') ? ' border-rose-400' : 'border-gray-300' }} 
                                        rounded
                                        transition
                                        ease-in-out
                                        m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="cv" name="cv" autofocus>
                                </div>
                                <x-jet-input-error for="cv" class="mt-2" />
                            </div>


                        </fieldset>
                    </div>

                    <div>
                        <x-jet-button type="submit">{{ __("Save changes") }}</x-jet-button>

                        <a href="{{ route('meta.index')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-transparent border border-gray-800
                            rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-70
                          active:bg-gray-700 active:text-gray-50 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                            disabled:opacity-25 transition">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>