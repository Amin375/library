<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookGenreController extends Controller
{
    public function index($slug)
    {
        $books = Book::whereHas('genre', function ($query) use ($slug){
            $query->where('genres.slug', $slug);
        })->get();

        return view('member.book.index', ['books' => $books]);
    }
}
