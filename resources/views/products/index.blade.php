<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="products-list">
        @foreach ($products as $product)
            <div class="product">
                <img src="{{ asset('assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
                <p>Price: {{ $product['price'] }}</p>
                <p>Category: {{ $product['category'] }}</p>
                <a href="{{ url('product-description/' . $product['id']) }}" class="btn-view">View</a> <!-- Tombol View -->
            </div>
        @endforeach
    </div>
@endsection
