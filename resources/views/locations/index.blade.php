@extends('app')
 
@section('content')
    <h2>Locations</h2>
 
    @if ( !$locations->count() )
        No locations found
    @else
        <ul>
            @foreach( $locations as $location )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('locations.destroy', $location->id))) !!}
                        <a href="/locations/{{$location->id }}">{{ $location->name }}</a>
                        (
                            {!! link_to_route('locations.edit', 'Edit', array($location->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    
     <p>
        {!! link_to_route('locations.create', 'Add Location') !!}
    </p>
@endsection
