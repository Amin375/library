<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookGenreController extends Controller
{
    public function index($genreId)
    {
        $books = Book::whereHas('genre', function ($query) use ($genreId){
            $query->where('genres.id', $genreId);
        })->get();

        return view('member.book.index', ['books' => $books]);
    }
}
