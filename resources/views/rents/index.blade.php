@extends('layouts.app')

@section('title','Mis Alquileres')

@section('content')
{{--<div class="col-lg-8 ">
    <a href="{{ route('movies.index') }}" class="btn btn-success">Nuevo alquiler</a>
</div>--}}
<table class="table table-striped">
    <thead>
    <tr>
        <th>Película</th>
        <th>Fecha de reserva</th>
        <th>Fecha de devolución</th>

    </tr>
    </thead>
    <tbody>
    @foreach($rents as $rent)
        <tr>
            <td>{{ $rent->movie->title }}</td>
            <td>{{ $rent->created_at}}</td>
            @if ($rent->updated_at == null)
              <td>No devuelta aún</td>
            @else
              <td>{{ $rent->updated_at}}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>

<div class="text-right">
    {{ $rents->links() }}
</div>
@endsection
