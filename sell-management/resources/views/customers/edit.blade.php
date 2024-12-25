@extends('layout')

@section('content')
    <h1>Sửa thông tin khách hàng: {{ $customer->name }}</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id">ID Khách hàng:</label>
            <input type="text" name="id" id="id" class="form-control" value="{{ $customer->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">Tên khách hàng:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required>
        </div>

        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $customer->phone }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" required>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
@endsection
