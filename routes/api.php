<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::post('sign-in', [AuthController::class, 'signIn'])->name('sign_in');
    Route::post('sign-up', [AuthController::class, 'signUp'])->name('sign_up');
    Route::post('profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth:sanctum');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['prefix' => 'projects', 'as' => 'project.'], function () {
        Route::get('', [ProjectController::class, 'index'])->name('index');
    });

    Route::group(['prefix' => 'tasks', 'as' => 'task.'], function () {
        Route::get('', [TaskController::class, 'index'])->name('index');
    });
});
