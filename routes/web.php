<?php

// Routingを記述

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;


// ✅ 全件取得
Route::get('/', [BooksController::class, "index"])->name("books.index");



