<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use App\Notifications\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotifyController extends Controller
{
    public function index($id)
    {
//        $data = User::first();
//
//        $orderData = [
//            'greeting' => 'Hello',
//            'body' => 'We have received the books you wish to order',
//            'thanks' => 'Thank you for your order',
//            'actionText' => 'View Order',
//            'actionURL' => route('loan.show', $loan->id),
//            'order_id' => 1
//        ];

        Notification::send($data, new BookOrder($orderData));

        return view('mail.notify', 'user', $data->id);
    }
}
