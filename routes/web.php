<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//          <- ------ Todo List Root Route ------ ->
Route::get('/', [TodoController::class, 'index'])->name('todo.home');

//         <- ------ Todo List Route ------ ->
Route::resource('/todo', TodoController::class);

