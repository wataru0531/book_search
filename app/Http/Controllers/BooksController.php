<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class BooksController extends Controller {
  public function index(){
		// ✅ 検索フォームから来たクエリパラメータを取得
		// http://localhost:8000/?book_name=laravel&publisher=1
		// request → HTTPリクエストを表すRequestオブジェクト
		$book_name = request()->input("book_name");
		$author = request()->input("author");
		// dd($author);

		$publisher_id = request()->input("publisher");
		// dd($publisher); // 数値。optionのvalue

		// intVal() ... 数値に変換。不正な値は０にする
		$price_min = intVal(request()->input("price_min"));
		$price_max = intVal(request()->input("price_max"));
		// dd($price_min);

		// ✅ Bookに加えて、Publisherも同時に取得する準備を整える
		// → $queryは検索の設計図のようなもの
		$query = Book::with("publisher");

		// ✅ 検索条件を付与していく。複合検索
		if($book_name) {
			// $query->where("book_name", $book_name); // 👉 完全一致
			$query->where("book_name", "like", "%$book_name%"); // 👉　部分一致(LIKE検索)
		}

		if($author) {
			// $query->where("author", "like", "%$author%");
			$query->orWhere("author", "like", "%$author%");
			// 👉 OR条件。この条件以外にも検索にひっかける
			// → 絶対条件(AND条件)にはしない
		}

		if($publisher_id) {
			$query->where("publisher_id", $publisher_id);
		}

		if($price_min) {
			$query->where("price", ">=", $price_min); // 以上。だいなり
		}
		if($price_max) {
			$query->where("price", "<=", $price_max);
		}


		
		$books = $query->get(); // 複合検索を行う

		// $books = Book::all(); // 全件取得
		// publisher_idに紐づく、publisherも取得させる
		// $books = Book::with("publisher")->get();
		// dd($books);
		// publisherのデータは、relationsに格納

		// 出版社データを取得する → index.blade.phpで使えるようにする
		$publishers = Publisher::orderBy("name_kana")->get(); // 五十音順
		// dd($publishers);
		return view("index", [
			"books" => $books, // bladeに$booksを渡す
			"publishers" => $publishers,
		]);
	}


}
