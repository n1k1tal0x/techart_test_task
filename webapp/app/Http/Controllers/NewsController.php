<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderByDesc('id')->get();

        return view('index', compact('news'));
    }
}
