<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// начальная страница
Route::get('/', [IndexController::class, 'index'])->name('index');

// создание задачи
Route::post('/tasks', [IndexController::class, 'store'])->name('store');

// просмотр списка задач
Route::get('/tasks', [IndexController::class, 'tasks'])->name('tasks');

// Просмотр одной задачи
Route::get('/tasks/{id}', [IndexController::class, 'show'])->name('show');

// Обновление задачи
Route::put('/tasks/{id}', [IndexController::class, 'update'])->name('update');

// Удаление задачи
Route::delete('/tasks/{id}', [IndexController::class, 'destroy'])->name('delete');
