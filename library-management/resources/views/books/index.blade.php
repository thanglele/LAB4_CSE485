@extends('layouts.app')

@section('content')
    <h1>Danh Sách Sách</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Thêm Sách Mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>Tên Sách</th>
                <th>Tác Giả</th>
                <th>Thể Loại</th>
                <th>Ngày Xuất Bản</th>
                <th>Số Lượng</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Chi Tiết</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Chỉnh Sửa</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
