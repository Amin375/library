@extends('layouts.app')

@section('content')
        <div class="grid justify-items-center h-full">
            <div class="grid grid-cols-7 grid-rows-1 gap-3 w-3/6 py-10">
                <div class="col-span-2 h-80 pr-7">
                    <img class="rounded shadow-lg" src="{{ secure_asset($book->image()) }}" alt="Harry Potter and the Sorcerer's Stone image" class="rounded-md" width="500">
                </div>
                <div class="col-span-5">
                    <h1 class="text-2xl pb-1">{{ $book->title }}</h1>
                    <h2 class="text-xl italic pb-5">{{ $book->author->name }}</h2>
                    <p class="text-xl rounded-2xl pb-5">{{ $book->genre->title }}</p>
                    <p class="text-xl pb-8">{{ $book->blurb }}</p>
                    <div class="flex gap-5 justify-start">
                        <a class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300" href="{{ route('loans.store', auth()->id()) }}">Leen</a>
                        <a class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300" href="">Wishlist</a>
                        <a class="text-lg bg-gray-200 rounded-xl p-2 hover:bg-gray-300" href="">Cart</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
