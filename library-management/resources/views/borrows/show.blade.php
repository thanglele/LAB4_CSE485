@extends('layouts.app')

@section('content')
    <h1>Chi tiết phiếu mượn</h1>
    <p><strong>Độc giả:</strong> {{ $borrow->reader->name }}</p>
    <p><strong>Sách:</strong> {{ $borrow->book->name }}</p>
    <p><strong>Ngày mượn:</strong> {{ $borrow->borrow_date }}</p>
    <p><strong>Ngày trả:</strong> {{ $borrow->return_date }}</p>
    <p><strong>Trạng thái:</strong> {{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</p>
    <a href="{{ route('borrows.index') }}" class="btn btn-primary">Trở lại danh sách phiếu mượn</a>
@endsection
