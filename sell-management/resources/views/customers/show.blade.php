@extends('layout')

@section('content')
    <h1>Thông Tin Khách Hàng: {{ $customer->name }}</h1>
    <p><strong>ID Khách Hàng:</strong> {{ $customer->id }}</p>
    <p><strong>Địa Chỉ:</strong> {{ $customer->address }}</p>
    <p><strong>Số Điện Thoại:</strong> {{ $customer->phone }}</p>
    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Trở Về</a>
@endsection
