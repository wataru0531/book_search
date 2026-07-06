<?php

// ✅ DatabaseSeeder.php
// → Seedersのまとめ実行ファイルのこと。

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// シーダーを読み込む
use Database\Seeders\BookSeeder;
use Database\Seeders\publisherSeeder;


class DatabaseSeeder extends Seeder {
	use WithoutModelEvents;

	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		// User::factory(10)->create();

		User::factory()->create([
			'name' => 'Test User',
			'email' => 'test@example.com',
		]);

		// ✅ BookSeederとPublisherSeederをまとめて実行する
		// 順に実行するので、リレーションがある場合には注意
		$this->call([
			PublisherSeeder::class,
			BookSeeder::class,
		]);
	}
}
