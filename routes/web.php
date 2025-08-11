<?php

use App\Http\Controllers\Web\Login\LoginController;
use App\Http\Controllers\Web\Main\MainController;
use App\Http\Controllers\Web\Register\RegisterController;
use App\Http\Controllers\Web\Search\SearchController;
use App\Http\Controllers\Web\Task\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('logging');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registration', [RegisterController::class, 'create'])->name('registration');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [MainController::class, 'main'])->name('main');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('/task/{id}', [TaskController::class, 'index'])->name('task');
    Route::get('/task/update/{id}', [TaskController::class, 'update'])->name('task.update');

    Route::put('/task/update/{task}', [TaskController::class, 'taskUpdate'])->name('task.update.put');


    Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
