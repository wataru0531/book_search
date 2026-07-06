<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BooksController extends Controller {
  public function index(){
		$books = Book::all(); // 全件取得
		// dd($books);

		return view("index", [
			"books" => $books, // bladeに$booksを渡す
		]);
	}


}
