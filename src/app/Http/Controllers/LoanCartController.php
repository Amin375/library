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


        if (Session::has('loansCart')) {
            $books = Book::query()->whereHas('bookCopies', function ($q) {
                $q->whereIn('id', array_unique(Arr::flatten(Session::get('loansCart')), SORT_REGULAR));
            })->get();
        }
//        Session::forget('loansCart');
//        dd(Session::get('loansCart'));

        return view('member.cart', ['books' => $books ?? []]);
    }

    public function store($id)
    {
        $index = array_search($id, $selection = Session::get('loansCart', []));

        if ($index !== false)
        {
            array_splice($selection, $index, 1);
        }
        else
        {
            $selection[] = $id;
            Session::push('loansCart', $id);
        }


        $book = Book::query()->whereHas('bookCopies', function ($q) use ($id) {
            $q->whereId($id);
        })->first();


        return redirect()->route('book.show', ['id' => $book->id]);
    }

    public function destroy($id)
    {
        $books = Book::findOrFail($id);

        $bookCopies = Arr::flatten(Session::get('loansCart'));


        $arrayId = array_search($id, $bookCopies);

        unset($bookCopies[$arrayId]);


        Session::forget('loansCart');
        Session::push('loansCart',  array_filter($bookCopies));

        return redirect()->route('loans.cart', ['books' => $books ?? []]);
    }
}
