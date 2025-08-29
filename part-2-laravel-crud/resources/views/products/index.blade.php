@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="mb-0">Our Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-success btn-lg rounded-pill">
                + Add New Product
            </a>
        </div>

        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold">
                                {{ $product['name'] }}
                            </h5>
                            <p class="card-text text-muted mb-3">
                                ${{ number_format($product['price'], 2) }}
                            </p>
                            <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-outline-primary btn-sm rounded-pill">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
