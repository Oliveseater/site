@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>

    <div class="products">
        @if (isset($attachdata))
            @foreach ($attachdata as $item)  
                <a href="{{ $item->guid }}">{{ $item->title }}</a>
            @endforeach	 
        @endif	
    </div>

@endsection