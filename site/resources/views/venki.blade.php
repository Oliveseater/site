@extends('layouts.app')
        @section('content')
            <div class="container mt-5">
                @if (isset($item))
                    <div class="row">
                        @foreach ($item as $i)  
                            <div class="col-md-4">
                                <h4>{{ $i->title }}</h4>
                                <img src="../images/products/{{ $i->img }}">								
                                <p>{!! $i->content !!}</p>
                            </div>
                        @endforeach	
                    </div>
                @endif	
            </div>
        @endsection