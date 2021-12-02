@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <table>
                    <tr>
                        <th>
                            Book Title
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Genre
                        </th>
                        <th>
                            Show
                        </th>
                    </tr>
                    @forelse($books as $book)
                        <tr>
                            <td>
                                {{ $book->title }}
                            </td>
                            <td>
                                {{ $book->author->name }}
                            </td>
                            <td>
                                {{ $book->genre->title }}
                            </td>
                            <td>
                                <a href="{{ route('book.show', ['id' => $book->id] )}}">View Book</a>
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
    </div>
@endsection
