<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('my.home');
Route::get('/books', [HomeController::class, 'books'])->name('my.books');
