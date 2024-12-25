@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <!-- Products -->
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Manage your product catalog.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-light">View Products</a>
                    </div>
                </div>
            </div>

            <!-- Customers -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text">Manage your customers' information.</p>
                        <a href="{{ route('customers.index') }}" class="btn btn-light">View Customers</a>
                    </div>
                </div>
            </div>

            <!-- Orders -->
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Orders</h5>
                        <p class="card-text">Track and manage orders.</p>
                        <a href="{{ route('orders.index') }}" class="btn btn-light">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
