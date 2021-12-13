<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    public function store($id)
    {
        $userId = ['user_id' => $id];
        $loan = Loan::create($userId);

        $loan->bookCopies()->sync(Session::get('loansCart'));

        return redirect()->route('books.index');
    }
}
