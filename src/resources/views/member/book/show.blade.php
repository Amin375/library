@extends('layouts.app')

@section('content')
    <div class="grid justify-items-center">
        @if(Session::has('success'))
            <div class="show-and-hide absolute mt-4 px-10 py-2.5 bg-blue-900 text-white rounded-lg">
                <div>
                    <p class="text-xl"><span class="italic">{{ $book->title }}</span> {{ Session::get('success') }}</p>
                </div>
            </div>
        @endif
        @if(Session::has('doubleCartStore'))
            <div class="show-and-hide absolute mt-4 px-10 py-2.5 bg-red-600 text-white rounded-lg">
                <div>
                    <p class="text-xl"><span
                            class="italic">{{ $book->title }}</span> {{ Session::get('doubleCartStore') }}</p>
                </div>
            </div>
        @endif

        @if(Session::has('successWishlist'))
            <div class="show-and-hide absolute mt-4 px-10 py-2.5 bg-blue-900 text-white rounded-lg">
                <div>
                    <p class="text-xl"><span
                            class="italic">{{ $book->title }}</span> {{ Session::get('successWishlist') }}</p>
                </div>
            </div>
        @endif
        @if(Session::has('doubleWishlistStore'))
            <div class="show-and-hide absolute mt-4 px-10 py-2.5 bg-red-600 text-white rounded-lg">
                <div>
                    <p class="text-xl"><span
                            class="italic">{{ $book->title }}</span> {{ Session::get('doubleWishlistStore') }}</p>
                </div>
            </div>
        @endif
        <div class="flex flex-col justify-center
        lg:grid lg:grid-cols-6 lg:grid-rows-1 lg:gap-3
        xl:grid xl:grid-cols-6 xl:grid-rows-1 xl:gap-3
        2xl:grid 2xl:grid-cols-6 2xl:grid-rows-1 2xl:gap-3
        md:w-5/6 lg:w-11/12 lg:px-4 xl:px-4 xl:w-11/12 2xl:my-10 2xl:w-4/6 py-10 md:py-3
        md:border lg:border xl:border 2xl:border md:my-10 lg:my-10 xl:my-10 rounded-xl shadow">
            <div class="flex justify-center lg:grid lg:justify-items-center lg:col-span-2 xl:col-span-2 2xl:col-span-2
              sm:pb-3 md:p-3 2xl:pr-7">
                <img class="rounded-md shadow-lg h-80 md:h-96 lg:h-10/12" src="{{ secure_asset($book->image()) }}"
                     alt="{{ $book->title }} ">
            </div>
            <div class="flex flex-col justify-center  lg:col-span-4 xl:col-span-4 2xl:col-span-4">
                <h1 class="text-2xl text-center pb-2.5 pt-1.5">{{ $book->title }}</h1>
                <h2 class="text-xl text-center italic pb-5"><a class="px-2.5 py-0.5 rounded-2xl hover:underline"
                                                               href="{{ route('book.author', $book->author->slug) }}">{{ $book->author->name }}</a>
                </h2>
                <p class="text-xl pb-8 p-3 px-5 md:px-3">{{ $book->blurb }}</p>
                <div class="flex justify-between pr-7">
                    <p class="text-xl rounded-2xl pb-5 p-3 italic"><a
                            class="border px-2.5 py-0.5 rounded-2xl hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50"
                            href="{{ route('book.genre', $book->genre->slug) }}">{{ $book->genre->title }}</a></p>
                    <div class="flex gap-5">

                        @if($book->firstAvailableBookCopyId())
                            <form
                                action="{{ route('loans.cart.store', [$book->firstAvailableBookCopyId(), 'slug' => $book->slug]) }}"
                                method="post">
                                @csrf
                                <button class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300" type="submit">
                                    <img src="{{URL::asset('/icons/cart.svg')}}" alt="Cart Icon">

                                </button>
                            </form>
                        @else
                            <div>
                                <button disabled
                                        class="text-lg bg-gray-500 opacity-30 rounded-xl p-2  cursor-not-allowed"
                                        type="submit">
                                    <img src="{{URL::asset('/icons/cart.svg')}}" alt="Cart Icon">

                                </button>
                            </div>

                        @endif
                        @if($book->firstAvailableBookCopyId())
                            <form
                                action="{{ route('wishlist.store', [$book->firstAvailableBookCopyId(),'slug' => $book->slug]) }}"
                                method="post">
                                @csrf
                                <button class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300 cursor-pointer"
                                        type="submit">
                                    <img src="{{URL::asset('/icons/wishlist.svg')}}" alt="Wishlist Icon">
                                </button>
                            </form>
                        @else
                            <div>

                                <button disabled
                                        class="text-lg bg-gray-500 opacity-30 rounded-xl p-2  cursor-not-allowed"
                                        type="submit">

                                    <img src="{{URL::asset('/icons/wishlist.svg')}}" alt="Wishlist Icon">
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
