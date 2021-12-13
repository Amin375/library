<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Eager loading to solve N+1 problem
        $books = Book::with(['author', 'genre'])->get();

        return view('member.book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.*
     */
    public function create(): View
    {
        return view('admin.book.create', [
            'authors' => Author::all(),
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required',
            'genre_id' => 'required',
            'blurb' => 'required',
            'image' => 'required|image',
        ]);

        $validatedData['image'] = request()->file('image')->store('images');

        Book::create($validatedData);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $book = Book::query()->whereId($id)->first();

        return view('member.book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::query()->find($id);
        $authors = Author::all();
        $genres = Genre::all();

        return view('admin.book.edit', ['book' => $book, 'authors' => $authors, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::whereId($id)->firstOrFail();

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required',
            'genre_id' => 'required',
            'blurb' => 'required',
            'image' => 'image',
        ]);

//        if($request->hasFile('image')){
//            $validatedData['image'] = request()->file('image')->store('images');
//        }

        if(isset($validatedData['image'])){
            $validatedData['image'] = request()->file('image')->store('images');
        }

        $book->update($validatedData);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
