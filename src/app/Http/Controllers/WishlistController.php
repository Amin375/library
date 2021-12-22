<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCopy;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        dd(Cookie::get('wishlist'));
        if (Cookie::has('wishlist')) {
            $cookie = Cookie::get('wishlist');
            $cookieArray = explode(',', json_decode($cookie));
            $newArray = array_filter($cookieArray);
//            dd($newArray);

            $books = Book::query()->whereHas('bookCopies', function ($q) use ($newArray) {
                $q->whereIn('id', Arr::flatten($newArray));
            })->get();
        }

        return response(view('member.wishlist', ['books' => $books ?? []]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $id)
    {
        $book = Book::query()->whereHas('bookCopies', function ($q) use ($id) {
            $q->whereId($id);
        })->first();

        $cookieValue = "";
        $cookieValue .= json_decode($request->cookie('wishlist'));
        $cookieValue .= $id . ',';

        Cookie::queue('wishlist', json_encode($cookieValue), 20000);


//        dd(Cookie::get('wishlist'));

        return redirect()->route('books.index', ['id' => $book->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        $book = Book::findOrFail($id);


        $bookCopy = BookCopy::query()->where('book_id', $id)->first();

        $bookCopyId = $bookCopy->id;


        $cookie = Cookie::get('wishlist');
        $cookieArray = explode(',', json_decode($cookie));

        $newArray = array_filter($cookieArray);
        $arrayId = array_search($bookCopyId, $newArray);
//        dd($newArray,$arrayId);

        if ($arrayId !== false) {
            unset($newArray[$arrayId]);
        }

        Cookie::forget('wishlist');

        $stringArray = implode(',', $newArray);


        Cookie::queue('wishlist', json_encode($stringArray, 20000));

        return redirect()->route('wishlist.index', ['book' => $book])->withCookie(Cookie::forget('wishlist'));

    }
}
