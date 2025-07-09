@extends('layout')

@section('content')
<h1>Nuevo Tipo de Vehículo</h1>
<form method="POST" action="{{ route('tipos_vehiculo.store') }}">
    @csrf
    @include('tipos_vehiculo._form')
</form>
@endsection
