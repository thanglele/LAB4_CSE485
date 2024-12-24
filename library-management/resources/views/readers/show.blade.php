@extends('layouts.app')

@section('content')
    <h1>Chi tiết độc giả: {{ $reader->name }}</h1>
    <p><strong>Ngày sinh:</strong> {{ $reader->birthday }}</p>
    <p><strong>Địa chỉ:</strong> {{ $reader->address }}</p>
    <p><strong>Số điện thoại:</strong> {{ $reader->phone }}</p>
    <a href="{{ route('readers.index') }}" class="btn btn-primary">Trở lại danh sách</a>
@endsection
