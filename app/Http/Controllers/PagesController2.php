<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
      public function home()

    {
        return view('welcome', [
        ]);
    }

    public function about()
    {
        return view('about', [
        ]);
    }

    public function shop()

    {
        return view('shop', [
        ]);
    }

    public function cart()

    {
        return view('cart', [
        ]);
    }

    public function checkout()

    {
        return view('checkout', [
        ]);

    }

    public function contact()

    {
        return view('contact', [
        ]);

    }
}