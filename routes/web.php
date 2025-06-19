<?php

use App\Http\Controllers\Web\Main\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'main'])->name('main');
