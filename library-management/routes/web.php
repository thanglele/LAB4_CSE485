<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('books', BookController::class);
Route::resource('readers', ReaderController::class);
Route::resource('borrows', BorrowController::class);

// API routes for borrowing and returning books
// Route::get('/borrows', function () {
//     return view('borrows');
// });
// Route::post('/api/newBorrow', [BorrowController::class, 'newborrow']);
// Route::put('/api/returnBook/{id}', [BorrowController::class, 'returnBook']);
// Route::get('/api/listBorrow', [BorrowController::class,'listBorrow']);
// Route::get('/api/BorrowWithId/{id}', [BorrowController::class,'BorrowWithId']);
// Route::put('/api/editReturnBook/{id}', [BorrowController::class, 'editReturnBook']);
// Route::delete('/api/deleteBorrow/{id}', [BorrowController::class, 'deleteBorrow']);
// Route::put('/api/editBorrow/{id}', [BorrowController::class, 'editborrow']);
//Route::post('/api/store', [ReaderController::class, 'store']);
// Route::put('/api/returnReader/{id}', [ReaderController::class, 'returnReader']);
// Route::get('/api/listReader', [ReaderController::class, 'listReader']);
// Route::get('/api/ReaderWithId/{id}', [ReaderController::class, 'ReaderWithId']);
// Route::put('/api/editReader/{id}', [ReaderController::class, 'editReader']);
// Route::delete('/api/deleteReader/{id}', [ReaderController::class, 'deleteReader']);

