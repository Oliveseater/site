@extends('layouts.app')

	
@section('content')
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}
@endsection
