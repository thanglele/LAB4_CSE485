<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('orders', OrdersController::class);
Route::resource('orders.order_details', OrderDetailController::class);

//Route::put('/orders/store', [OrdersController::class, 'store']);