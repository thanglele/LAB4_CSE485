@extends('layout')

@section('content')
    <h1>Sửa thông tin sản phẩm: {{ $product->name }}</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id">ID Sản phẩm:</label>
            <input type="text" name="id" id="id" class="form-control" value="{{ $product->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả sản phẩm:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Giá sản phẩm:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" min="0" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}" min="0" required>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
@endsection
