<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route:: post('/categories',[CategoryController::class, 'store'])->name('categories.store');
Route::get('/books/{book}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/books/{book}', [CategoryController::class, 'update'])->name('categories.update');

