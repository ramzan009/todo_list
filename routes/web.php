<?php

use App\Http\Controllers\Web\Login\LoginController;
use App\Http\Controllers\Web\Main\MainController;
use App\Http\Controllers\Web\Register\RegisterController;
use App\Http\Controllers\Web\Search\SearchController;
use App\Http\Controllers\Web\Task\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [MainController::class, 'main'])->name('main');
    Route::get('/task', [TaskController::class, 'index'])->name('task');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::get('/task/update', [TaskController::class, 'update'])->name('task.update');
    Route::get('/task/delete', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
});
