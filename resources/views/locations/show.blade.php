@extends('app')
 
@section('content')
    <h2>
        {{ $location->name }}
    </h2>
    <h3>
    	{{ $location->city }}
    </h3>
    <img src="{{ $location->image }}" alt="{{ $location->name }}" />
@endsection
