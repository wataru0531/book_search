<?php

// Routingを記述

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;



Route::get('/', [BooksController::class, "index"])->name("books.index");



