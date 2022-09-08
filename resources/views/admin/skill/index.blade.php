<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Manage Skills') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg pb-12">

                <div class="mt-6 ml-6">

                    <a href="{{ route('skill.create') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                             active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                            disabled:opacity-25 transition">
                        <x-icon.add></x-icon.add>
                        <span class="ml-1">
                            {{ __('Add new') }}
                        </span>

                    </a>
                </div>

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <ol class="bg-white rounded-lg border border-gray-200 text-gray-900 mx-6 mt-3">

                    @foreach ($skills as $skill)

                    @if ($loop->first)
                    <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">
                        @elseif ($loop->last)
                    <li class="px-6 py-2 w-full rounded-b-lg">
                        @else
                    <li class="px-6 py-2 border-b border-gray-200 w-full">
                        @endif
                        <div
                            class="flex flex-col lg:flex-row justify-between items-start lg:items-center">

                            <div class="w-80 flex items-center">
                                <div>
                                    <img class="h-3"
                                        src="{{ asset('storage/images/flags/' . $skill->language . '-flag.jpg' ) }}"
                                        alt="{{ $skill->language }}">
                                </div>
                                <a href="{{ route('skill.edit', $skill->id)}}">
                                    <h2 class="text-lg font-semibold mx-2">{{ $skill->title }}</h2>
                                </a>
                                <div class="w-4 h-4 rounded-full {{ $skill->bg_color }}"></div>
                            </div>

                            <div>

                            </div>

                            <div class="action-buttons mt-5 lg:mt-0">
                                <a href="{{ route('skill.edit', $skill->id)}}" class="inline-flex items-center px-4 py-2 mb-4 lg:mb-0 bg-gray-800 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                    disabled:opacity-25 transition">
                                    <x-icon.edit></x-icon.edit>
                                    <span class="ml-2">{{ __('Edit') }}</span>
                                </a>
                                <form action="{{ route('skill.destroy', $skill->id)}}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <x-jet-danger-button type="submit" class="text-xs"
                                        @click="return confirm('Are you sure you want to delete it?')">
                                        <x-icon.trash></x-icon.trash>
                                        <span class="ml-2">{{ __('Delete') }}</span>
                                    </x-jet-danger-button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ol>

            </div>
        </div>
    </div>
</x-admin-layout>