<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::post('/tasks', [IndexController::class, 'store'])->name('store');

Route::get('/tasks', [IndexController::class, 'view_all'])->name('view_all');

Route::get('/tasks/{id}', [IndexController::class, 'show'])->name('show');

Route::put('/tasks/{id}', [IndexController::class, 'update'])->name('update');

Route::delete('/tasks/{id}', [IndexController::class, 'destroy'])->name('delete');
