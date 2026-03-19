<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Here are books') }}
                </div>

                <div class="relative overflow-x-auto p-6 pt-0">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-700 dark:text-gray-200">
                        <thead class="text-sm border-b border-gray-200 dark:border-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3 font-bold border border-gray-200 dark:border-gray-700">
                                    Book name
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold border border-gray-200 dark:border-gray-700">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3 font-bold border border-gray-200 dark:border-gray-700">
                                    Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$books->isEmpty())
                                @foreach($books as $book)
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-6 py-4 whitespace-nowrap border border-gray-200 dark:border-gray-700">{{ $book->name }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $book->author }}</td>
                                        <td class="px-6 py-4 border border-gray-200 dark:border-gray-700">{{ $book->price }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="px-6 py-10 text-center text-sm text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-gray-700">
                                        {{ __('No books found yet.') }}
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="p-6 pt-0">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
