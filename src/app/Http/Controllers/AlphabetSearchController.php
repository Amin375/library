<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AlphabetSearchController extends Controller
{
    public function __invoke(Request $request, $letter)
    {
        $books = Book::query()->where('title', 'like', $letter . '%')->get();

        return view('member.book.index', [
            'books' => $books ?? [],
            'authors' => $authors ?? [],
        ]);
    }
}
