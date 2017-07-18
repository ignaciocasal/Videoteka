@extends('layouts.app')

@section('title','Alquilar película')

@section('content')

    {!! Form::open(['route'=>'rents.store', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('movie','Película') !!}
        {!! Form::text('movie', $movie->id.'. '.$movie->title,['value' => '1', 'class'=>'form-control', 'placeholder'=>'Título de la película', 'disabled' => 'true']) !!}
        <input name="movie_id"  value="{{ $movie->id }}" hidden></input> <!-- Acá se manda el id de la película -->
    </div>
    <div class="form-group">
      {!! Form::label('user_id','Usuario') !!}
      {!! Form::select('user_id', $users, null, ['class'=>'form-control select-user']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Alquilar',['class'=>'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
@section('js')
    <script>
        $(".select-user").chosen({
            placeholder_text_multiple: 'Seleccione el usuario',
            no_results_text: 'No se encontraron géneros con el nombre'
        });
    </script>
@endsection
