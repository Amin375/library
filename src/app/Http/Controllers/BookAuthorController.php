<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
    public function index($authorId)
    {
        $books = Book::whereHas('author', function ($query) use ($authorId){
            $query->where('authors.id', $authorId);
        })->get();

        return view('member.book.index', ['books' => $books]);
    }
}
