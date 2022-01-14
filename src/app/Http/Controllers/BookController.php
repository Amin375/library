<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Genre;
use App\Models\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //Eager loading to solve N+1 problem
        $books = Book::with(['author', 'genre'])->get();

        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $alphabetArray = str_split($alphabet);

        return view('member.book.index', [
            'books' => $books,
            'alphabetArray' => $alphabetArray,
        ]);
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
     * @param Request $request
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

        $imageName = Str::slug($validatedData['title']);

        $validatedData['image'] = request()->file('image')->storeAs('images', $imageName . '.jpg');

        Book::create($validatedData);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        $book = Book::query()->whereSlug($slug)->first();
        $slug = $book->slug;

        return view('member.book.show', ['book' => $book, 'slug' => $slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'book' => $book,
            'authors' => Author::all(),
            'genres' => Genre::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $book = Book::whereId($id)->firstOrFail();

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author_id' => 'required',
            'genre_id' => 'required',
            'blurb' => 'required',
            'image' => 'image',
        ]);

        $imageName = Str::slug($book->title);

        if(isset($validatedData['image'])){
            $validatedData['image'] = request()->file('image')->storeAs('images', $imageName . '.jpg');
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
