@extends('layouts.app')

@section('content')
    <h1>Sửa thông tin độc giả: {{ $reader->name }}</h1>
    <form action="{{ route('readers.update', $reader->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên độc giả:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $reader->name }}" required>
        </div>
        <div class="form-group">
            <label for="birthday">Ngày sinh:</label>
            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $reader->birthday }}" required>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $reader->address }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $reader->phone }}" required>
        </div>
        <button type="submit" class="btn btn-success">Cập nhật</button>
    </form>
@endsection
