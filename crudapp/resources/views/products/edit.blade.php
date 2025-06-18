@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        @include('products._form')
    </form>
@endsection
