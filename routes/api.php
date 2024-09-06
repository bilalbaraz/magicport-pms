<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['prefix' => 'projects', 'as' => 'project.'], function () {
        Route::get('', [ProjectController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'tasks', 'as' => 'task.'], function () {
        Route::get('', [TaskController::class, 'index'])->name('index');
    });
});
