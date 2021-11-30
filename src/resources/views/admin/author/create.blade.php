@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="flex justify-center border lg:w-1/4">
            <div class="flex flex-col justify-center lg:w-2/4 gap-2">
                <form class="" action="{{ route('admin.author.store') }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <h1 class="text-xl">Add Author</h1>
                    </div>
                    <div>
                        <label class="" for="genre">Author</label>
                        <input name="name" class="w-10 border border-gray-400 w-full py-1 px-2" type="text">
                    </div>
                    <div>
                        <button class="py-2 px-4 border" type="submit">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
