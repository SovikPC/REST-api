<?php

use App\Http\Controllers\Api\V1\ComputerController;
use App\Http\Controllers\Api\V1\ComputerModelController;
use App\Http\Controllers\Api\V1\ComputerTypeController;
use App\Http\Controllers\Api\V1\LocationController;
use App\Http\Controllers\Api\V1\ManufacturerController;
use App\Http\Controllers\Api\V1\MonitorController;
use App\Http\Controllers\Api\V1\MonitorModelController;
use App\Http\Controllers\Api\V1\MonitorTypeController;
use App\Http\Controllers\Api\V1\NetworkEquipmentController;
use App\Http\Controllers\Api\V1\NetworkEquipmentModelController;
use App\Http\Controllers\Api\V1\NetworkEquipmentTypeController;
use App\Http\Controllers\Api\V1\PrinterController;
use App\Http\Controllers\Api\V1\PrinterModelController;
use App\Http\Controllers\Api\V1\PrinterTypeController;
use App\Http\Controllers\Api\V1\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Api\V1'], function (){
    Route::apiResource('computers', ComputerController::class);
    Route::apiResource('computer/model', ComputerModelController::class);
    Route::apiResource('computer/type', ComputerTypeController::class);
    Route::apiResource('networks', NetworkEquipmentController::class);
    Route::apiResource('network/model', NetworkEquipmentModelController::class);
    Route::apiResource('network/type', NetworkEquipmentTypeController::class);
    Route::apiResource('printers', PrinterController::class);
    Route::apiResource('printer/model', PrinterModelController::class);
    Route::apiResource('printer/type', PrinterTypeController::class);
    Route::apiResource('monitors', MonitorController::class);
    Route::apiResource('monitor/model', MonitorModelController::class);
    Route::apiResource('monitor/type', MonitorTypeController::class);
    Route::apiResource('manufacturers', ManufacturerController::class);
    Route::apiResource('location', LocationController::class);
//    Route::apiResource('users', UserController::class);
    Route::apiResource('state', StateController::class);
});
