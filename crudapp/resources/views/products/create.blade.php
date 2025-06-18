@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @include('products._form')
    </form>
@endsection
