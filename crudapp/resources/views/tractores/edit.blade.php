@extends('layout')

@section('content')
<h1>Editar Tractor</h1>
<form method="POST" action="{{ route('tractores.update', $tractor) }}">
    @csrf
    @method('PUT')
    @include('tractores._form', ['tractor' => $tractor])
</form>
@endsection
