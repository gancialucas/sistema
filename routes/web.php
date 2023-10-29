<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| CONFIG de 'LOGIN'
|--------------------------------------------------------------------------
*/

Route::get('/login', [UserController::class, 'index']);
Route::get('/user/validation', [UserController::class, 'validation']);
Route::get('/user/store', [UserController::class, 'store']);

/*
|--------------------------------------------------------------------------
| CONFIG de 'DASHBOARD'
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [ DashboardController::class, 'index' ]);
