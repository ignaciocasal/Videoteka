@extends('layouts.app')

@section('title','Editar Película')

@section('content')
    {!! Form::open(['route'=>[ 'movies.update', $movie ], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('title','Título') !!}
        {!! Form::text('title', $movie->title, ['class'=>'form-control', 'placeholder'=>'Título de la película']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('duration','Duración (minutos)') !!}
        {!! Form::number('duration', $movie->duration, ['class'=>'form-control', 'placeholder'=>'Duración de la película']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('availables','Disponibles') !!}
        {!! Form::number('availables', $movie->availables, ['class'=>'form-control', 'placeholder'=>'Cantidad disponible']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('trailer','URL del trailer') !!}
        {!! Form::text('trailer', $movie->trailer, ['class'=>'form-control', 'placeholder'=>'https://']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('parental_guide_id','Parental Guide') !!}
        {!! Form::select('parental_guide_id', $parental_guides, $movie->parental_guide->id, ['class'=>'form-control select-parental_guide']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('genres_id[]','Géneros') !!}
        {!! Form::select('genres_id[]', $genres, $my_genres, ['genres_id' => 'id', 'class'=>'form-control select-genres', 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".select-genres").chosen({
            placeholder_text_multiple: 'Seleccione los tags',
            no_results_text: 'No se encontraron tags con el nombre'
        });

        $(".select-category").chosen({
            placeholder_text_single: 'Seleccione la categoria',
            no_results_text: 'No se encontraron categorias con el nombre'
        });

//        $('#content').trumbowyg();
    </script>
@endsection
