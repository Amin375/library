<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Notifications\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard');
    }

    public function send() {

        $data = Auth::user();

        $orderData = [
            'name' => 'Pablo',
            'body' => 'You have placed a new order',
            'thanks' => 'Thank you ',
            'text' => 'We have received your order.',
            'order_id' => 1
        ];

        Notification::send($data, new BookOrder($orderData));
    }
}
