<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});

// API routes for borrowing and returning books
Route::get('/borrow', function () {
    return view('borrow');
});
Route::post('/api/newBorrow', [BorrowController::class, 'newborrow']);
Route::put('/api/return/{id}', [BorrowController::class, 'returnBook']);
Route::get('/api/listBorrow', [BorrowController::class,'listBorrow']);