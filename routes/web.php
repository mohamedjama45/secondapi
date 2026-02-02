<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order', function() {
    return view('orders.index');
});

Route::post('/order', [OrderController::class, 'store'])->name('orders.add');

Route::get('/orders', [OrderController::class, 'index']);
