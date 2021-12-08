<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookCopyController extends Controller
{
    public function add($id)
    {
        $book = Book::findOrFail($id);
        $book->bookCopies()->attach(Book::id());
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->books()->detach(Book::id());
    }
}
