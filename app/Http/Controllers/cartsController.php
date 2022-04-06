<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartsController extends Controller
{
    public function index()
    {
        $cart_content = [];
        $cart = carts::where('user_id', Auth::user()->id)->get();
        foreach ($cart as $item) {
            $article = articlesController::getSingle($item->article_id);
            array_push($cart_content , $article);
        }
        return view('dashboard.cart', ['cart_content' => $cart_content]);
    }
}
