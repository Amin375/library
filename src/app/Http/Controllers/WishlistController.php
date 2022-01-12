<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCopy;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        Cookie::forget('wishlist');
//        dd(Cookie::get('wishlist'));
        if (Cookie::has('wishlist')) {
            $cookie = Cookie::get('wishlist');
            $cookieArray = explode(',', json_decode($cookie));
            $newArray = array_filter($cookieArray);

            $books = Book::query()->whereHas('bookCopies', function ($q) use ($newArray) {
                $q->whereIn('id', Arr::flatten($newArray));
            })->get();
        }
////        dd(Cookie::get('wishlist'));

        return response(view('member.wishlist', ['books' => $books ?? []]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $id, $slug)
    {
//        dd(Cookie::get('wishlist'));
//        $cookieValue = "";
//        $cookieValue .= json_decode($request->cookie('wishlist'));
//        $cookieValue .= $id . ',';
//
//        Cookie::queue('wishlist', json_encode($cookieValue), 20000);
//dd(json_decode($request->cookie('wishlist')));
        $cookieArray = explode(',', json_decode($request->cookie('wishlist')));
        $index = array_search($id, $cookieArray);
//        dd($index);
        if ($index !== false) {
            array_splice($cookieArray, $index, 1);
        } else {
            $cookieValue = "";
            $cookieValue .= json_decode($request->cookie('wishlist'));
            $cookieValue .= $id . ',';

            Cookie::queue('wishlist', json_encode($cookieValue), 20000);
        }

        $book = Book::query()->whereHas('bookCopies', function ($q) use ($id) {
            $q->whereId($id);
        })->whereSlug($slug)->first();

        $slug = $book->slug;


        Session::flash('successWishlist', ' has been added to your Wishlist!');


        return redirect()->route('book.show', ['book' => $book, 'slug' => $slug]);
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
//        $bookCopy = BookCopy::query()->where('book_id', $id)->first();
        $bookCopyId = $book->firstAvailableBookCopyId();;
//        dd($bookCopyId);

        $cookie = Cookie::get('wishlist');
        $cookieArray = explode(',', json_decode($cookie));

        $newArray = array_filter($cookieArray);
        $arrayId = array_search($bookCopyId, $newArray);

        if ($arrayId !== false) {
            unset($newArray[$arrayId]);
        }
        Cookie::forget('wishlist');

        $stringArray = implode(',', $newArray);

        Cookie::queue('wishlist', json_encode($stringArray, 20000));

        return redirect()->route('wishlist.index', ['book' => $book ?? []])->withCookie(Cookie::forget('wishlist'));
    }
}
