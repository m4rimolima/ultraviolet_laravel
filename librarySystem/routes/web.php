<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryControllerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route:: post('/categories',[CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories',[CategoryController::class, 'create'])->name('categories.create');