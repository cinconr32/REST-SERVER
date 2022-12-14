<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TagihanController;
use App\Http\Controllers\API\CustomerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'test', 'namespace' => 'App\Http\Controllers\API', 'middleware' => 'auth:sanctum'], function() {
    Route::apiResource('customer', CustomerController::class);
    Route::apiResource('tagihan', TagihanController::class);
    Route::post('tagihan/bulk', [TagihanController::class, 'bulkStore']);
});