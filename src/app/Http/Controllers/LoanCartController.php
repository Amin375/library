<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCopy;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class LoanCartController extends Controller
{
    public function index()
    {

//        dd(Session::get('loansCart'));

//        Session::forget('loansCart');
        if (Session::has('loansCart')) {
            $books = Book::query()->whereHas('bookCopies', function ($q) {
                $q->whereIn('id', array_filter(array_unique(Arr::flatten(Session::get('loansCart')), SORT_REGULAR)));
            })->get();
//            array_filter($books);
        }

//        dd(array_filter($books));
//        dd(Session::forget('loansCart'));
//        dd(array_filter(array_unique(Arr::flatten(Session::get('loansCart')))));

        return view('member.cart', ['books' => $books ?? []]);
    }

    public function store($id, $slug)
    {
//        $book = Book::findOrFail($id);

        $index = array_search($id, $selection = Session::get('loansCart', []));

        if ($index !== false) {
            array_splice($selection, $index, 1);
            Session::flash('doubleCartStore', ' is already in your Cart!');

        } else {
            $selection[] = $id;
            Session::push('loansCart', $id);
            Session::flash('success', ' has been added to your Cart!');

        }

        $book = Book::query()->whereHas('bookCopies', function ($q) use ($id) {
            $q->whereId($id);
        })->whereSlug($slug)->first();

//        $book = Book::query()->whereSlug($slug)->first();
        $slug = $book->slug;

//        Session::flash('success', ' has been added to your Cart!');


        return redirect()->route('book.show', ['book' => $book, 'slug' => $slug]);
    }

    public function destroy($id)
    {
        $books = Book::findOrFail($id);
        $bookCopy = BookCopy::query()->where('book_id', $id)->first();
        $bookCopyId = $bookCopy->id;

        $bookCopies = Arr::flatten(Session::get('loansCart'));

        $arrayId = array_search($bookCopyId, $bookCopies);

        unset($bookCopies[$arrayId]);

        if(empty($bookCopies))
        {
            Session::forget('loansCart');
        }
        else
        {
            Session::forget('loansCart');
            Session::push('loansCart', array_filter($bookCopies));
        }



        return redirect()->route('loans.cart');
    }
}
