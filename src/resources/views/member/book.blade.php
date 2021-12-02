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
                    </tr>
                    @foreach($books as $book)
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
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
