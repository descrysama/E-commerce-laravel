<?php

namespace App\Http\Controllers;

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
}
