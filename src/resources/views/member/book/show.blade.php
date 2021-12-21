@extends('layouts.app')

@section('content')
    <div class="grid justify-items-center h-full">
        <div class="grid grid-cols-12 grid-rows-1 gap-3 md:w-4/6 lg:w-4/6 py-10">
            <div class="col-span-4 h-auto pr-7">
                <img class="rounded-md shadow-lg" src="{{ secure_asset($book->image()) }}"
                     alt="Harry Potter and the Sorcerer's Stone image">
            </div>
            <div class="col-span-8">
                <h1 class="text-2xl pb-1">{{ $book->title }}</h1>
                <h2 class="text-xl italic pb-5">{{ $book->author->name }}</h2>
                <p class="text-xl rounded-2xl pb-5">{{ $book->genre->title }}</p>
                <p class="text-xl pb-8">{{ $book->blurb }}</p>
                <div class="flex gap-5 justify-start">
                    @if($book->firstAvailableBookCopyId())

                        <form action="{{ route('loans.cart.store', $book->firstAvailableBookCopyId()) }}" method="post">
                            @csrf
                            <button class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/>
                                </svg>
                            </button>
                        </form>
                    @else
                        Niet op voorraad
                    @endif
                    @if($book->firstAvailableBookCopyId())

                            <form action="{{ route('wishlist.store', $book->firstAvailableBookCopyId()) }}" method="post">
                            @csrf
                            <button class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300 cursor-pointer" type="submit" >
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="24" height="24" viewBox="0 0 30.000000 30.000000" preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                        <path d="M77 264 c-4 -4 -7 -59 -7 -123 l0 -115 40 39 40 39 40 -39 41 -40 -3 120 -3 120 -70 3 c-39 1 -74 0 -78 -4z"/>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    @else
                        Empty...
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
