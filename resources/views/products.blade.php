@extends('layout.base')

@section('pageContent')
	<section>
		<div class="container">
			<h2>Le Lunghe</h2>
			
			<ul>
			@foreach ($paste as $pasta)
			<li>
				<img src="{{$pasta["thumb_img"]}}" alt="{{$pasta["title"]}}">
				<a href="{{route("singolo-prodotto", ["id" => $pasta['id']])}}"><h3>{{$pasta->title}}</h3></a>
				<p>{{$pasta["cooking_time"]}}</p>
			</li>	
			@endforeach
			</ul>

		</div>
	</section>
@endsection