@extends('layouts.app')

@section('title', 'Home - De La Serre Store')

@section('content')
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
        <h5>Categories</h5>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">Laptops</a></li>
            <li class="list-group-item"><a href="#">Smartphones</a></li>
            <li class="list-group-item"><a href="#">Accessories</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="col-md-9">
        <h3>Featured Products</h3>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Path ke gambar -->
                    <img src="{{ asset('assets/images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['price'] }}</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
