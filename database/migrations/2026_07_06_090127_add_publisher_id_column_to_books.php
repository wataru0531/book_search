<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::table('books', function (Blueprint $table) {
      // ⭐️ booksテーブルにpublisher_idカラムを作成して、 publisherのidを紐づける
      $table->foreignId("publisher_id")->constrained("publishers")->after("id");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::table('books', function (Blueprint $table) {
        // 作成したpublisher_idを削除する
        $table->dropForeign(["publisher_id"]);
    });
  }
};
