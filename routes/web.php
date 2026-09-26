<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);

// Bonus: one-click status toggle from the task list (Pending <-> Completed)
Route::patch('/tasks/{task}/toggle-status', [TaskController::class, 'toggleStatus'])
    ->name('tasks.toggleStatus');
