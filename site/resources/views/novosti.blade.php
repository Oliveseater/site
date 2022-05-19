@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	{!! $data->content !!}

	@foreach ($attachdata as $item)
	<div class="novosti">
		<h2>{{ $item->title }} </h2>
		<img src="images/novosti/{{$item->img}}">
		<p>
			{{ $item->content }}
			(<a href="{{ $item->guid }}" target="_blank">Подробнее...</a>)	
		</p>
	</div>
	@endforeach
@endsection