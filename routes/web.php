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

Route::delete('delete/{task}', [TaskController::class, 'destroy'])
    ->name('todo.destroy');

Route::get('/update/{id}', [TaskController::class, 'update'])
    ->name('todo.update');

Route::post('/update/{id}', [TaskController::class, 'store_update'])
    ->name('todo.store_update');

Route::get('/import', [TaskController::class, 'import'])
    ->name('todo.import');
Route::post('/import', [TaskController::class, 'store_import'])
    ->name('todo.store_import');
