<?php

namespace App\Http\Controllers;

use App\Models\BookCopy;
use App\Models\Loan;
use App\Models\User;
use App\Notifications\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
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

        $user = User::findOrFail($id);

        $orderData = [
            'greeting' => 'Hello',
            'body' => 'We have received the books you wish to order',
            'thanks' => 'Thank you for your order',
            'actionText' => 'View Order',
            'actionURL' => route('loans.show', $loan->id),
            'order_id' => 1
        ];

        Notification::send($user, new BookOrder($orderData));

        Session::forget('loansCart');

        return redirect()->route('books.index');
    }

    public function show($id)
    {
        $loan = Loan::with('bookCopies.book')->whereId($id)->first();

        return view('mail.notify', ['loan' => $loan]);
    }
}
