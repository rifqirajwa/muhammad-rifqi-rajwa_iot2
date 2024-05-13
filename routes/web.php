<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use App\Models\Device;
use App\Models\Log;

Route::get('/', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//devices
Route::get('/devices', [DeviceController::class, 'web_index']);
Route::get('/devices/{id}', [LogController::class, 'web_show']);

// //logs
// Route::get('/logs', [LogController::class, 'web_index']);
// Route::get('/logs/{id}', [LogController::class, 'web_show']);
