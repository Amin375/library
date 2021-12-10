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
        if(Session::has('loansCart')) {
            $books = Book::query()->whereIn('id', Arr::flatten(Session::get('loansCart')))->get();
        }

        return view('member.cart', ['books' => $books ?? []]);
    }

    public function store($id)
    {
        Session::push('loansCart', $id);
        return redirect()->route('book.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $books = Book::findOrFail($id);

        $bookCopies = Arr::flatten(Session::get('loansCart'));

        $arrayId = array_search($id, $bookCopies);

        unset($bookCopies[$arrayId]);
        Session::forget('loansCart');
        Session::push('loansCart', $bookCopies);

        return redirect()->route('loans.cart', ['books' => $books]);
    }
}
