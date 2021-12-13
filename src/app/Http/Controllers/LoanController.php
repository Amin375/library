<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    public function store($id)
    {
        $userId = ['user_id' => $id];
        $loan = Loan::create($userId);

        $loan->bookCopies()->sync(Arr::flatten(Session::get('loansCart')));

        $bookCopies = BookCopy::whereIn('id', Arr::flatten(Session::get('loansCart')))->get();

        foreach($bookCopies as $bookCopy) {
            $bookCopy->update(['available' => 0]);
        }

        Session::forget('loansCart');

        return redirect()->route('books.index');
    }
}
