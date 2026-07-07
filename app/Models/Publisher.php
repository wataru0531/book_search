<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model {
  protected $fillable = [
		"name",
		"name_kana",
	];

	// ✅ Bookテーブルとリレーションの関係をとる
	public function books(){
		// hasMany() → Booksから見るとPublisherは1つに定まる → Bookは1つのPublisherに定まる
		//             Publisherから見ると、Booksに複数紐づいている 
		//             👉 1つの出版社から何冊もの本が出版されているということ
		//                Publisherは、複数のBookを持つ
		// 1対多 の関係にある
		return $this->hasMany(Book::class);
	}



}
