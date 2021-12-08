<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCopy;
use Illuminate\Http\Request;

class BookCopyController extends Controller
{
    public function add($id)
    {

        $newCopy = ['book_id' => $id];
        BookCopy::create($newCopy);

        return redirect()->route('books.index');
    }
}
