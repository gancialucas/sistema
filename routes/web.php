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

Route::view('/login', 'login');

/*
|--------------------------------------------------------------------------
| CONFIG de 'USER'
|--------------------------------------------------------------------------
*/

Route::get('/user/validation', [UserController::class, 'validation']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [ UserController::class, 'edit']);
Route::put('/user/update', [ UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'confirm']);
Route::delete('/user/destroy', [UserController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| CONFIG de 'DASHBOARD'
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [ DashboardController::class, 'index' ]);
