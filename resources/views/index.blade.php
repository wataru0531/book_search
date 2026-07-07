<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>書籍検索</title>
	<script src="https://cdn.tailwindcss.com"></script>
	
	@vite(["resources/css/app.css", "resources/js/app.js"])
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
	<style>
		body {
				font-family: 'Noto Sans JP', sans-serif;
				-webkit-font-smoothing: antialiased;
				background-color: #fcfcfc;
		}

		/* アニメーション */
		@keyframes slideUp {
				0% {
						opacity: 0;
						transform: translateY(20px);
				}

				100% {
						opacity: 1;
						transform: translateY(0);
				}
		}

		.animate-slide-up {
				animation: slideUp 0.4s ease-out forwards;
		}
	</style>
</head>

<body class="text-gray-800 min-h-screen p-4 selection:bg-gray-200">

	<!-- Main Container -->
	<main class="w-full max-w-6xl mx-auto animate-slide-up pb-20">
		<!-- Header Area -->
		<header class="mb-8 px-2">
				<div>
						<p class="text-xs font-bold tracking-widest text-gray-400 uppercase mb-1">BOOK SEARCH</p>
						<h1 class="text-3xl font-light tracking-tight text-[#1a1a1a]">書籍検索</h1>
				</div>
		</header>

		<!-- 検索フォーム -->
		<!-- 
			action → どのURLにデータを送るか。
		-->
		<div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-6 mb-6">
			<form 
				action="{{ route('books.index') }}"
				method="GET"
				class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"
			>
				<!-- ✅　書籍タイトル -->
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">
						<i class="fa-solid fa-book mr-2"></i>タイトル
					</label>
					<input 
						type="text" 
						placeholder="書籍タイトルを入力" 
						class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all"
						name="book_name"
						value="{{ request()->input('book_name') }}"
					>
				</div>
				<!-- ✅ 著者検索 -->
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">
						<i class="fa-solid fa-user mr-2"></i>著者
					</label>
					<!--
						request()->input('author') ... リクエストのデータを取得
						👉 request('author')と省略できる
					-->
					<input 
						type="text" 
						placeholder="著者名を入力" 
						class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all"
						name="author"
						value="{{ request('author') }}"
					>
				</div>
				<!-- ✅ 出版社検索 -->
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">
						<i class="fa-solid fa-building mr-2"></i>出版社
					</label>
					<div class="relative">
						<select 
							name="publisher" 
							class="w-full px-4 py-2 pr-10 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all bg-white text-gray-800 appearance-none cursor-pointer"
						>
							<option value="">すべて</option>
							@foreach($publishers as $publisher)
							<option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
							@endforeach
						</select>
						<!-- 矢印アイコン（SVG） -->
						<span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
							<svg width="16" height="16" fill="none" viewBox="0 0 16 16">
								<path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</span>
					</div>
				</div>

				<!-- 金額検索 -->
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">
						<i class="fa-solid fa-yen-sign mr-2"></i>金額
					</label>
					<div class="flex gap-2">
						<input type="number" placeholder="最小金額" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all">
						<span class="self-center text-gray-400">〜</span>
						<input type="number" placeholder="最大金額" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all">
					</div>
				</div>

				<!-- 出版日検索 -->
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">
						<i class="fa-solid fa-calendar mr-2"></i>出版日
					</label>
					<div class="flex gap-2">
						<input type="date" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all">
						<span class="self-center text-gray-400">〜</span>
						<input type="date" class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#1a1a1a] focus:border-transparent transition-all">
					</div>
				</div>

				<!-- 検索ボタン -->
				<div class="flex items-end">
					<button type="submit" class="w-full bg-[#1a1a1a] text-white px-6 py-2 rounded-lg hover:bg-black transition-all duration-200 font-medium flex items-center justify-center gap-2">
						<i class="fa-solid fa-magnifying-glass"></i>
						検索
					</button>
				</div>
			</form>
		</div>

		<!-- Book List -->
		<div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden">
			<div class="p-4 border-b border-gray-100">
				<p class="text-sm font-medium text-gray-500">検索結果: <span class="text-[#1a1a1a]">5件</span></p>
			</div>

			<ul class="divide-y divide-gray-50">
				@foreach($books as $book)
					<!-- Book 1 -->
					<li class="book-item group flex items-center gap-4 p-4 hover:bg-gray-50 transition-colors duration-200">
						<!-- Book Cover -->
						<div class="flex-shrink-0">
							<div class="w-16 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg shadow-md"></div>
						</div>
						<!-- Book Info -->
						<div class="flex-1 min-w-0">
							<h3 class="text-lg font-medium text-gray-800 mb-1.5 group-hover:text-[#3b82f6] transition-colors">
								{{ $book->book_name }}
							</h3>
							<div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-sm text-gray-600">
								<div class="flex items-center gap-1.5">
									<i class="fa-solid fa-user w-3.5 text-gray-400"></i>
									<span>{{ $book->author }}</span>
								</div>
								<div class="flex items-center gap-1.5">
									<i class="fa-solid fa-building w-3.5 text-gray-400"></i>
									<!-- 
										出版社データ
										リレーションを貼ったPublisherからデータを取得
									-->
									<span>{{ $book->publisher->name }}</span>
								</div>
								<div class="flex items-center gap-1.5">
									<i class="fa-solid fa-yen-sign w-3.5 text-gray-400"></i>
									<span class="font-medium text-gray-800">¥{{ number_format($book->price) }}</span>
								</div>
								<div class="flex items-center gap-1.5">
									<i class="fa-solid fa-calendar w-3.5 text-gray-400"></i>
									<span>{{ date("Y年n月j日", strtotime($book->publication_date)) }}</span>
								</div>
							</div>
						</div>
					</li>
				@endforeach
			</ul>
		</div>

	</main>

</body>

</html>