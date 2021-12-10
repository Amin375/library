<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    public function store($id)
    {
        $userId = ['user_id' => $id];
        Loan::create($userId);


        return redirect()->route('books.index');
    }
}
