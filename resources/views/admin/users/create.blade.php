@extends('layouts.app')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname','Apellido') !!}
        {!! Form::text('lastname', null, ['class'=>'form-control', 'placeholder'=>'Apellido']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dni','DNI') !!}
        {!! Form::text('dni', null, ['class'=>'form-control', 'placeholder'=>'Documento de Identidad']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail') !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electrónico']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Teléfono') !!}
        {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Número de teléfono']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type', ['member'=>'Socio','admin' =>'Administrador'], null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
