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
                        <th>
                            Show Books
                        </th>
                    </tr>
                    @foreach($genres as $genre)
                        <tr>
                            <td>
                                {{ $genre->title }}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
