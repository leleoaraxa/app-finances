<?php

use App\Http\Controllers\{
    StockController
};
use Illuminate\Support\Facades\Route;

Route::get('/stocks/{symbol}', [StockController::class, 'show'])->name('stocks.show');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::get('/stocks/create', [StockController::class, 'create'])->name('stocks.create');
Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');

Route::get('/', function () {
    return view('welcome');
});
