@extends('layouts.app')

@section('content')
    <h1>Danh sách phiếu mượn</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Độc giả</th>
                <th>Sách</th>
                <th>Ngày mượn</th>
                <th>Ngày trả</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->reader->name }}</td>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrow_date }}</td>
                    <td>{{ $borrow->return_date }}</td>
                    <td>{{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</td>
                    <td>
                        <a href="{{ route('borrows.show', $borrow->id) }}" class="btn btn-info">Chi tiết</a>
                        <a href="{{ route('borrows.edit', $borrow->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa phiếu mượn này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
