@extends('layouts.app')

@section('title','Películas')

@section('content')
    <div class="row">
        <div class="col-lg-8 ">
            <a href="{{ route('movies.create') }}" class="btn btn-success">Nueva Película</a>
        </div>

        <div class="col-lg-4">
            {!!   Form::open(['route' => 'movies.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
            <div class="form-group">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar películas..']) !!}
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
            {!! Form::close() !!}
        </div><!-- /.col-lg-3 -->
    </div><!-- /.row -->

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Duración (min)</th>
            <th>Disponibles</th>
            <th>Parental Guide</th>
            <th>Poster</th>
            <th>Trailer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->id }}</td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->duration}}</td>
                <td>{{ $movie->availables}}</td>
                <td>{{ $movie->parental_guide->name }}</td>
                <td>
                    @if(is_null($movie->poster))
                        <span class="label label-danger">{!! "No" !!}</span>
                    @else
                        <span class="label label-success">{!! "Si" !!}</span>
                    @endif

                </td>
                <td>
                    @if(is_null($movie->trailer))
                        <span class="label label-danger">{!! "No" !!}</span>
                    @else
                        <span class="label label-success">{!! "Si" !!}</span>
                    @endif
                </td>
                <td>
                    @if ($movie->availables > 0)
                      <a href="{{ route('rents.create', $movie->id) }}" class="btn btn-primary"><i class="fa fa-usd" aria-hidden="true"></i> Alquilar</a>
                    @endif
                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('movies.destroy', $movie->id) }}"  onclick="return confirm('Esta seguro que desea eliminar la película?')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-right">
        {{ $movies->links() }}
    </div>

@endsection
