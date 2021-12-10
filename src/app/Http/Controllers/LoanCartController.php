<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class LoanCartController extends Controller
{
    public function index()
    {
        if(Session::has('loansCart')) {
            $books = Loan::query()->whereIn('id', Arr::flatten(Session::get('loansCart')))->get();
        }

        return view('loan.cart', ['books' => $books ?? []]);
    }

    public function store($id)
    {
        Session::push('loansCart', $id);

        return redirect()->route('book.show', ['id' => $id]);
    }
}
