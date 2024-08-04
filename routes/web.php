<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/task',[TaskController::class,'getTasks']);

Route::get('/todo/task/{id}',[TaskController::class,'getTaskById']);
