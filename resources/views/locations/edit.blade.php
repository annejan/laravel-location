@extends('app')
 
@section('content')
    <h2>Edit Location</h2>
 
    {!! Form::model($location, ['method' => 'PATCH', 'route' => ['locations.update', $location->id]]) !!}
        @include('locations/partials/_form', ['submit_text' => 'Edit Location'])
    {!! Form::close() !!}
@endsection
