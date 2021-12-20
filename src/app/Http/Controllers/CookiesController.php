<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookiesController extends Controller
{
    public function setCookie(Request $request)
    {
        $minutes = 10;
        $response = new Response('Wishlist');
        $response->withCookie(cookie('id', ))
    }
}
