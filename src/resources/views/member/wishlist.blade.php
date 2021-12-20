@extends('layouts.app')

@section('content')
    <div class="px-96 flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Book Title</th>
                    <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Author</th>
                    <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Genre</th>
                    <th class="text-left py-3 px-3 uppercase font-semibold text-sm">View</th>
                    <th class="text-left py-3 px-3 uppercase font-semibold text-sm">Delete</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
{{--                @dd($books)--}}
{{--{{ ddd($books) }}--}}
                @forelse($books as $book)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-3">{{ $book->title }}</td>
                        <td class="w-1/3 text-left py-3 px-3">{{ $book->author->name }}</td>
                        <td class="text-left py-3 px-3">{{ $book->genre->title }}</td>
                        <td class="text-left py-3 px-3"><a
                                href="{{ route('book.show', ['id' => $book->id] )}}">Open</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            <p>Nothing to show...</p>
                        </td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
