@extends('layout')

@section('content')
<h1>Nuevo Tractor</h1>
<form method="POST" action="{{ route('tractores.store') }}">
    @csrf
    @include('tractores._form')
</form>
@endsection
