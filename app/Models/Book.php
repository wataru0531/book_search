<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Publisher;

class Book extends Model {

	// ✅ ① この4つのカラムに更新の許可とる
	//		② 一括で作成/更新の許可を出す。create()、update()、fill()
  protected $fillable = [
		"book_name",
		"publisher_id",
		"author",
		"publication_date",
		"price",
	];

	// ✅ Booksテーブルは、Publisherテーブルの子テーブル
	public function publisher (){
		return $this->belongsTo(Publisher::class);
	}

}
