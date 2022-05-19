@extends('layouts.app')
    @section('content')

            <h1>{{ $data->title }}</h1>
            
            <div class="forNewPages">{!! $data->content !!}</div>
            
            @if(!empty($data->img))
                <img src="../images/newPage/{{ $data->img }}">
            @endif

            @if(isset($attachdata))
                @foreach ($attachdata as $item)
                    <h4>{{ $item->title }}</h4>							
                    <p>{!! $item->content !!}</p>
                    
		        @endforeach	     
            @endif	
    @endsection