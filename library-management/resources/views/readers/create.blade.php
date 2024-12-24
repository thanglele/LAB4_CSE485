@extends('layouts.app')

@section('content')
    <h1>Thêm độc giả mới</h1>
    <form action="{{ route('readers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên độc giả:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="birthday">Ngày sinh:</label>
            <input type="date" name="birthday" id="birthday" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
@endsection
