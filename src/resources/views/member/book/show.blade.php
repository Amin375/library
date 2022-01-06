@extends('layouts.app')

@section('content')
    <div class="grid justify-items-center">
        <div class="flex flex-col justify-center
        lg:grid lg:grid-cols-6 lg:grid-rows-1 lg:gap-3
        xl:grid xl:grid-cols-6 xl:grid-rows-1 xl:gap-3
        2xl:grid 2xl:grid-cols-6 2xl:grid-rows-1 2xl:gap-3
        md:w-5/6 lg:w-11/12 lg:px-4 xl:px-4 xl:w-11/12 2xl:my-10 2xl:w-4/6 py-10 md:py-3
        md:border lg:border xl:border 2xl:border md:my-10 lg:my-10 xl:my-10 rounded-xl shadow">
            <div class="flex justify-center lg:grid lg:justify-items-center lg:col-span-2 xl:col-span-2 2xl:col-span-2
              sm:pb-3 md:p-3 2xl:pr-7">
                <img class="rounded-md shadow-lg h-80 md:h-96 lg:h-10/12" src="{{ secure_asset($book->image()) }}"
                     alt="{{ $book->title }}">
            </div>
            <div class="flex flex-col justify-center  lg:col-span-4 xl:col-span-4 2xl:col-span-4">
                <h1 class="text-2xl text-center pb-2.5 pt-1.5">{{ $book->title }}</h1>
                <h2 class="text-xl text-center italic pb-5"><a class="px-2.5 py-0.5 rounded-2xl hover:underline" href="{{ route('book.author', $book->author->id) }}">{{ $book->author->name }}</a></h2>
                <p class="text-xl pb-8 p-3 px-5 md:px-3">{{ $book->blurb }}</p>
                <div class="flex justify-between pr-7">
                <p class="text-xl rounded-2xl pb-5 p-3 italic z-50"><a class="border px-2.5 py-0.5 rounded-2xl hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50" href="{{ route('book.genre', $book->genre->id) }}">{{ $book->genre->title }}</a></p>
                <div class="flex gap-5">

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
    </div>
@endsection
