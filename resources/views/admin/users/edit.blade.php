@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <h4>Editar - {{ $user->name }}</h4>
    {!! Form::open(['route'=>[ 'users.update', $user ], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname','Apellido') !!}
        {!! Form::text('lastname', $user->lastname, ['class'=>'form-control', 'placeholder'=>'Apellido']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dni','DNI') !!}
        {!! Form::text('dni', $user->dni, ['class'=>'form-control', 'placeholder'=>'Documento de Identidad']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail') !!}
        {!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Correo Electrónico']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Teléfono') !!}
        {!! Form::text('phone', $user->phone, ['class'=>'form-control', 'placeholder'=>'Número de teléfono']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type', ['member'=>'Socio','admin' =>'Administrador'], $user->type, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
