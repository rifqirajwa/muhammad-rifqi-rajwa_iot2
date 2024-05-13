<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// device
Route::get('/device', [DeviceController::class, 'index']);
Route::post('/device', [DeviceController::class, 'store']);
Route::get('/device/{id}', [DeviceController::class, 'show']);
Route::put('/device/{id}', [DeviceController::class,'update']);
Route::delete('/device/{id}', [DeviceController::class,'destroy']);

// log
Route::get('/data', [LogController::class, 'index']);
Route::post('/data', [LogController::class, 'store']);
Route::get('/data/{id}', [LogController::class, 'show']);
Route::put('/data/{id}', [LogController::class,'update']);
Route::delete('/data/{id}', [LogController::class,'destroy']);
Route::get('/data/{timestamp}', 'LogController@showByTimestamp');

