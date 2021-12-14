@extends('layouts.app')

@section('content')
    <div class="px-96 flex justify-center py-8 w-full">
        <div class="w-full shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-900 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-3 uppercase font-semibold text-sm">Results</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                @forelse($books as $book)
                    <tr>
                        <td class="w-1/3 text-left py-3 px-3">{{ $book->title }}</td>
                        <td class="w-1/3 text-left py-3 px-3">{{ $book->title }}</td>

                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <h1>No books with {{ $searchRequest }}.</h1>
                        </td>
                    </tr>
                @endforelse
{{--                @forelse($authors as $author)--}}
{{--                    <tr>--}}
{{--                        <td class="w-1/3 text-left py-3 px-3">{{ $author->name }}</td>--}}
{{--                    </tr>--}}
{{--                @empty--}}
{{--                    <tr>--}}
{{--                        <h1>No authors to show</h1>--}}
{{--                    </tr>>--}}
{{--                @endforelse--}}
{{--                @forelse($genres as $genre)--}}
{{--                    <tr>--}}
{{--                        <td class="w-1/3 text-left py-3 px-3">{{ $genre->title }}</td>--}}
{{--                    </tr>--}}
{{--                @empty--}}
{{--                    <div>--}}
{{--                        <h1>No genres to show</h1>--}}
{{--                    </div>--}}
{{--                @endforelse--}}
                </tbody>
            </table>
        </div>
    </div>

@endsection

