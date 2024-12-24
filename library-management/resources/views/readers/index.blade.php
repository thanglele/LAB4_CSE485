@extends('layouts.app')

@section('content')
    <h1>Danh Sách Độc Giả</h1>
    <a href="{{ route('readers.create') }}" class="btn btn-primary">Thêm Độc Giả Mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Ngày Sinh</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $reader)
                <tr>
                    <td>{{ $reader->name }}</td>
                    <td>{{ $reader->birthday }}</td>
                    <td>{{ $reader->address }}</td>
                    <td>{{ $reader->phone }}</td>
                    <td>
                        <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info">Chi Tiết</a>
                        <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning">Chỉnh Sửa</a>
                        <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display:inline;">
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
