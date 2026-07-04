<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BooksController extends Controller {
  public function index(){
		$book = Book::all(); // 全件取得
		dd($book);
	}


}
