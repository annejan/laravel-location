<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city') !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Image (url):') !!}
    {!! Form::text('image') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
