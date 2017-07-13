@extends('layouts.app')

@section('title','Crear Película')

@section('content')
    {!! Form::open(['route'=>'movies.store', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('title','Título') !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Título de la película']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('duration','Duración (minutos)') !!}
        {!! Form::number('duration', null, ['class'=>'form-control', 'placeholder'=>'Duración de la película']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('availables','Disponibles') !!}
        {!! Form::number('availables', '1', ['class'=>'form-control', 'placeholder'=>'Cantidad disponible']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('trailer','URL del trailer') !!}
        {!! Form::text('trailer', null, ['class'=>'form-control', 'placeholder'=>'https://']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('parental_guide_id','Parental Guide') !!}
        {!! Form::select('parental_guide_id', $parental_guides, null, ['class'=>'form-control select-parental_guide']) !!}
    </div>

    {{--Para generos--}}
    <div class="form-group">
        {!! Form::label('genres_id[]','Géneros') !!}
        {!! Form::select('genres_id[]', $genres, null, ['genres_id' => 'id', 'class'=>'form-control select-genres', 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('js')
    <script>
        $(".select-genres").chosen({
            placeholder_text_multiple: 'Seleccione los géneros',
            no_results_text: 'No se encontraron géneros con el nombre'
        });

        $(".select-parental_guide").chosen({
            placeholder_text_single: 'Seleccione la clasificación',
            no_results_text: 'No se encontraron clasificaciones con el nombre'
        });

//        $('#content').trumbowyg();
    </script>
@endsection
