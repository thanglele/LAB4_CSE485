@extends('layouts.app')

@section('content')
    <h1>Chi Tiết Đơn Hàng: {{ $order->id }}</h1>
    <p><strong>Khách Hàng:</strong> {{ $order->customer->name }}</p>
    <p><strong>Ngày Đặt Hàng:</strong> {{ $order->order_date }}</p>

    <h2>Danh Sách Sản Phẩm</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Thành Tiền</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->orderDetails as $index => $detail)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $detail->product->name }}</td>
                <td>{{ $detail->quantity }}</td>
                <td>{{ number_format($detail->product->price, 2) }} VNĐ</td>
                <td>{{ number_format($detail->quantity * $detail->product->price, 2) }} VNĐ</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <p><strong>Tổng Cộng:</strong>
        {{ number_format($order->orderDetails->sum(function($detail) {
            return $detail->quantity * $detail->product->price;
        }), 2) }} VNĐ
    </p>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Trở Về</a>
@endsection
