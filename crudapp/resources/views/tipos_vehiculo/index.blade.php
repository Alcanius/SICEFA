@extends('layout')

@section('content')
<h1>Tipos de Vehículo</h1>
<a href="{{ route('tipos_vehiculo.create') }}" class="btn btn-success mb-2">Nuevo</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipos as $tipo)
        <tr>
            <td>{{ $tipo->id }}</td>
            <td>{{ $tipo->descripcion }}</td>
            <td>
                <a href="{{ route('tipos_vehiculo.edit', $tipo) }}" class="btn btn-sm btn-primary">Editar</a>
                <form action="{{ route('tipos_vehiculo.destroy', $tipo) }}" method="POST" class="d-inline">
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
