<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
>>>>>>> 74c63d0d2538268b6199162890943ffee7553761
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
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
Route::put('/api/editBorrow/{id}', [BorrowController::class, 'editborrow']);
=======
Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('borrows', BorrowController::class);
>>>>>>> 74c63d0d2538268b6199162890943ffee7553761
