@extends('layouts.app')

@section('content')
    <div class="hidden md:px-10 lg:px-20 md:flex lg:flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-900 text-white">
                <thead class="bg-blue-900">
                <tr>
                    <th scope="col"
                        class="pl-8 py-3 text-left text-md font-medium text-white uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col"
                        class=" pl-8 py-3 text-left text-md font-medium text-white uppercase tracking-wider">
                        Author
                    </th>
                    <th scope="col"
                        class=" pl-8 py-3 text-left text-md font-medium text-white uppercase tracking-wider">
                        Genre
                    </th>
                    <th scope="col"
                        class="pl-2 py-3 text-md font-medium text-white uppercase tracking-wider">
                        Count
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($books as $book)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-md font-medium text-gray-900">
                                        {{ $book->title }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-md text-gray-900">{{ $book->author->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-md leading-5 rounded-full text-gray-900">
                  {{ $book->genre->title }}
                </span>
                        </td>
                        <td class="px-6 py-4 leading-5 whitespace-nowrap text-md text-gray-900 flex justify-evenly">
                            <a class="text-3xl"
                               href="{{ route('admin.book_copies.store', $book->id) }}">+</a> {{ $book->book_copies_count }}
                            <a class="text-3xl" href="{{ route('admin.book_copies.destroy', $book->id) }}">-</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
