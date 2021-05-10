<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/register', [UserController::class, 'create']);

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/user', [UserController::class, 'index']);
});

Route::get('/sport/{id}', [App\Http\Controllers\SportController::class, 'show']);

Route::get('/sports/all', [App\Http\Controllers\SportController::class, 'index']);
