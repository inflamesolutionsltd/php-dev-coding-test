@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Add New Product</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm rounded-3">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            {{-- Name --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" value="{{ old('name') }}" required>
                            </div>

                            {{-- Price --}}
                            <div class="mb-3">
                                <label for="price" class="form-label">Price ($)</label>
                                <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Enter price" value="{{ old('price') }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                    Create Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
