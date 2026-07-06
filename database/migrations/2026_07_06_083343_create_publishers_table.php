<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('publishers', function (Blueprint $table) {
			$table->id();
			$table->string("name"); // 出版社名
			$table->string("name_kana"); // 読み仮名 → 並べるため
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('publishers');
	}
};
