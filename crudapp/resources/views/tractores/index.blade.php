@extends('layout')

@section('content')
<h1>Tractores</h1>
<a href="{{ route('tractores.create') }}" class="btn btn-success mb-2">Nuevo</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Serial</th>
            <th>Estado</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($tractores as $tractor)
        <tr>
            <td>{{ $tractor->id }}</td>
            <td>{{ $tractor->marca }}</td>
            <td>{{ $tractor->modelo }}</td>
            <td>{{ $tractor->numero_serial }}</td>
            <td>{{ $tractor->estado }}</td>
            <td>
                <a href="{{ route('tractores.edit', $tractor) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('tractores.destroy', $tractor) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
