@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p><strong>Price: </strong>{{ $product->price }}</p>
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection
