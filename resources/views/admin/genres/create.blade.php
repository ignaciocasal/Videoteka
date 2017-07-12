@extends('layouts.app')

@section('title','Crear Género')

@section('content')
    {!! Form::open(['route'=>'genres.store', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre del Género']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
