<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);
    Route::post('signup', [\App\Http\Controllers\Auth\AuthController::class, 'signup']);
    Route::get('health', [\App\Http\Controllers\CyclesController::class, 'getHealth']);

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);
        Route::get('user', [\App\Http\Controllers\Auth\AuthController::class, 'user']);
        Route::patch('update-password', [\App\Http\Controllers\Auth\AuthController::class, 'updateUser']);
    });
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('cycles', [\App\Http\Controllers\CyclesController::class, 'getOrders']);
    Route::get('cycles', [\App\Http\Controllers\CyclesController::class, 'getLast']);
    Route::post('orders', [\App\Http\Controllers\OrdersController::class, 'getOrders']);
    Route::post('payments', [\App\Http\Controllers\Payments\PaymentsController::class, 'getPayments']);
    Route::get('payments', [\App\Http\Controllers\Payments\PaymentsController::class, 'getLast']);
    Route::post('new-payment', [\App\Http\Controllers\Payments\PaymentsController::class, 'getPayments']);
});
