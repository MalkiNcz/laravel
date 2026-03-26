<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Authors') }}
        </h2>
        <a href="{{ route('authors.create') }}">
            <x-primary-button>
                Create new author
            </x-primary-button>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Here are authors') }}
                </div>

                <div class="relative overflow-x-auto p-6 pt-0">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-700 dark:text-gray-200">
                        <thead class="text-sm border-b border-gray-200 dark:border-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-bold border border-gray-200 dark:border-gray-700">
                                    Authors name
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold border border-gray-200 dark:border-gray-700">
                                    Birth
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($authors as $author)
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap border border-gray-200 dark:border-gray-700">{{ $author->name }}</td>
                                    <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $author->birth }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-10 text-center text-sm text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-gray-700">
                                        {{ __('No authors found yet.') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="p-6 pt-0">
                    {{ $authors->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
