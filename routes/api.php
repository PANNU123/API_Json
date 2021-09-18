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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('json/create', [App\Http\Controllers\JsonControllerController::class, 'create']);
Route::get('json/read', [App\Http\Controllers\JsonControllerController::class, 'read']);
Route::post('json/update/{id}', [App\Http\Controllers\JsonControllerController::class, 'update']);
Route::get('json/delete/{id}', [App\Http\Controllers\JsonControllerController::class, 'delete']);
Route::get('json/user/{id}', [App\Http\Controllers\JsonControllerController::class, 'showid']);

