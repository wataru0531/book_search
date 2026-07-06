<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 * 
	 * ✅　データを作っていくだけの仕組みを作る
	 */
	public function run(): void {
		Book::create([
				"book_name" => "Laravel入門",
				"publisher_id" => 2,
				"author" => "山田 太郎",
				"publication_date" => "2022-01-15",
				"price" => 2500
		]);

		Book::create([
				"book_name" => "PHP実践ガイド",
				"publisher_id" => 5,
				"author" => "佐藤 花子",
				"publication_date" => "2021-08-10",
				"price" => 3200
		]);

		Book::create([
				"book_name" => "JavaScript完全攻略",
				"publisher_id" => 1,
				"author" => "鈴木 一郎",
				"publication_date" => "2023-03-20",
				"price" => 2980
		]);

		Book::create([
				"book_name" => "HTML&CSSデザインブック",
				"publisher_id" => 3,
				"author" => "高橋 美咲",
				"publication_date" => "2020-11-05",
				"price" => 2400
		]);

		Book::create([
				"book_name" => "モダンWeb開発入門",
				"publisher_id" => 4,
				"author" => "田中 健",
				"publication_date" => "2024-01-12",
				"price" => 3500
		]);

		Book::create([
				"book_name" => "データベース設計の基本",
				"publisher_id" => 2,
				"author" => "中村 恒一",
				"publication_date" => "2019-06-30",
				"price" => 2800
		]);

		Book::create([
				"book_name" => "Dockerスタートブック",
				"publisher_id" => 5,
				"author" => "伊藤 翔",
				"publication_date" => "2022-09-18",
				"price" => 3100
		]);

		Book::create([
				"book_name" => "Git & GitHub入門",
				"publisher_id" => 1,
				"author" => "渡辺 亮",
				"publication_date" => "2023-05-14",
				"price" => 2200
		]);

		Book::create([
				"book_name" => "React実践開発",
				"publisher_id" => 4,
				"author" => "小林 真由",
				"publication_date" => "2024-04-08",
				"price" => 3800
		]);

		Book::create([
				"book_name" => "アルゴリズムとデータ構造",
				"publisher_id" => 3,
				"author" => "加藤 誠",
				"publication_date" => "2021-12-01",
				"price" => 3300
		]);

		Book::create([
				"book_name" => "Pythonプログラミング入門",
				"publisher_id" => 2,
				"author" => "松本 恒一",
				"publication_date" => "2020-02-14",
				"price" => 2800
		]);

		Book::create([
				"book_name" => "Linuxコマンド基礎",
				"publisher_id" => 5,
				"author" => "井上 美咲",
				"publication_date" => "2019-09-01",
				"price" => 2100
		]);

		Book::create([
				"book_name" => "Webセキュリティ実践",
				"publisher_id" => 1,
				"author" => "木村 健太",
				"publication_date" => "2023-07-18",
				"price" => 3600
		]);

		Book::create([
				"book_name" => "ネットワークのしくみ",
				"publisher_id" => 4,
				"author" => "清水 恒一",
				"publication_date" => "2021-05-11",
				"price" => 2900
		]);

		Book::create([
				"book_name" => "はじめてのTypeScript",
				"publisher_id" => 3,
				"author" => "石川 翼",
				"publication_date" => "2024-02-22",
				"price" => 3100
		]);

		Book::create([
				"book_name" => "Vue.jsアプリ開発",
				"publisher_id" => 2,
				"author" => "斎藤 彩",
				"publication_date" => "2022-10-03",
				"price" => 3400
		]);

		Book::create([
				"book_name" => "Next.js実践ガイド",
				"publisher_id" => 5,
				"author" => "中島 大輔",
				"publication_date" => "2024-05-10",
				"price" => 3900
		]);

		Book::create([
				"book_name" => "Node.jsサーバー構築",
				"publisher_id" => 1,
				"author" => "岡田 恒一",
				"publication_date" => "2021-11-25",
				"price" => 3300
		]);

		Book::create([
				"book_name" => "SQLマスター",
				"publisher_id" => 4,
				"author" => "西村 真理",
				"publication_date" => "2020-06-08",
				"price" => 2600
		]);

		Book::create([
				"book_name" => "オブジェクト指向設計",
				"publisher_id" => 3,
				"author" => "藤井 恒一",
				"publication_date" => "2023-09-09",
				"price" => 3700
		]);

		Book::create([
				"book_name" => "クラウド入門",
				"publisher_id" => 2,
				"author" => "橋本 翔太",
				"publication_date" => "2022-03-28",
				"price" => 3200
		]);

		Book::create([
				"book_name" => "AWS実践テクニック",
				"publisher_id" => 5,
				"author" => "森田 優",
				"publication_date" => "2024-01-16",
				"price" => 4200
		]);

		Book::create([
				"book_name" => "AI・機械学習の基礎",
				"publisher_id" => 1,
				"author" => "吉田 光",
				"publication_date" => "2023-04-19",
				"price" => 3800
		]);

		Book::create([
				"book_name" => "Pythonで学ぶデータ分析",
				"publisher_id" => 4,
				"author" => "小川 愛",
				"publication_date" => "2021-07-30",
				"price" => 3500
		]);

		Book::create([
				"book_name" => "Webデザイン入門",
				"publisher_id" => 3,
				"author" => "山口 真由",
				"publication_date" => "2019-12-15",
				"price" => 2300
		]);

		Book::create([
				"book_name" => "Figmaデザイン実践",
				"publisher_id" => 2,
				"author" => "福田 悠",
				"publication_date" => "2023-08-04",
				"price" => 3000
		]);

		Book::create([
				"book_name" => "REST API設計",
				"publisher_id" => 5,
				"author" => "阿部 恒一",
				"publication_date" => "2022-12-12",
				"price" => 3400
		]);

		Book::create([
				"book_name" => "Laravel実践プロジェクト",
				"publisher_id" => 1,
				"author" => "坂本 恒一",
				"publication_date" => "2024-06-01",
				"price" => 4100
		]);

		Book::create([
				"book_name" => "Tailwind CSSデザイン",
				"publisher_id" => 4,
				"author" => "池田 美香",
				"publication_date" => "2023-02-26",
				"price" => 2700
		]);

		Book::create([
				"book_name" => "プログラミング思考入門",
				"publisher_id" => 3,
				"author" => "遠藤 恒一",
				"publication_date" => "2020-10-20",
				"price" => 2500
		]);
	}
}
