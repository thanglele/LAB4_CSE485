@extends('layouts.app')

@section('content')
    <h1>Thêm phiếu mượn sách</h1>
    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="reader_id">Độc giả:</label>
            <select name="reader_id" id="reader_id" class="form-control" required>
                @foreach($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="book_id">Sách:</label>
            <select name="book_id" id="book_id" class="form-control" required>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="borrow_date">Ngày mượn:</label>
            <input type="date" name="borrow_date" id="borrow_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="return_date">Ngày trả:</label>
            <input type="date" name="return_date" id="return_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu phiếu mượn</button>
    </form>
@endsection
