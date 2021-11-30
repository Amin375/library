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
                    @foreach($authors as $author)
                        <tr>
                            <td>
                                {{ $author->name }}
                            </td>
{{--                            <td>--}}
{{--                                <a href="{{ route('admin') }}"></a>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

