<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="product-description">
        <h2>{{ $product['name'] }}</h2>
        <img src="{{ asset('assets/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
        <p>{{ $product['price'] }}</p>
        <p>Category: {{ $product['category'] }}</p>
        <p><strong>Description:</strong> <i>Deskripsi produk akan ditambahkan di sini.</i></p>

        <!-- Tombol Pembelian -->
        <form action="{{ url('purchase') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
            <button type="submit" class="btn-buy">Buy Now</button>
        </form>
    </div>
@endsection
