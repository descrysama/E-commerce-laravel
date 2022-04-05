<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        $cart = [];
        return view('dashboard.cart', compact('cart'));
    }
}
