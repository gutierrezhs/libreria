<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PrestamoController;

Route::view('/', 'welcome')->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Routas Books
    Route::get('/books', [BookController::class,'index'])->name('books.index');
    Route::get('/books/create', [BookController::class,'create'])->name('books.create');
    Route::post('/books/create', [BookController::class,'store'])->name('books.store');
    Route::get('/books/edit/{book}', [BookController::class,'edit'])->name('books.edit');
    Route::post('/books/edit/{book}', [BookController::class,'update'])->name('books.update');
    Route::get('/books/{book}', [BookController::class,'destroy'])->name('books.delete');
    
    //Rutas Prestamos
    Route::get('/prestamos', [PrestamoController::class,'index'])->name('prestamos.index');
    Route::get('/prestamos/create', [PrestamoController::class,'create'])->name('prestamos.create');
    Route::get('/prestamos/edit/{prestamo}', [PrestamoController::class,'edit'])->name('prestamos.edit');
    Route::post('/prestamos/edit/{prestamo}', [PrestamoController::class,'update'])->name('prestamos.update');
    Route::get('/prestamos/{prestamo}', [PrestamoController::class,'destroy'])->name('prestamos.delete');

});
