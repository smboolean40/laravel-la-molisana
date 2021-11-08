@extends('layout.base')

@section('pageContent')
	<section>
		<div class="container">
			<h1>{{$pasta['title']}}</h1>
			<p>{!!$pasta['description']!!}</p>
		</div>
	</section>
@endsection