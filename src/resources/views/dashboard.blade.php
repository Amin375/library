@extends('layouts.app')

@section('content')
    <div class="flex justify-center h-52 px-32 py-8 w">
        <div class="border border-black min-w-full">
            <div class="">
                <table>
                    <thead>
                    <th class="text-left mb-1">Current Loan</th>
                    <th class="text-left mb-1">Wishlist</th>
                    <th class="text-left mb-1">Cart</th>

                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <td>
                                <div class="mb-2">Order from: {{ $loan->created_at }}</div>
                                @foreach($loan->bookCopies as $book_copy)
                                    <div>{{ $book_copy->book->title }}</div>
                                @endforeach
                            </td>
                            @foreach($booksCookies as $book)
                                <td>
                                    <div>{{ $book->title }}</div>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    @foreach($booksCookies as $book)
                            <td>
                                <div>{{ $book->title }}</div>
                            </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
