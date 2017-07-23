@extends('layouts.app')

@section('title','Géneros')

@section('content')
    <div class="row">
        <div class="col-lg-8 ">
            <a href="{{ route('genres.create') }}" class="btn btn-success">Nuevo Género</a>
        </div>

        <div class="col-lg-4">
            {!!   Form::open(['route' => 'genres.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
            <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar género..']) !!}
            </div>
            <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
            {!! Form::close() !!}
        </div><!-- /.col-lg-3 -->
    </div><!-- /.row -->




    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>
                    <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('genres.destroy', $genre->id) }}"  onclick="return confirm('¿Está seguro que desea eliminar el género?')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        {{ $genres->links() }}
    </div>
@endsection