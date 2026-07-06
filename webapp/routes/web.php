<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index']);

Route::get('/new/{id}', [NewController::class, 'show']);
