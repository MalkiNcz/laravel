<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create new books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('books.store') }}">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="author" :value="__('Author')" />
                    <x-text-input id="author" class="block mt-1 w-full" type="text" name="author" value="{{ old('author') }}" required autocomplete="name" />
                    <x-input-error :messages="$errors->get('author')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{ old('price') }}" required autocomplete="name" />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('Create book') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
