<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewController extends Controller
{
    public function show(int $id)
    {
        $news = News::findOrFail($id);

        return view('new', compact('news'));
    }
}
