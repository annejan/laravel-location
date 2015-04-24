@extends('app')
 
@section('content')
    <h2>Create Location</h2>
 
    {!! Form::model(new App\Location, ['route' => ['locations.store']]) !!}
        @include('locations/partials/_form', ['submit_text' => 'Create Location'])
    {!! Form::close() !!}
@endsection
 