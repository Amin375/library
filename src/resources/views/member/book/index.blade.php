@extends('layouts.app')

@section('content')
    <div class="px-80 flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Book Title</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Author</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Genre</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Show</td>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($books as $book)
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{ $book->title }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $book->author->name }}</td>
                    <td class="text-left py-3 px-4">{{ $book->genre->title }}</td>
                    <td class="text-left py-3 px-4"><a href="{{ route('book.show', ['id' => $book->id] )}}">View Book</a></td>
                </tr>
                @empty
                    <tr>
                        <td>
                            <p>Nothing to show...</p>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
