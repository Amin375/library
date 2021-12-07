@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <form action="{{ route('admin.book.update' , $book->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <h1 class="text-xl">Add Book</h1>
                    </div>
                    <div>
                        <label class="" for="title">Title</label>
                        <input name="title" class="w-10 border border-gray-400 w-full py-1 px-2" type="text"
                               value="{{ isset($book) ? $book->title : null }}">
                    </div>
                    <div>
                        <label class="" for="author">Author</label>
                        <select name="author_id">
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : null }}>{{ $author->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="" for="genre">Genre</label>
                        <select name="genre_id">
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}" {{ $book->genre_id == $genre->id ? 'selected' : null }}>{{ $genre->title }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="" for="blurb">Blurb</label>
                        <textarea name="blurb" cols="18" rows="10">
                            {{ isset($book) ? $book->blurb : null }}
                        </textarea>
                    </div>
                    <div>
                        <label for="image">Book Cover</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <button class="py-2 px-4 border" type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
