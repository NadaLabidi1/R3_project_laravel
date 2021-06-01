<?php

use App\Http\Controllers\InfoApiController;
use App\Models\information;
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

Route::get('/informations', [InfoApiController::class, 'index']);
Route::post('/informations', [InfoApiController::class, 'store']);
Route::put('/informations/{information}', [InfoApiController::class, 'update']);
Route::delete('/informations/{information}', [InfoApiController::class, 'destroy']);



