@extends('layouts.app')

@section('title','Alquileres')

@section('content')

<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Película</th>
        <th>Fecha de reserva</th>

    </tr>
    </thead>
    <tbody>
    @foreach($rents as $rent)
        <tr>
            <td>{{ $rent->id }}</td>
            <td>{{ $rent->user->name}}</td>
            <td>{{ $rent->movie->title }}</td>
            <td>{{ $rent->created_at}}</td>

            <td>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
