<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| CRUD de Usuarios
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [ DashboardController::class, 'index' ]);
