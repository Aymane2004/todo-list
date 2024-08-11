<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/todo/task',[TaskController::class,'getTasks']);

Route::get('/todo/task/{id}',[TaskController::class,'getTaskById']);

Route::post('/todo/task',[TaskController::class,'createTask']);

Route::put('/todo/task/{id}',[TaskController::class,'updateTask']);

Route::delete('/todo/task/{id}',[TaskController::class,'deleteTask']);
