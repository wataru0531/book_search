<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Publisher;

class publisherSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		Publisher::create([
				"name" => "A出版社",
				"name_kana" => "エーシュッパン"
		]);

		Publisher::create([
				"name" => "B出版社",
				"name_kana" => "ビーシュッパン"
		]);

		Publisher::create([
				"name" => "C出版社",
				"name_kana" => "シーシュッパン"
		]);

		Publisher::create([
				"name" => "D出版社",
				"name_kana" => "ディーシュッパン"
		]);

		Publisher::create([
				"name" => "E出版社",
				"name_kana" => "イーシュッパン"
		]);

	}
}

