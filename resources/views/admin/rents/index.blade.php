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
            @if ($rent->updated_at == null)
            <td><a href="{{ route('rents.updateDev',$rent->id) }}" class="btn btn-warning">Registrar devolución</a></td>
            @else
            <td>{{ $rent->updated_at}}</td>
            @endif

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
