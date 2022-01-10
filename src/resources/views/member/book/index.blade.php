@extends('layouts.app')

@section('content')
    <div class="flex justify-center mt-2.5 gap-x-4 px-2">
        <div class="inline lg:hidden xl:hidden 2xl:hidden bg-gray-200  rounded-xl  overflow-y-hidden" style="box-shadow: inset 12px 0 15px -4px rgb(184 184 184 / 80%), inset -12px 0 8px -4px rgb(184 184 184 / 80%)">
            <ul class="inline-flex py-1	">
        @foreach($alphabetArray as $letter)
                <form class="inline" action="{{ route('alphabetsearch', $letter) }}" method="get">
                    <li>
                        <button type="submit"
                                class="transform transition focus:outline-none duration-150 hover:scale-150 text-xl text-black px-2">{{ $letter }}</button>
                    </li>
                </form>
            @endforeach

            </ul>
        </div>
        <div class="hidden lg:inline xl:inline 2xl:inline bg-gray-200  rounded-xl  overflow-y-hidden">
            <ul class="inline-flex py-1	">
        @foreach($alphabetArray as $letter)
                <form class="inline" action="{{ route('alphabetsearch', $letter) }}" method="get">
                    <li>
                        <button type="submit"
                                class="transform transition focus:outline-none duration-150 hover:scale-150 text-xl text-black px-2">{{ $letter }}</button>
                    </li>
                </form>
            @endforeach

            </ul>
        </div>
    @if(auth()->user()->isAdmin())
        <div class="flex justify-center align-center shrink-0">
            <button
                class="p-1 bg-gray-200 border transform transition focus:outline-none duration-75 hover:scale-110 rounded-xl "
                id="switch-button">
                <span id="image-icon"><img class="w-full" src="/icons/image-icon.svg"></span>
                <span class="hidden" id="table-icon"><img class="w-full" src="/icons/table-icon.svg"></span>

            </button>
        </div>
        @else
            <div class="flex justify-center align-center shrink-0">
                <button
                    class="p-1 bg-gray-200 border transform transition focus:outline-none duration-75 hover:scale-110 rounded-xl "
                    id="switch-button">
                    <span class="hidden"  id="image-icon"><img class="w-full" src="/icons/image-icon.svg"></span>
                    <span id="table-icon"><img class="w-full" src="/icons/table-icon.svg"></span>
                </button>
            </div>
        @endif

    </div>
    @if(auth()->user()->isAdmin())
        <div id="table-view"
             class="mx-0.5  md:flex lg:flex xl:flex 2xl:flex justify-center py-5 ">
            <div
                class="md:w-10/12 lg:w-10/12 xl:w-10/12 2xl:w-10/12 shadow overflow-hidden rounded border-b border-gray-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-900 text-white">
                    <tr>
                        <th class="text-left md:table-cell lg:table-cell xl:table-cell 2xl:table-cell py-3 px-3 uppercase font-semibold text-sm">
                            Book Title
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell text-left py-3 px-3 uppercase font-semibold text-sm">
                            Author
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell  text-left py-3 px-3 uppercase font-semibold text-sm">
                            Genre
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell text-left py-3 px-3 uppercase font-semibold text-sm">

                        </th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @forelse($books as $book)
                        <tr>
                            <td class="md:w-5/12 lg:w-5/12 xl:w-5/12 2xl:w-5/12 text-left py-3 px-3">
                                <div class="flex justify-between">
                                    <div>
                                        <p>{{ $book->title }}</p>
                                    </div>
                                    <div class="flex md:hidden lg:hidden xl:hidden 2xl:hidden justify-evenly gap-x-3 px-4 shrink-0">
                                        <a class="flex shrink-0 my-1 hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2"
                                           href="{{ route('book.show', ['id' => $book->id] )}}">
                                            <span class="flex shrink-0"><img src="icons/view.svg" alt=""></span>
                                        </a>
                                        <a class="flex shrink-0 text-lg hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2 my-1"
                                           href="{{ route('admin.book.edit', $book->id )}}">
                                            <span class="flex shrink-0"><img src="icons/edit.svg" alt="Edit Icon"></span>
                                        </a>
                                        <a class="text-lg flex shrink-0 hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2 my-1"
                                           href="{{ route('admin.book.destroy', $book->id )}}"
                                           onclick="return confirm('Are you sure you want to delete {{ $book->title }} from {{ $book->author->name }}?')">
                                            <span class="flex shrink-0"><img src="icons/bin.svg" alt="Delete Icon"></span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell py-3 px-3 ">
                                {{ $book->author->name }}
                            </td>
                            <td class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell  py-3 px-3 ">
                                {{ $book->genre->title }}
                            </td>
                            <td class=" hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell ">
                                <div class="flex justify-evenly gap-x-3 px-4 shrink-0">
                                    <a class="flex shrink-0 my-1 hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2"
                                       href="{{ route('book.show', ['id' => $book->id] )}}">
                                        <span class="flex shrink-0"><img src="icons/view.svg" alt=""></span>
                                    </a>
                                    <a class="flex shrink-0 text-lg hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2 my-1"
                                       href="{{ route('admin.book.edit', $book->id )}}">
                                     <span class="flex shrink-0"><img src="icons/edit.svg" alt="Edit Icon"></span>
                                    </a>
                                    <a class="text-lg flex shrink-0 hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2 my-1"
                                       href="{{ route('admin.book.destroy', $book->id )}}"
                                       onclick="return confirm('Are you sure you want to delete {{ $book->title }} from {{ $book->author->name }}?')">
                                       <span class="flex shrink-0"><img src="icons/bin.svg" alt="Delete Icon"></span>
                                    </a>
                                </div>
                            </td>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td>
                                <p>Nothing to show...</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div id="image-view"
             class="hidden grid-cols-2 justify-items-center gap-3 py-12 p-2">
            @forelse($books as $book)
                <div class="">
                    <div class="grid justify-items-center sm:w-32 md:w-52 lg:w-52">
                        <a href="{{ route('book.show', ['id' => $book->id]) }}">
                            <img id="book-cover-image" class="flex flex-shrink-0 transition duration-150 ease-in-out transform hover:scale-110
                        rounded-md shadow-lg h-48 w-32 md:h-60 md:w-40 lg:h-60 lg:w-40 xl:h-72 xl:w-48 2xl:h-80 2xl:w-56 mb-3"
                                 src="{{ secure_asset($book->image()) }}" alt="{{ $book->title }}">
                        </a>
                        <span
                            class="mx-2 mb-5 sm:mx-2 md:mx-5 lg:mx-5 xl:mx-5 2xl:mx-5 text-base md:text-lg lg:text-lg xl:text-lg 2xl:text-lg"><h1>{{ $book->title }}</h1></span>
                    </div>
                </div>
            @empty
                <div>
                    <h1>There was nothing to find...</h1>
                </div>
            @endforelse
        </div>

    @endif

    @if(auth()->user()->isAdmin() == false)

        <div id="table-view" class="hidden mx-0.5 justify-center py-5 ">
            <div
                class="md:w-10/12 lg:w-10/12 xl:w-10/12 2xl:w-10/12 shadow overflow-hidden rounded border-b border-gray-200">
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-900 text-white">
                    <tr>
                        <th class="text-left md:table-cell lg:table-cell xl:table-cell 2xl:table-cell py-3 px-3 uppercase font-semibold text-sm">
                            Book Title
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell text-left py-3 px-3 uppercase font-semibold text-sm">
                            Author
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell  text-left py-3 px-3 uppercase font-semibold text-sm">
                            Genre
                        </th>
                        <th class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell text-left py-3 px-3 uppercase font-semibold text-sm">

                        </th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @forelse($books as $book)
                        <tr>
                            <td class=" text-left py-3 px-3">
                                <div class="flex justify-between">
                                    <div>
                                        <p>{{ $book->title }}</p>
                                    </div>
                                    <div class="inline-flex md:hidden lg:hidden xl:hidden 2xl:hidden">
                                        <div class="px-3"><a href="{{ route('book.show', ['id' => $book->id] )}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24">
                                                    <path
                                                        d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"/>
                                                </svg>
                                            </a></div>
                                    </div>
                                </div>
                            </td>
                            <td class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell md:w-3/12 lg:w-3/12 xl:w-3/12 2xl:w-3/12 py-3 px-3 ">
                                {{ $book->author->name }}
                            </td>
                            <td class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell md:w-3/12 lg:w-3/12 xl:w-3/12 2xl:w-3/12  py-3 px-3 ">
                                {{ $book->genre->title }}
                            </td>
                            <td class="hidden md:table-cell lg:table-cell xl:table-cell 2xl:table-cell">
                                <div class="flex justify-evenly gap-x-7 px-4">
                                    <a class="mt-1 hover:bg-gray-200 active:bg-gray-300 rounded-xl p-2"
                                       href="{{ route('book.show', ['id' => $book->id] )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td>
                                <p>Nothing to show...</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div id="image-view" class="grid xs:grid-cols-3 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 grid-cols-2 justify-items-center gap-3 py-12 p-2">
            @forelse($books as $book)
                <div class="">
                    <div class="grid justify-items-center sm:w-32 md:w-52 lg:w-52">
                        <a href="{{ route('book.show', ['id' => $book->id]) }}">
                            <img id="book-cover-image" class="flex flex-shrink-0 transition duration-150 ease-in-out transform hover:scale-110
                        rounded-md shadow-lg h-48 w-32 md:h-60 md:w-40 lg:h-60 lg:w-40 xl:h-72 xl:w-48 2xl:h-80 2xl:w-56 mb-3"
                                 src="{{ secure_asset($book->image()) }}" alt="{{ $book->title }}">
                        </a>
                        <span
                            class="mx-2 mb-5 sm:mx-2 md:mx-5 lg:mx-5 xl:mx-5 2xl:mx-5 text-base md:text-lg lg:text-lg xl:text-lg 2xl:text-lg"><h1>{{ $book->title }}</h1></span>
                    </div>
                </div>
            @empty
                <div>
                    <h1>There was nothing to find...</h1>
                </div>
            @endforelse
        </div>
    @endif
@endsection

