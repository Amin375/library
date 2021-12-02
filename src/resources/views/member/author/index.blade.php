@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <table>
                    <tr>
                        <th>
                            Genre
                        </th>
                    </tr>
                    @forelse($authors as $author)
                        <tr>
                            <td>
                                <a href="{{ route('book.author', $author->id) }}">{{ $author->name }}</a>
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

