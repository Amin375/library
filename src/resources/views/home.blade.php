@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">
        <div class="w-full sm:px-6">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <div class="w-full p-6">
                    <p class="text-gray-700 text-3xl">

                        Welcome {{ strtok(auth()->user()->name, " R") }}!
                    </p>
                    @if (session('status'))
                        <div
                            class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                            role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </section>
        </div>
        <div
            class="mx-10 my-10 grid grid-cols-1 grid-cols-1 md:grid-cols-1 lg:grid-cols-12 xl:grid-cols-12 2xl:grid-cols-12 gap-4">
            @foreach($books as $book)
                @if($loop->iteration <= 2)
                    <div class="col-span-6 p-5 border border-gray-500 rounded-md shadow-md mb-10">
                        <div class="grid lg:grid-cols-12 xl:grid-cols-12 2xl:grid-cols-12 gap-x-3">
                            <div class="col-span-5">
                                <img class="rounded-md shadow-lg h-80 w-52" src="{{ secure_asset($book->image()) }}"
                                     alt="{{ $book->title }} ">
                            </div>
                            <div class="col-span-7">
                                <h1 class="text-2xl">{{ $book->title }}</h1>
                                <div class="mt-7 flex flex-col align-between">
                                    <p class="mb-10 text-base">{{ $book->blurb }}</p>
                                    <a href="{{ route('book.show', ['slug' => $book->slug]) }}"
                                       class="px-5 w-3/6 py-2 bg-blue-800 text-center text-white rounded-xl hover:bg-blue-900">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($loop->iteration > 3)
                    <div class="col-span-3 p-3 border border-gray-500 rounded-md shadow-md mb-10">
                        <div class="grid lg:grid-cols-12 xl:grid-cols-12 2xl:grid-cols-12 gap-x-3">
                            <div class="col-span-7 flex flex-col gap-y-5">
                                <img class="rounded-md shadow-lg h-60 w-52" src="{{ secure_asset($book->image()) }}"
                                     alt="{{ $book->title }} ">
                                <a href="{{ route('book.show', ['slug' => $book->slug]) }}"
                                   class="px-4 w-full py-2 bg-blue-800 text-center text-white rounded-xl hover:bg-blue-900">Read
                                    More</a>
                            </div>
                            <div class="col-span-5 grid content-between">
                                <h1 class="text-xl">{{ Str::words($book->title, 4, '...') }}</h1>
                                <div class="mt-3 flex flex-col justify-between">
                                    <p class="mb-4">{{ Str::words($book->blurb, 25,'...') }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="mx-10 mb-10">
            {{ $books->links() }}
        </div>
    </main>
@endsection
