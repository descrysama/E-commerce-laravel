<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\articles;
use Illuminate\Http\Request;

class articlesController extends Controller
{
    public function index()
    {
        $articles = articles::all();
        return view('home', ['articles' => $articles]);
    }

    public static function getSingle($id)
    {
        $article = articles::find($id);
        return $article;
    }

    public function show($id)
    {
        $tab = articles::all()->random(3);
        $article = articles::find($id);
        return view('article',['article' => $article, 'tab' => $tab]);
    }

    public function add(Request $request)
    {
        $cart=new carts([
            'user_id' => $request -> user_id ,
            'article_id'=> $request -> article_id
        ]);
        $cart->save();
        return redirect('/');
    }

}
