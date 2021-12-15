<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use App\Models\Loan;
use App\Models\User;
use App\Notifications\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store($id)
    {
        $userId = ['user_id' => $id];
        $loan = Loan::create($userId);

        $loan->bookCopies()->sync(Arr::flatten(Session::get('loansCart')));

        $bookCopies = BookCopy::whereIn('id', Arr::flatten(Session::get('loansCart')))->get();

        foreach($bookCopies as $bookCopy) {
            $bookCopy->update(['available' => 0]);
        }

        $data = User::first();

        $orderData = [
            'name' => 'Pablo',
            'body' => 'You have placed a new order',
            'thanks' => 'Thank you ',
            'text' => 'We have received your order.',
            'order_id' => 1
        ];

        Notification::send($data, new BookOrder($orderData));

        Session::forget('loansCart');

        return redirect()->route('books.index');
    }
}
