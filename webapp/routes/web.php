<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/new/{id}', function (int $id) {
    return view('new', ['id'=> $id]);
});