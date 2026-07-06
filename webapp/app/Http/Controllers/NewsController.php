<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::orderByDesc('id')->get();
        $page = $request->integer('page', 0);

        return view('index', compact('news', 'page'));
    }
}
