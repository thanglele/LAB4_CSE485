@extends('layouts.app')

@section('content')
    <h1>Chỉnh Sửa Sách</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên Sách</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <div class="form-group">
            <label for="author">Tác Giả</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="category">Thể Loại</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}" required>
        </div>
        <div class="form-group">
            <label for="year">Năm Xuất Bản</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Số Lượng</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $book->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
@endsection
