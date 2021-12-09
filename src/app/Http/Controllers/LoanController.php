<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function store($id)
    {
        $loan = ['user_id' => $id];
        Loan::create($loan);


        return redirect()->route('books.index');
    }
}
