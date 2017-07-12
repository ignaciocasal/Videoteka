@extends('layouts.app')

@section('title','Editar Género')

@section('content')
    <h4>Editar - {{ $genre->name }}</h4>
    {!! Form::open(['route'=>[ 'genres.update', $genre ], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $genre->name, ['class'=>'form-control', 'placeholder'=>'Nombre del Género']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
