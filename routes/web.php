<?php

use App\Http\Controllers\{
    StockController
};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::any('/stocks/search', [StockController::class, 'search'])->name('stocks.search');
    Route::get('/stocks/create', [StockController::class, 'create'])->name('stocks.create');
    Route::put('/stocks/{symbol}', [StockController::class, 'update'])->name('stocks.update');
    Route::get('/stocks/edit/{symbol}', [StockController::class, 'edit'])->name('stocks.edit');
    Route::delete('/stocks/{symbol}', [StockController::class, 'destroy'])->name('stocks.destroy');
    Route::get('/stocks/{symbol}', [StockController::class, 'show'])->name('stocks.show');
    Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
    Route::get('/stocks', [StockController::class, 'index'])->name('stocks.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
