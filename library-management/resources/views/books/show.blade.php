@extends('layouts.app')

@section('content')
    <h1>{{ $book->name }}</h1>
    <p><strong>Tác Giả:</strong> {{ $book->author }}</p>
    <p><strong>Thể Loại:</strong> {{ $book->category }}</p>
    <p><strong>Năm Xuất Bản:</strong> {{ $book->year }}</p>
    <p><strong>Số Lượng:</strong> {{ $book->quantity }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Trở Về</a>
@endsection
