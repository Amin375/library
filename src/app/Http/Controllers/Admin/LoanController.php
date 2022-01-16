<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();

        return view('admin.loans.index', ['loans' => $loans]);
    }

    public function update(Loan $loan)
    {
        $loan->update(['handed_in' => 1]);
        $loan->destroy(['handed_in' => 0]);

        return redirect()->route('admin.loans.index', ['loans' => Loan::all()]);
    }
}
