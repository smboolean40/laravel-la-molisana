<header>
	<div class="container">
		<div class="logo">
			<img src="{{asset("images/marchio-sito-test.png")}}" alt="Logo La Molisana">
		</div>
		<nav>
			<ul>
				<li class="{{Request::route()->getName() == 'homepage' ? 'active' : ''}}"><a href="{{route("homepage")}}">Home</a></li>
				<li class="{{Request::route()->getName() == 'tutti-prodotti' ? 'active' : ''}}"><a href="{{route("tutti-prodotti")}}">Prodotti</a></li>
				<li class="{{Request::route()->getName() == 'news' ? 'active' : ''}}"><a href="{{route("news")}}">News</a></li>
			</ul>
		</nav>
	</div>
</header>