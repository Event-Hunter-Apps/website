<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiEventController;
use App\Http\Controllers\Api\ApiTiketController;
use App\Http\Controllers\Api\ApiKategoriController;
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

Route::resource('events', ApiEventController::class);
Route::resource('categories', ApiKategoriController::class);
Route::resource('tikets', ApiTiketController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
