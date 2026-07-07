<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BooksController extends Controller {
  public function index(){
		// ✅ 検索フォームから来たクエリパラメータを取得
		// http://localhost:8000/?book_name=laravel&publisher=1
		$book_name = request()->input("book_name");
		$author = request()->input("author");
		// dd($author);

		// ✅ Bookに加えて、Publisherも同時に取得する準備を整える
		// → $queryは検索の設計図のようなもの
		$query = Book::with("publisher");

		// ✅ 検索した$book_nameと一致するbookのみ取得
		// ⭐️TODO ひらがな、大文字小文字も許容
		if($book_name) {
			// $query->where("book_name", $book_name); // 👉 完全一致
			$query->where("book_name", "like", "%$book_name%"); // 👉　部分一致(LIKE検索)
		}

		if($author) {
			$query->where("author", "like", "%$author%");
		}
		
		$books = $query->get(); 

		// $books = Book::all(); // 全件取得
		// publisher_idに紐づく、publisherも取得させる
		// $books = Book::with("publisher")->get();
		// dd($books);
		// publisherのデータは、relationsに格納

		return view("index", [
			"books" => $books, // bladeに$booksを渡す
		]);
	}


}
