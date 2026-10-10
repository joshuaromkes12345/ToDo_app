<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])
    ->name('todo.home');

Route::get('/create', [TaskController::class, 'create'])
    ->name('todo.creates');

Route::post('/store', [TaskController::class, 'store'])
    ->name('todo.store');

Route::get('/show/{id}', [TaskController::class, 'view_content'])
    ->name('todo.show');