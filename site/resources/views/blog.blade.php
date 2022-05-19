@extends('layouts.app')
<ul class="menu">
	@if (isset($test))
		@foreach ($test as $item)
			<li><a href="{{ $item->name }}">{{ $item->title }}</a></li>
			<ul class="submenu">
				@foreach ($item as $i)
					<li><a href="{{ $item->name }}">{{ $item->title }}</a></li>
				@endforeach
			</ul>
		@endforeach	
	@endif	
</ul>
@section('content')


	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
	
	@foreach ($attachdata as $item)

		<div class="mainDiv">
			<div class="leftDiv">
				<h2>{{ $item->title }} </h2>
				<p>{{ $item->content }}</p>
				<a href="{{ $item->guid }}" target="_blank">Подробнее: {{ $item->title }}</a>
			</div>
			<div class="rightDiv">
				<img src="images/blog/{{$item->img}}">
			</div>
		</div>

	@endforeach	

@endsection