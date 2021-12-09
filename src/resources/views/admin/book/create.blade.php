@extends('layouts.app')

@section('content')
    <div class="flex justify-center my-10">
        <div class="flex justify-center rounded-md border-2 border-gray-300 shadow-md flex-col p-5 lg:w-1/4 ">
            <div class="z-10 w-full mb-5">
                <h1 class="text-2xl text-left">Add Book</h1>
            </div>
            <form action="{{ route('admin.book.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-y-2 mb-5">
                    <label for="title">Title</label>
                    <input name="title" class="w-10 border border-gray-300 w-full py-1 px-2 rounded" type="text">
                </div>
                <div class="flex flex-col gap-y-2 mb-5">
                    <label class="rounded" for="blurb">Blurb</label>
                    <textarea class="border border-gray-300 rounded" name="blurb" id="" cols="18" rows="10"></textarea>
                </div>
                <div class="flex gap-x-3 mb-3">
                    <label class="pt-1" for="author">Author</label>
                    <select class="w-full p-1 bg-gray-200 rounded" name="author_id">
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-x-3 mb-7">
                    <label class="pt-1" for="genre">Genre</label>
                    <select class="w-full p-1 bg-gray-200 rounded" name="genre_id">
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5 bg-gray-200 rounded p-2">
                    <label for="image">Image Cover</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <button class="py-2 px-10 text-lg rounded-md bg-blue-800 hover:bg-blue-900 text-white"
                            type="submit">Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
