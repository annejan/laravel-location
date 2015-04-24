@extends('app')
 
@section('content')
    <h2>Locations</h2>
 
    @if ( !$locations->count() )
        No locations found
    @else
        <ul>
            @foreach( $locations as $location )
                <li><a href="/locations/{{$location->id }}">{{ $location->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
