<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update/{id}', [StudentController::class, 'update']);
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']);
