<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AlphabetSearchController extends Controller
{
    public function __invoke(Request $request)
    {

        $books = Book::where('title', 'like', $title . '%');



        return view('member.search',[
            'searchRequest' => $request->get('search'),
            'books' => $books ?? [],
            'authors' => $authors ?? []
        ]);
    }
}
