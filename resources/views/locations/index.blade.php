@extends('app')
 
@section('content')
    <h2>Locations</h2>
 
    @if ( !$locations->count() )
        No locations found
    @else
        <ul>
            @foreach( $locations as $location )
                <li><a href="{{ route('locations.show', $location->slug) }}">{{ $location->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection