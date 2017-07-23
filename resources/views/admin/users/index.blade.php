@extends('layouts.app')

@section('title',__('messages.users'))

@section('content')
    <div class="col-lg-9 ">
        <a href="{{ route('users.create') }}" class="btn btn-success">Nuevo Usuario</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>DNI</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name.' '.$user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->dni }}</td>
                <td>
                @if($user->type == 'admin')
                    <span class="label label-danger"> {{ $user->type }}</span>
                @else
                    <span class="label label-primary"> {{ $user->type }}</span>
                @endif
                </td>
                <td>
                  @if($user->type == 'member')
                    <a href="{{ route('users.rents', $user->id) }}" class="btn btn-primary"><i class="fa fa-usd" aria-hidden="true"></i> Alquileres</a>
                  @endif

                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="{{ route('users.destroy', $user->id) }}"  onclick="return confirm('¿Está seguro que desea eliminar el usuario?')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        {{ $users->links() }}
    </div>
@endsection
