@extends('layouts.app')

@section('title','Alquileres')

@section('content')
<div class="col-lg-8 ">
    <a href="{{ route('movies.index') }}" class="btn btn-success">Nuevo alquiler</a>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Película</th>
        <th>Fecha de reserva</th>
        <th>Fecha de devolución</th>

    </tr>
    </thead>
    <tbody>
    @foreach($rents as $rent)
        <tr>
            <td>{{ $rent->id }}</td>
            <td>{{ $rent->user->name}}</td>
            <td>{{ $rent->movie->title }}</td>
            <td>{{ $rent->created_at}}</td>
            <td>{{ $rent->updated_at}}</td>

            <td>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div class="text-right">
    {{ $rents->links() }}
</div>
@endsection
