<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index($slug)
    {
        $books = Book::whereHas('author', function ($query) use ($slug){
            $query->where('authors.slug', $slug);
        })->get();

        return view('member.book.index', ['books' => $books]);
    }
}
