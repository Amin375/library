<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->get('search') != ''){
            $books = Book::search($request->get('search'))->get();
            $authors = Author::search($request->get('search'))->get();
        }

    return view('member.search',[
        'searchRequest' => $request->get('search'),
        'books' => $books ?? [],
        'authors' => $authors ?? []
    ]);

    }
}
