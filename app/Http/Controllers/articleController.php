<?php

namespace App\Http\Controllers;

use App\Models\articleModel;
use Illuminate\Http\Request;

class articleController extends Controller
{
    public function index()
    {
        $articles = articleModel::all();
        return view('home', ['articles' => $articles]);
    }
}
