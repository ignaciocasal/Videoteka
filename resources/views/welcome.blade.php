<!DOCTYPE html>
@extends('admin.templates.main')
@section('title')
  Inicio de mi pagina
@endsection

@section('content')
  <p>Página</p>
  <div class="btn btn-success">
    Boton de bootstrap
  </div>
@endsection


{!! Form::open(['url' => 'foo/bar']) !!}
    //
{!! Form::close() !!}
