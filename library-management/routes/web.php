<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});

// API routes for borrowing and returning books
Route::post('/api/borrow', [BorrowController::class, 'newborrow']);
//Route::put('/api/return/{id}', [BorrowController::class, 'returnBook']);
