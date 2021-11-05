@extends('layout.base')

@section('pageContent')
	<section>
		<div class="container">
			<h2>Le Lunghe</h2>
			
			<ul>
			@foreach ($paste as $pasta)
			<li>
				<img src="{{$pasta["src"]}}" alt="">
				<h3>{{$pasta["titolo"]}}</h3>
				<p>{{$pasta["cottura"]}}</p>
			</li>	
			@endforeach
			</ul>

		</div>
	</section>
@endsection