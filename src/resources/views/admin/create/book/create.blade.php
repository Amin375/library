@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <form class="" action="" method="">
                    <div class="mb-2">
                        <h1 class="text-xl">Add Book</h1>
                    </div>
                    <div>
                        <label class="" for="title">Title</label>
                        <input class="w-10 border border-gray-400 w-full py-1 px-2" type="text">
                    </div>
                    <div>
                        <label class="" for="author">Author</label>
                        <input class="w-10 border border-gray-400 w-full py-1 px-2" type="text">
                    </div>
                    <div>
                        <label class="" for="author">Genre</label>
                        <select name="genre[]">
                            <option value="thriller">thriller</option>
                            <option value="fiction">fiction</option>
                            <option value="romance">romance</option>
                        </select>
                    </div>
                    <div>
                        <label class="" for="blurb">Blurb</label>
                        <textarea name="" id="" cols="18" rows="10"></textarea>
                    </div>
                    <div>
                        <label class="" for="image">Cover Image</label>
                        <input class="w-10 border border-gray-400 w-full py-1 px-2" type="file">
                    </div>
                    <div>
                        <button class="py-2 px-4 border" type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection
