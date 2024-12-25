@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p><strong>ID Sản Phẩm:</strong> {{ $product->id }}</p>
    <p><strong>Mô Tả:</strong> {{ $product->description }}</p>
    <p><strong>Giá:</strong> {{ number_format($product->price, 2) }} VNĐ</p>
    <p><strong>Số Lượng tồn kho:</strong> {{ $product->quantity }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Trở Về</a>
@endsection
