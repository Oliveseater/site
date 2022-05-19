@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
	
	@if (isset($attachdata))
		@foreach ($attachdata as $item)
		<div class="servicesDiv">
			<h2>{{ $item->title }}</h2>
			<img src="../images/dead/{{ $item->img }}">								
			<p>{!! $item->content !!}</p>
		</div>
		@endforeach	
	@endif	

	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
		<img src="../images/dead/iwantdead1.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		<img src="../images/dead/iwantdead2.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		<img src="../images/dead/iwantdead3.jpg" class="d-block w-100" alt="...">
		</div>
	</div>

	</div>

@endsection