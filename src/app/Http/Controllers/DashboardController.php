<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

class DashboardController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['bookCopies'])->get();
        if (Cookie::has('wishlist')) {
            $cookie = Cookie::get('wishlist');
            $cookieArray = explode(',', json_decode($cookie));
            $newArray = array_filter($cookieArray);

            $booksCookies = Book::query()->whereHas('bookCopies', function ($q) use ($newArray) {
                $q->whereIn('id', Arr::flatten($newArray));
            })->get();
        }

        return view('dashboard', ['loans' => $loans, 'booksCookies' => $booksCookies]);
    }
}
