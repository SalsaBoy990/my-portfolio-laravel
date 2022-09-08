<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Manage projects') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 mb-12">

                <div class="my-6">

                    <a href="{{ route('project.create') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-blue-600 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-800
                                    active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300
                                    disabled:opacity-25 transition">
                        <x-icon.add></x-icon.add>
                        <span class="ml-1">
                            {{ __('Add new') }}
                        </span>

                    </a>
                </div>

                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('#') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Title + Image') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Client') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr class="border-b">
                            <td class="py-4 px-2">
                                <div>
                                    <img class="h-3"
                                        src="{{ asset('storage/images/flags/' . $project->language . '-flag.jpg' ) }}"
                                        alt="{{ $project->language }}">
                                </div>
                            </td>
                            <td class="py-4 px-2 w-80">
                                <a href="{{ route('project.edit', $project->id)}}">
                                    <h3 class="text-base font-semibold font-exo">{{ $project->title }}</h3>
                                    @if($project->cover_image_url)
                                    <img src="{{ $project->cover_image_url }}"
                                        class="p-1 bg-white border rounded w-20"
                                        alt="{{ $project->title }}" />
                                    @endif
                                </a>
                            </td>

                            <td class="py-4 px-2">
                                <div class="text-sm">{{ $project->client }}</div>
                            </td>
                            <td>
                                <div class="flex flex-row items-center gap-x-2">

                                    <a href="{{ route('project.edit', $project->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                        active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                        disabled:opacity-25 transition">
                                        <x-icon.edit></x-icon.edit>
                                        <span class="ml-2">{{ __('Edit') }}</span>
                                    </a>
                                    <form action="{{ route('project.destroy', $project->id)}}"
                                        method="POST" class="">
                                        @csrf
                                        @method('DELETE')

                                        <x-jet-danger-button type="submit" class="text-xs"
                                            @click="return confirm('Are you sure you want to delete it?')">
                                            <x-icon.trash></x-icon.trash>
                                            <span class="ml-2">{{ __('Delete') }}</span>
                                        </x-jet-danger-button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>