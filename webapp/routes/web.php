<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index']);

Route::get('/new/{id}', function (int $id) {
    return view('new', ['id'=> $id]);
});
