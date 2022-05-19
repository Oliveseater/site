<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>ПАМЯТЬ</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<header>
			<div>
				<h1>ПАМЯТЬ</h1>
				<h2>похоронное бюро</h2>
			</div>
			<!--блок навигации, одинаковый для все страниц сайта-->
			<nav>
					<ul class="menu">
						<li><a href="/">ГЛАВНАЯ</a></li>
						<li><a href="/novosti">НОВОСТИ</a>

						<li><a href="/service">УСЛУГИ</a>
							<ul class="submenu">
								<li><a href="/service/start-service">ПОХОРОНЫ</a></li>
								<li><a href="/service/bag-service">ГРУЗ</a></li>
								<li><a href="/service/vip-service">ПОХОРОНЫ VIP</a></li>
							</ul>
						</li>  

						<li><a href="/products">ТОВАРЫ</a></li>
						<li><a href="/blog">БЛОГ</a></li>
						<li><a href="/console">КОНСОЛЬ</a></li>

						<li><a href="/newPage">!</a></li>

					</ul>
				</nav>
		</header>

		<!--блок содержит раздел навигации и контент страницы-->	
		<div class="wrapper">			
			<div class="content"> 
				<div class="rowMain">

					@yield('content')

				</div>
			</div>			
		</div>
		
		<footer><!--подвал сайта-->
			<div>
				<p>2022 - Похоронное бюро "Память"</p>
			</div>
		</footer>

	</body>
</html>