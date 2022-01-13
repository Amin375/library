<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

//        $loans = Loan::with(['bookCopies'])->get();
        $loans = $user->loans;

        if (Cookie::has('wishlist')) {
            $cookie = Cookie::get('wishlist');
            $cookieArray = explode(',', json_decode($cookie));
            $newArray = array_filter($cookieArray);

            $cookieBooks = Book::query()->whereHas('bookCopies', function ($q) use ($newArray) {
                $q->whereIn('id', Arr::flatten($newArray));
            })->get();
        }

        if (Session::has('loansCart')) {
            $sessionBooks = Book::query()->whereHas('bookCopies', function ($q) {
                $q->whereIn('id', Arr::flatten(Session::get('loansCart')));
            })->get();
        }

        return view('member.dashboard.index', [
            'loans' => $loans,
            'cookieBooks' => $cookieBooks ?? [],
            'sessionBooks' => $sessionBooks ?? [],
        ]);
    }

    public function edit(User $user)
    {
        return view('member.dashboard.account', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {

//        dd(request()->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable',
            'street' => 'required',
            'house_number' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'street' => $validatedData['street'],
            'house_number' => $validatedData['house_number'],
            'postal_code' => $validatedData['postal_code'],
            'city' => $validatedData['city'],
            'country' => $validatedData['country'],
            'phone' => $validatedData['phone'],

            'password' => !empty($validatedData['password'])
                ? Hash::make($validatedData['password'])
                : $user->password,
        ]);

        $slug = $user->slug;

        Session::flash('successUpdateAccount', 'Your account settings have been updated!');

        return redirect()->route('dashboard', ['slug' => $slug]);
    }
}
