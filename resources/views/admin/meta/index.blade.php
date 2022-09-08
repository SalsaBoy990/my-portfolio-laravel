<x-admin-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Site Settings') }}
        </h1>
    </x-slot>

    <div class="pt-8 pb-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 mb-12">

                <table class="min-w-full">
                    <thead class="border-b">
                        <tr>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('') }}
                            </th>
                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Title') }}
                            </th>

                            <th scope="col"
                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                {{ __('Actions') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metum as $meta)
                        <tr class="border-b">
                            <td class="py-4 px-2">
                                <img class="h-4"
                                    src="{{ asset('storage/images/flags/' . $meta->language . '-flag.jpg' ) }}"
                                    alt="{{ $meta->language }}">
                            </td>
                            <td class="py-4 px-2">
                                <a href="{{ route('meta.edit', $meta->id)}}">
                                    <h3 class="text-lg font-bold">{{ $meta->title }}</h3>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('meta.edit', $meta->id)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                                    rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-70
                                    active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300
                                    disabled:opacity-25 transition">
                                    <x-icon.edit></x-icon.edit>
                                    <span class="ml-2">{{ __('Edit') }}</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>