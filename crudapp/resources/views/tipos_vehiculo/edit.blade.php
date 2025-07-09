@extends('layout')

@section('content')
<h1>Editar Tipo de Vehículo</h1>
<form method="POST" action="{{ route('tipos_vehiculo.update', $tipoVehiculo) }}">
    @csrf
    @method('PUT')
    @include('tipos_vehiculo._form', ['tipoVehiculo' => $tipoVehiculo])
</form>
@endsection
