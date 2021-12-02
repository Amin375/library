@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <h1>{{ $book->title }}</h1>
                <h2>{{ $book->author->name }}</h2>
                <p>{{ $book->blurb }}</p>
                <p>{{ $book->genre->title }}</p>
            </div>
        </div>
    </div>
@endsection
