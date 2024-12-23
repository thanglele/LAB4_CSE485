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
Route::put('/api/returnBook/{id}', [BorrowController::class, 'returnBook']);
Route::get('/api/listBorrow', [BorrowController::class,'listBorrow']);
Route::get('/api/BorrowWithId/{id}', [BorrowController::class,'BorrowWithId']);
Route::put('/api/editReturnBook/{id}', [BorrowController::class, 'editReturnBook']);
Route::delete('/api/deleteBorrow/{id}', [BorrowController::class, 'deleteBorrow']);
