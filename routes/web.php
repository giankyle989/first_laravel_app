<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentsController::class, 'index'])->middleware('auth');
Route::get('/student/{student}', [StudentsController::class, 'show']);
Route::get('/add/student', [StudentsController::class, 'create']);
Route::post('/add/student', [StudentsController::class, 'store']);
Route::put('/student/{student}', [StudentsController::class, 'update']);
Route::delete('/student/{student}', [StudentsController::class, 'destroy']);




Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);

