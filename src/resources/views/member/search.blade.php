@extends('layouts.app')

@section('content')
    <div class="px-96 flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <div class="table w-full">
                <div class="table-header-group bg-blue-900 text-white">
                    <div class="table-row">
                        <div class="table-cell w-full text-left py-3 px-3 uppercase font-semibold text-sm">
                            <h1>Books</h1>
                        </div>
                    </div>
                </div>
                <div class="table-row ">
                    @forelse($books as $book)
                        <a href="{{ route('book.show', ['id' => $book->id] )}}">
                            <div class="table-cell w-1/3 text-left py-3 px-3 hover:bg-gray-300">
                                <div class="flex flex-row hover:bg-gray-300">
                                    <div>
                                        <span>{{ $book->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <h1>No books with {{ $searchRequest }}.</h1>
                            </td>
                        </tr>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="px-96 flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="w-full text-left py-3 px-3 uppercase font-semibold text-sm">Authors</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($authors as $author)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-3">
                            <div class="flex flex-row ">
                                <div>
                                    <a href="{{ route('book.author', $author->id) }}">{{ $author->name }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <h1>No authors with {{ $searchRequest }}.</h1>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

